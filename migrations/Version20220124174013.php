<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124174013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE partener');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66166D1F9C');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE member_article CHANGE article_id article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member_project CHANGE project_id project_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE partener (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_463B8D845E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66166D1F9C');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE member_article CHANGE article_id article_id INT NOT NULL');
        $this->addSql('ALTER TABLE member_project CHANGE project_id project_id INT NOT NULL');
    }
}
