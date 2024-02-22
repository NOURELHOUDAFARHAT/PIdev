<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222205118 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_des_voitures CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE voiture_id modelevoiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_des_voitures ADD CONSTRAINT FK_4DFC852EA27BB0B5 FOREIGN KEY (modelevoiture_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_4DFC852EA27BB0B5 ON reservation_des_voitures (modelevoiture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_des_voitures DROP FOREIGN KEY FK_4DFC852EA27BB0B5');
        $this->addSql('DROP INDEX IDX_4DFC852EA27BB0B5 ON reservation_des_voitures');
        $this->addSql('ALTER TABLE reservation_des_voitures CHANGE id id INT NOT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE modelevoiture_id voiture_id INT DEFAULT NULL');
    }
}
