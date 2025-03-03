<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303153015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE commentaire CHANGE event_id event_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE dislikes dislikes INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
        $this->addSql('ALTER TABLE evaluation CHANGE dislikes dislikes INT DEFAULT 0 NOT NULL, CHANGE likes likes INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1323A575A76ED395 ON evaluation (user_id)');
        $this->addSql('ALTER TABLE order_informations DROP INDEX FK_6B56F0E3CFFE9AD6, ADD UNIQUE INDEX UNIQ_6B56F0E3CFFE9AD6 (orders_id)');
        $this->addSql('ALTER TABLE paiement DROP INDEX FK_B1DC7A1ECFFE9AD6, ADD UNIQUE INDEX UNIQ_B1DC7A1ECFFE9AD6 (orders_id)');
        $this->addSql('ALTER TABLE produit DROP prixPromo, DROP promotionExpireAt, CHANGE prix_promo prix_promo DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640450EAE44 FOREIGN KEY (id_utilisateur) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CE60640450EAE44 ON reclamation (id_utilisateur)');
        $this->addSql('ALTER TABLE reply CHANGE contenureply contenureply VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE reponses CHANGE id_rec_id id_rec_id INT NOT NULL');
        $this->addSql('ALTER TABLE reponses ADD CONSTRAINT FK_1E512EC6668B4C46 FOREIGN KEY (id_admin) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1E512EC6668B4C46 ON reponses (id_admin)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, headers LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, queue_name VARCHAR(190) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('DROP INDEX IDX_67F068BCA76ED395 ON commentaire');
        $this->addSql('ALTER TABLE commentaire CHANGE user_id user_id INT DEFAULT NULL, CHANGE event_id event_id INT DEFAULT NULL, CHANGE dislikes dislikes INT DEFAULT 0');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575A76ED395');
        $this->addSql('DROP INDEX IDX_1323A575A76ED395 ON evaluation');
        $this->addSql('ALTER TABLE evaluation CHANGE likes likes INT DEFAULT 0, CHANGE dislikes dislikes INT DEFAULT 0');
        $this->addSql('ALTER TABLE order_informations DROP INDEX UNIQ_6B56F0E3CFFE9AD6, ADD INDEX FK_6B56F0E3CFFE9AD6 (orders_id)');
        $this->addSql('ALTER TABLE paiement DROP INDEX UNIQ_B1DC7A1ECFFE9AD6, ADD INDEX FK_B1DC7A1ECFFE9AD6 (orders_id)');
        $this->addSql('ALTER TABLE produit ADD prixPromo DOUBLE PRECISION DEFAULT NULL, ADD promotionExpireAt DATETIME DEFAULT NULL, CHANGE prix_promo prix_promo NUMERIC(10, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640450EAE44');
        $this->addSql('DROP INDEX IDX_CE60640450EAE44 ON reclamation');
        $this->addSql('ALTER TABLE reply CHANGE contenureply contenureply VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reponses DROP FOREIGN KEY FK_1E512EC6668B4C46');
        $this->addSql('DROP INDEX IDX_1E512EC6668B4C46 ON reponses');
        $this->addSql('ALTER TABLE reponses CHANGE id_rec_id id_rec_id INT DEFAULT NULL');
    }
}
