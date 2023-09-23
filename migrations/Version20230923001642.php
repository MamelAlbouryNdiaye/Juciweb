<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230923001642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE audit (id INT AUTO_INCREMENT NOT NULL, structure_id INT DEFAULT NULL, detail LONGTEXT DEFAULT NULL, etat VARCHAR(255) DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, materiel LONGTEXT DEFAULT NULL, document LONGTEXT DEFAULT NULL, INDEX IDX_9218FF792534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE besoin (id INT AUTO_INCREMENT NOT NULL, structure_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, detais LONGTEXT DEFAULT NULL, mission VARCHAR(255) DEFAULT NULL, document VARCHAR(255) DEFAULT NULL, INDEX IDX_8118E8112534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, structure_id INT DEFAULT NULL, INDEX IDX_D8698A762534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etude (id INT AUTO_INCREMENT NOT NULL, structure_id INT DEFAULT NULL, INDEX IDX_1DDEA9242534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, structure_id INT DEFAULT NULL, etat VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, date DATE DEFAULT NULL, document VARCHAR(255) DEFAULT NULL, INDEX IDX_18D2B0912534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recommandation (id INT AUTO_INCREMENT NOT NULL, structure_id INT DEFAULT NULL, type LONGTEXT DEFAULT NULL, detail LONGTEXT DEFAULT NULL, besoins LONGTEXT DEFAULT NULL, document LONGTEXT DEFAULT NULL, INDEX IDX_C7782A282534008B (structure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE structure (id INT AUTO_INCREMENT NOT NULL, mission VARCHAR(50) DEFAULT NULL, nom VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audit ADD CONSTRAINT FK_9218FF792534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE besoin ADD CONSTRAINT FK_8118E8112534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A762534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE etude ADD CONSTRAINT FK_1DDEA9242534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B0912534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE recommandation ADD CONSTRAINT FK_C7782A282534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audit DROP FOREIGN KEY FK_9218FF792534008B');
        $this->addSql('ALTER TABLE besoin DROP FOREIGN KEY FK_8118E8112534008B');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A762534008B');
        $this->addSql('ALTER TABLE etude DROP FOREIGN KEY FK_1DDEA9242534008B');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B0912534008B');
        $this->addSql('ALTER TABLE recommandation DROP FOREIGN KEY FK_C7782A282534008B');
        $this->addSql('DROP TABLE audit');
        $this->addSql('DROP TABLE besoin');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE etude');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE recommandation');
        $this->addSql('DROP TABLE structure');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
