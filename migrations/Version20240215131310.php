<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215131310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE réservation_des_biens ADD prix INT NOT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD duree DATE NOT NULL, ADD date_debut DATE NOT NULL, ADD date_fin DATE NOT NULL, ADD nombre_de_membre INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE réservation_des_biens DROP prix, DROP adresse, DROP duree, DROP date_debut, DROP date_fin, DROP nombre_de_membre');
    }
}
