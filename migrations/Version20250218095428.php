<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218095428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE prix prix NUMERIC(10, 2) NOT NULL, CHANGE pourcentage_don pourcentage_don NUMERIC(5, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE facture CHANGE tva tva NUMERIC(5, 2) NOT NULL, CHANGE montant_ttc montant_ttc NUMERIC(10, 2) NOT NULL, CHANGE montant_don montant_don NUMERIC(10, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE message ADD image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE pourcentage_don pourcentage_don DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE facture CHANGE tva tva DOUBLE PRECISION NOT NULL, CHANGE montant_ttc montant_ttc DOUBLE PRECISION NOT NULL, CHANGE montant_don montant_don DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE message DROP image');
    }
}
