<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228152312 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE feedback (id INT AUTO_INCREMENT NOT NULL, comment VARCHAR(255) NOT NULL, note INT NOT NULL, bien_refB INT DEFAULT NULL, INDEX IDX_D22944582E54DE2F (bien_refB), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE feedback ADD CONSTRAINT FK_D22944582E54DE2F FOREIGN KEY (bien_refB) REFERENCES bien (refB)');
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB9B0DB5FE');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB9B0DB5FE FOREIGN KEY (ref_b) REFERENCES bien (ref_b)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE feedback DROP FOREIGN KEY FK_D22944582E54DE2F');
        $this->addSql('DROP TABLE feedback');
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB9B0DB5FE');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB9B0DB5FE FOREIGN KEY (ref_b) REFERENCES bien (ref_b) ON DELETE CASCADE');
    }
}
