<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231027124340 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vpar_hour CHANGE monday monday TIME NOT NULL, CHANGE tuesday tuesday TIME NOT NULL, CHANGE wednesday wednesday TIME NOT NULL, CHANGE thursday thursday TIME NOT NULL, CHANGE friday friday TIME NOT NULL, CHANGE saturday saturday TIME NOT NULL, CHANGE sunday sunday TIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vpar_hour CHANGE monday monday INT DEFAULT NULL, CHANGE tuesday tuesday INT DEFAULT NULL, CHANGE wednesday wednesday INT DEFAULT NULL, CHANGE thursday thursday INT DEFAULT NULL, CHANGE friday friday INT DEFAULT NULL, CHANGE saturday saturday INT DEFAULT NULL, CHANGE sunday sunday INT DEFAULT NULL');
    }
}
