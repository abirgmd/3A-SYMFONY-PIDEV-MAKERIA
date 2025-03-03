<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250207111436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, date_rec DATETIME NOT NULL, images_reclamation1 VARCHAR(255) NOT NULL, images_reclamation2 VARCHAR(255) NOT NULL, description_rec LONGTEXT NOT NULL, stat_rec VARCHAR(255) NOT NULL, id_article INT NOT NULL, id_utilisateur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponses (id INT AUTO_INCREMENT NOT NULL, id_rec_id INT DEFAULT NULL, date_rep DATETIME NOT NULL, contenu_rep VARCHAR(255) NOT NULL, id_admin INT NOT NULL, INDEX IDX_1E512EC6305E0476 (id_rec_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reponses ADD CONSTRAINT FK_1E512EC6305E0476 FOREIGN KEY (id_rec_id) REFERENCES reclamation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponses DROP FOREIGN KEY FK_1E512EC6305E0476');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponses');
    }
}
