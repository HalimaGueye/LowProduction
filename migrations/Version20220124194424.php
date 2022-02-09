<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124194424 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66166D1F9C');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66EE45BDBF');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE category CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member CHANGE member_type_id member_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member_project CHANGE member_id member_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partner ADD name VARCHAR(255) NOT NULL, ADD url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE project CHANGE state_id state_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project_category CHANGE project_id project_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project_partner CHANGE project_id project_id INT DEFAULT NULL, CHANGE partner_id partner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video CHANGE project_id project_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66EE45BDBF');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66166D1F9C');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE member CHANGE member_type_id member_type_id INT NOT NULL');
        $this->addSql('ALTER TABLE member_project CHANGE member_id member_id INT NOT NULL');
        $this->addSql('ALTER TABLE partner DROP name, DROP url');
        $this->addSql('ALTER TABLE project CHANGE state_id state_id INT NOT NULL');
        $this->addSql('ALTER TABLE project_category CHANGE project_id project_id INT NOT NULL, CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE project_partner CHANGE partner_id partner_id INT NOT NULL, CHANGE project_id project_id INT NOT NULL');
        $this->addSql('ALTER TABLE video CHANGE project_id project_id INT NOT NULL');
    }
}
