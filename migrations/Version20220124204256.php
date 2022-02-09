<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124204256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_actuality CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE supporters ADD supporter_picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE supporters ADD CONSTRAINT FK_C9A1E53B0CC1B FOREIGN KEY (supporter_picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_C9A1E53B0CC1B ON supporters (supporter_picture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_actuality CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE supporters DROP FOREIGN KEY FK_C9A1E53B0CC1B');
        $this->addSql('DROP INDEX IDX_C9A1E53B0CC1B ON supporters');
        $this->addSql('ALTER TABLE supporters DROP supporter_picture_id');
    }
}
