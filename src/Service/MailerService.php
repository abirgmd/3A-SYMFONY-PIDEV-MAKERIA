<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

class MailerService
{
    private MailerInterface $mailer;

    public function __construct()
    {
        // Set up Gmail SMTP transport manually
        $dsn = 'smtp://rahmadraouil2020@gmail.com:zymsryyufccaijqd@smtp.gmail.com:587';
        $transport = Transport::fromDsn($dsn);
        $this->mailer = new Mailer($transport);
    }

    public function sendEmail(
        string $to = 'rahmadraouil2020@gmail.com',
        string $content = '<p>commande bien passée</p>',
        string $subject = 'Time for Symfony Mailer!'
    ): void {
        try {
            $email = (new Email())
                ->from('rahmadraouil2020@gmail.com')  
                ->to($to)
                ->subject($subject)
                ->html($content);

            $this->mailer->send($email);
        } catch (\Exception $e) {
            error_log('Email failed: ' . $e->getMessage());
        }
    }
}
