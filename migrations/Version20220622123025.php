<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220622123025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE logs (id INT AUTO_INCREMENT NOT NULL, requests_id INT DEFAULT NULL, createdby_id INT NOT NULL, INDEX IDX_F08FC65C418F94FA (requests_id), INDEX IDX_F08FC65CF0B5AF0B (createdby_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE logs ADD CONSTRAINT FK_F08FC65C418F94FA FOREIGN KEY (requests_id) REFERENCES request (id)');
        $this->addSql('ALTER TABLE logs ADD CONSTRAINT FK_F08FC65CF0B5AF0B FOREIGN KEY (createdby_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE logs');
    }
}
