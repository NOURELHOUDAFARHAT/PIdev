<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222213929 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX id ON reservation_des_voitures');
        $this->addSql('ALTER TABLE reservation_des_voitures ADD name_id INT DEFAULT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reservation_des_voitures ADD CONSTRAINT FK_4DFC852E71179CD6 FOREIGN KEY (name_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_4DFC852E71179CD6 ON reservation_des_voitures (name_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_des_voitures MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation_des_voitures DROP INDEX primary, ADD INDEX id (id)');
        $this->addSql('ALTER TABLE reservation_des_voitures DROP FOREIGN KEY FK_4DFC852E71179CD6');
        $this->addSql('DROP INDEX IDX_4DFC852E71179CD6 ON reservation_des_voitures');
        $this->addSql('ALTER TABLE reservation_des_voitures DROP name_id, CHANGE id id INT NOT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL');
    }
}
