<?php

namespace App\Service;
use Symfony\Component\HttpFoundation\Response;

use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class ExportService
{
    private $twig;
    private $dompdf;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $this->dompdf = new Dompdf($options);
    }

    public function exportOrderToPdf($order): Response
{
    // Render the Twig template with the order data
    $html = $this->twig->render('orders/pdf_template.html.twig', [
        'order' => $order,
    ]);

    // Load HTML into Dompdf
    $this->dompdf->loadHtml($html);

    // (Optional) Set paper size
    $this->dompdf->setPaper('A4', 'portrait');

    // Render PDF (first pass)
    $this->dompdf->render();

    // Output the generated PDF (force download)
    return new Response(
        $this->dompdf->output(),
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="order_' . $order->getReference() . '.pdf"'
        ]
    );
}

}
