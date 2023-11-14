<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231107081818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(50) DEFAULT NULL, firstname VARCHAR(50) DEFAULT NULL, phone INT DEFAULT NULL, email VARCHAR(180) NOT NULL, subject VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, lastname VARCHAR(50) NOT NULL, firstname VARCHAR(50) NOT NULL, function VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vpar_avis (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', lastname VARCHAR(50) NOT NULL, firstname VARCHAR(50) NOT NULL, rank INT NOT NULL, message LONGTEXT NOT NULL, approve TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vpar_hour (id INT AUTO_INCREMENT NOT NULL, monday TIME NOT NULL, tuesday TIME NOT NULL, wednesday TIME NOT NULL, thursday TIME NOT NULL, friday TIME NOT NULL, saturday TIME NOT NULL, sunday TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vpar_service (id INT AUTO_INCREMENT NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', title VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vpar_vehicle (id INT AUTO_INCREMENT NOT NULL, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, year INT NOT NULL, mileage INT NOT NULL, energy VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, power INT NOT NULL, fiscalpower INT NOT NULL, price DOUBLE PRECISION NOT NULL, image_name1 VARCHAR(255) DEFAULT NULL, image_name2 VARCHAR(255) DEFAULT NULL, image_name3 VARCHAR(255) DEFAULT NULL, updated_at DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', gearbox VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vpar_avis');
        $this->addSql('DROP TABLE vpar_hour');
        $this->addSql('DROP TABLE vpar_service');
        $this->addSql('DROP TABLE vpar_vehicle');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
