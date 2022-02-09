<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220131004516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D29C6C3E');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D29C6C3E FOREIGN KEY (article_picture_id) REFERENCES picture (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D29C6C3E');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D29C6C3E FOREIGN KEY (article_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
