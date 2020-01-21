<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200121101639 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE scoutangre (id INT AUTO_INCREMENT NOT NULL, nomprenoms VARCHAR(255) NOT NULL, datenaiss DATE NOT NULL, lieunaiss VARCHAR(255) NOT NULL, nationalite VARCHAR(255) NOT NULL, situationmatri VARCHAR(255) NOT NULL, sexe TINYINT(1) NOT NULL, email VARCHAR(255) DEFAULT NULL, profession VARCHAR(255) NOT NULL, tel VARCHAR(255) DEFAULT NULL, bpostale VARCHAR(255) DEFAULT NULL, paroisse VARCHAR(255) NOT NULL, baptise TINYINT(1) NOT NULL, baptisepar VARCHAR(255) DEFAULT NULL, datebapteme DATE DEFAULT NULL, lieubapteme VARCHAR(255) DEFAULT NULL, confrime TINYINT(1) NOT NULL, confirmerpar VARCHAR(255) DEFAULT NULL, dateconfirm DATE DEFAULT NULL, lieuconfirm VARCHAR(255) DEFAULT NULL, fonctparoisse VARCHAR(255) DEFAULT NULL, datescout DATE NOT NULL, lieuscout VARCHAR(255) NOT NULL, datepromesse DATE NOT NULL, lieupromesse VARCHAR(255) NOT NULL, fonctscoutactu VARCHAR(255) NOT NULL, datenomi DATE NOT NULL, stage1 VARCHAR(255) DEFAULT NULL, stage1date DATE DEFAULT NULL, stage1lieu VARCHAR(255) DEFAULT NULL, stage2 VARCHAR(255) DEFAULT NULL, stage2date DATE DEFAULT NULL, stage2lieu VARCHAR(255) DEFAULT NULL, stage3 VARCHAR(255) DEFAULT NULL, stage3date DATE DEFAULT NULL, stage3lieu VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event CHANGE description description MEDIUMTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE scoutangre');
        $this->addSql('ALTER TABLE event CHANGE description description MEDIUMTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
