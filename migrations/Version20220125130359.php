<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220125130359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE portfolio (id INT AUTO_INCREMENT NOT NULL, member_id INT NOT NULL, portfolio_type_id INT NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_A9ED10627597D3FE (member_id), INDEX IDX_A9ED106293F9A35D (portfolio_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE portfolio_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, icone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE portfolio ADD CONSTRAINT FK_A9ED10627597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE portfolio ADD CONSTRAINT FK_A9ED106293F9A35D FOREIGN KEY (portfolio_type_id) REFERENCES portfolio_type (id)');
        $this->addSql('ALTER TABLE supporters DROP FOREIGN KEY FK_C9A1E53B0CC1B');
        $this->addSql('ALTER TABLE supporters ADD CONSTRAINT FK_C9A1E53B0CC1B FOREIGN KEY (supporter_picture_id) REFERENCES picture (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE portfolio DROP FOREIGN KEY FK_A9ED106293F9A35D');
        $this->addSql('DROP TABLE portfolio');
        $this->addSql('DROP TABLE portfolio_type');
        $this->addSql('ALTER TABLE supporters DROP FOREIGN KEY FK_C9A1E53B0CC1B');
        $this->addSql('ALTER TABLE supporters ADD CONSTRAINT FK_C9A1E53B0CC1B FOREIGN KEY (supporter_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
