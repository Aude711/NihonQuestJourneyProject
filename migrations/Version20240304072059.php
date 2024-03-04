<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240304072059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, city_id INT DEFAULT NULL, commentator_id INT DEFAULT NULL, comment VARCHAR(255) NOT NULL, INDEX IDX_9474526C8BAC62AF (city_id), INDEX IDX_9474526C506AFCC0 (commentator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C506AFCC0 FOREIGN KEY (commentator_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C8BAC62AF');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C506AFCC0');
        $this->addSql('DROP TABLE comment');
    }
}
