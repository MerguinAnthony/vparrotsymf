<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231118185126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE vpar_hour ADD days VARCHAR(10) NOT NULL, ADD hours VARCHAR(23) NOT NULL, DROP monday, DROP tuesday, DROP wednesday, DROP thursday, DROP friday, DROP saturday, DROP sunday');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vpar_hour ADD monday TIME NOT NULL, ADD tuesday TIME NOT NULL, ADD wednesday TIME NOT NULL, ADD thursday TIME NOT NULL, ADD friday TIME NOT NULL, ADD saturday TIME NOT NULL, ADD sunday TIME NOT NULL, DROP days, DROP hours');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }
}
