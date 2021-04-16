<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210416104916 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE annonce (id INT AUTO_INCREMENT NOT NULL, identifient VARCHAR(255) DEFAULT NULL, title VARCHAR(255) NOT NULL, contrat VARCHAR(255) NOT NULL, tel VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, salaire VARCHAR(255) NOT NULL, mission VARCHAR(8000) NOT NULL, profil LONGTEXT NOT NULL, code_postal VARCHAR(255) NOT NULL, mois VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE annonce');
    }
}
