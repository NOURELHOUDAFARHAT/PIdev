<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215194132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, num_immatriculation VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, prix_per_day DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation_des_biens CHANGE prix prix INT NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reservation_des_voitures CHANGE prix prix DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE reservations_des_activiter CHANGE prix prix INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE voiture');
        $this->addSql('ALTER TABLE reservations_des_activiter CHANGE prix prix INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_des_biens CHANGE prix prix INT DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_des_voitures CHANGE prix prix DOUBLE PRECISION DEFAULT NULL');
    }
}
