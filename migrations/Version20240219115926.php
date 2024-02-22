<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219115926 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_des_voitures ADD nom_v_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_des_voitures ADD CONSTRAINT FK_4DFC852E4C0F610 FOREIGN KEY (nom_v_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_4DFC852E4C0F610 ON reservation_des_voitures (nom_v_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_des_voitures DROP FOREIGN KEY FK_4DFC852E4C0F610');
        $this->addSql('DROP INDEX IDX_4DFC852E4C0F610 ON reservation_des_voitures');
        $this->addSql('ALTER TABLE reservation_des_voitures DROP nom_v_id');
    }
}
