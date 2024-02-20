<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240214153828 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite_staff (activite_id INT NOT NULL, staff_id INT NOT NULL, INDEX IDX_FC12339B9B0F88B1 (activite_id), INDEX IDX_FC12339BD4D57CD (staff_id), PRIMARY KEY(activite_id, staff_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE staff (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, num_tel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activite_staff ADD CONSTRAINT FK_FC12339B9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite_staff ADD CONSTRAINT FK_FC12339BD4D57CD FOREIGN KEY (staff_id) REFERENCES staff (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite_staff DROP FOREIGN KEY FK_FC12339B9B0F88B1');
        $this->addSql('ALTER TABLE activite_staff DROP FOREIGN KEY FK_FC12339BD4D57CD');
        $this->addSql('DROP TABLE activite_staff');
        $this->addSql('DROP TABLE staff');
    }
}
