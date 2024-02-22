<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222203347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_des_voitures ADD nom_id INT DEFAULT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE voiture_id voiture_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_des_voitures ADD CONSTRAINT FK_4DFC852E181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id)');
        $this->addSql('ALTER TABLE reservation_des_voitures ADD CONSTRAINT FK_4DFC852EC8121CE9 FOREIGN KEY (nom_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_4DFC852E181A8BA ON reservation_des_voitures (voiture_id)');
        $this->addSql('CREATE INDEX IDX_4DFC852EC8121CE9 ON reservation_des_voitures (nom_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_des_voitures DROP FOREIGN KEY FK_4DFC852E181A8BA');
        $this->addSql('ALTER TABLE reservation_des_voitures DROP FOREIGN KEY FK_4DFC852EC8121CE9');
        $this->addSql('DROP INDEX IDX_4DFC852E181A8BA ON reservation_des_voitures');
        $this->addSql('DROP INDEX IDX_4DFC852EC8121CE9 ON reservation_des_voitures');
        $this->addSql('ALTER TABLE reservation_des_voitures DROP nom_id, CHANGE id id INT NOT NULL, CHANGE voiture_id voiture_id INT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL');
    }
}
