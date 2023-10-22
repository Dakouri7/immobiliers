<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231022074703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bien (id INT AUTO_INCREMENT NOT NULL, id_statut_id INT NOT NULL, id_type_bien_id INT NOT NULL, id_ville_id INT NOT NULL, id_user_id INT NOT NULL, description VARCHAR(255) NOT NULL, situation_geographique VARCHAR(255) NOT NULL, superficie VARCHAR(255) NOT NULL, montant_bien INT NOT NULL, nbre_pieces INT NOT NULL, nbre_chbres INT NOT NULL, nbre_salon INT NOT NULL, nbre_wc INT NOT NULL, nbre_chbre_auto INT NOT NULL, nbre_chbre_simple INT NOT NULL, nbre_chbre_simple_placards INT NOT NULL, nbre_chbre_dressing INT NOT NULL, nbre_garage INT NOT NULL, nbre_piscine INT NOT NULL, cour_avant INT NOT NULL, cour_arriere INT NOT NULL, image_facade VARCHAR(255) NOT NULL, image_salon VARCHAR(255) NOT NULL, image_cuisine VARCHAR(255) NOT NULL, image_douche_chbre_principale VARCHAR(255) NOT NULL, image_chbre_simple1 VARCHAR(255) NOT NULL, image_chbre_simple2 VARCHAR(255) NOT NULL, image_chbre_simple3 VARCHAR(255) NOT NULL, image_douche_chbre_simple1 VARCHAR(255) NOT NULL, image_douche_chbre_simple2 VARCHAR(255) NOT NULL, image_douche_chbre_simple3 VARCHAR(255) NOT NULL, image_douche_visiteur VARCHAR(255) NOT NULL, video_bien VARCHAR(255) NOT NULL, annee_bien VARCHAR(255) NOT NULL, etat_bien INT NOT NULL, date_saisie DATETIME NOT NULL, date_modification DATETIME NOT NULL, id_user_saisie VARCHAR(255) NOT NULL, INDEX IDX_45EDC38676158423 (id_statut_id), INDEX IDX_45EDC386B675A288 (id_type_bien_id), INDEX IDX_45EDC386F7E4ECA3 (id_ville_id), INDEX IDX_45EDC38679F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, lib_pays VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut (id INT AUTO_INCREMENT NOT NULL, lib_statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_bien (id INT AUTO_INCREMENT NOT NULL, lib_type_bien VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(256) NOT NULL, nom VARCHAR(255) NOT NULL, prenoms VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', email VARCHAR(255) NOT NULL, numtelephone VARCHAR(255) NOT NULL, emploi VARCHAR(255) NOT NULL, reset_token VARCHAR(255) NOT NULL, date_crea DATETIME NOT NULL, statut INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, id_pays_id INT NOT NULL, lib_ville VARCHAR(255) NOT NULL, INDEX IDX_43C3D9C37879EB34 (id_pays_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC38676158423 FOREIGN KEY (id_statut_id) REFERENCES statut (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386B675A288 FOREIGN KEY (id_type_bien_id) REFERENCES type_bien (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386F7E4ECA3 FOREIGN KEY (id_ville_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC38679F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE ville ADD CONSTRAINT FK_43C3D9C37879EB34 FOREIGN KEY (id_pays_id) REFERENCES pays (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC38676158423');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386B675A288');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386F7E4ECA3');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC38679F37AE5');
        $this->addSql('ALTER TABLE ville DROP FOREIGN KEY FK_43C3D9C37879EB34');
        $this->addSql('DROP TABLE bien');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE statut');
        $this->addSql('DROP TABLE type_bien');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE ville');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
