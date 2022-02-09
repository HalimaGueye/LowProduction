<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220125123908 extends AbstractMigration
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
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7850BA356');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7850BA356 FOREIGN KEY (member_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE member_project ADD role_project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member_project ADD CONSTRAINT FK_9047677A995975B0 FOREIGN KEY (role_project_id) REFERENCES role_project (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9047677A995975B0 ON member_project (role_project_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D29C6C3E');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D29C6C3E FOREIGN KEY (article_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7850BA356');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7850BA356 FOREIGN KEY (member_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE member_project DROP FOREIGN KEY FK_9047677A995975B0');
        $this->addSql('DROP INDEX UNIQ_9047677A995975B0 ON member_project');
        $this->addSql('ALTER TABLE member_project DROP role_project_id');
    }
}
