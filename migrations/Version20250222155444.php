<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250222155444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation ADD id_utilisateur INT NOT NULL, DROP user_id');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A57550EAE44 FOREIGN KEY (id_utilisateur) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1323A57550EAE44 ON evaluation (id_utilisateur)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A57550EAE44');
        $this->addSql('DROP INDEX IDX_1323A57550EAE44 ON evaluation');
        $this->addSql('ALTER TABLE evaluation ADD user_id INT DEFAULT NULL, DROP id_utilisateur');
    }
}
