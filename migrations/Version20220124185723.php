<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124185723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE new_Actuality (id INT AUTO_INCREMENT NOT NULL, project_id INT DEFAULT NULL, picture_id INT DEFAULT NULL, user_id INT NOT NULL, name VARCHAR(255) NOT NULL, article LONGTEXT NOT NULL, publication DATE NOT NULL, INDEX IDX_F0FD5A14166D1F9C (project_id), INDEX IDX_F0FD5A14EE45BDBF (picture_id), INDEX IDX_F0FD5A14A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner (id INT AUTO_INCREMENT NOT NULL, picture_id INT DEFAULT NULL, INDEX IDX_312B3E16EE45BDBF (picture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE new_Actuality ADD CONSTRAINT FK_F0FD5A14166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE new_Actuality ADD CONSTRAINT FK_F0FD5A14EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE new_Actuality ADD CONSTRAINT FK_F0FD5A14A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E16EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('DROP TABLE new_activity');
        $this->addSql('ALTER TABLE article ADD picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66EE45BDBF ON article (picture_id)');
        $this->addSql('ALTER TABLE category ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C112469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_64C19C112469DE2 ON category (category_id)');
        $this->addSql('ALTER TABLE member ADD picture_id INT DEFAULT NULL, ADD member_type_id INT NOT NULL, ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA78EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA787AB83B07 FOREIGN KEY (member_type_id) REFERENCES member_type (id)');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA78A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_70E4FA78EE45BDBF ON member (picture_id)');
        $this->addSql('CREATE INDEX IDX_70E4FA787AB83B07 ON member (member_type_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_70E4FA78A76ED395 ON member (user_id)');
        $this->addSql('ALTER TABLE member_article ADD member_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member_article ADD CONSTRAINT FK_BDCEB9F27597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
        $this->addSql('CREATE INDEX IDX_BDCEB9F27597D3FE ON member_article (member_id)');
        $this->addSql('ALTER TABLE member_project ADD member_id INT NOT NULL');
        $this->addSql('ALTER TABLE member_project ADD CONSTRAINT FK_9047677A7597D3FE FOREIGN KEY (member_id) REFERENCES member (id)');
        $this->addSql('CREATE INDEX IDX_9047677A7597D3FE ON member_project (member_id)');
        $this->addSql('DROP INDEX UNIQ_2FB3D0EE5E237E06 ON project');
        $this->addSql('ALTER TABLE project ADD picture_id INT DEFAULT NULL, ADD state_id INT NOT NULL, DROP name, DROP description, DROP creation, DROP publication, DROP url_crowdfunding');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE5D83CC1 FOREIGN KEY (state_id) REFERENCES state (id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EEEE45BDBF ON project (picture_id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EE5D83CC1 ON project (state_id)');
        $this->addSql('ALTER TABLE project_category ADD project_id INT NOT NULL, ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE project_category ADD CONSTRAINT FK_3B02921A166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE project_category ADD CONSTRAINT FK_3B02921A12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_3B02921A166D1F9C ON project_category (project_id)');
        $this->addSql('CREATE INDEX IDX_3B02921A12469DE2 ON project_category (category_id)');
        $this->addSql('ALTER TABLE project_partner ADD project_id INT NOT NULL, ADD partner_id INT NOT NULL');
        $this->addSql('ALTER TABLE project_partner ADD CONSTRAINT FK_A7353273166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE project_partner ADD CONSTRAINT FK_A73532739393F8FE FOREIGN KEY (partner_id) REFERENCES partner (id)');
        $this->addSql('CREATE INDEX IDX_A7353273166D1F9C ON project_partner (project_id)');
        $this->addSql('CREATE INDEX IDX_A73532739393F8FE ON project_partner (partner_id)');
        $this->addSql('ALTER TABLE role_project ADD member_project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE role_project ADD CONSTRAINT FK_937E7515FD230175 FOREIGN KEY (member_project_id) REFERENCES member_project (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_937E7515FD230175 ON role_project (member_project_id)');
        $this->addSql('ALTER TABLE supporters ADD picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE supporters ADD CONSTRAINT FK_C9A1EEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_C9A1EEE45BDBF ON supporters (picture_id)');
        $this->addSql('ALTER TABLE video ADD project_id INT NOT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2C166D1F9C ON video (project_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_partner DROP FOREIGN KEY FK_A73532739393F8FE');
        $this->addSql('CREATE TABLE new_activity (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, article LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, publication DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE new_Actuality');
        $this->addSql('DROP TABLE partner');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66EE45BDBF');
        $this->addSql('DROP INDEX IDX_23A0E66EE45BDBF ON article');
        $this->addSql('ALTER TABLE article DROP picture_id');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C112469DE2');
        $this->addSql('DROP INDEX IDX_64C19C112469DE2 ON category');
        $this->addSql('ALTER TABLE category DROP category_id');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA78EE45BDBF');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA787AB83B07');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA78A76ED395');
        $this->addSql('DROP INDEX IDX_70E4FA78EE45BDBF ON member');
        $this->addSql('DROP INDEX IDX_70E4FA787AB83B07 ON member');
        $this->addSql('DROP INDEX UNIQ_70E4FA78A76ED395 ON member');
        $this->addSql('ALTER TABLE member DROP picture_id, DROP member_type_id, DROP user_id');
        $this->addSql('ALTER TABLE member_article DROP FOREIGN KEY FK_BDCEB9F27597D3FE');
        $this->addSql('DROP INDEX IDX_BDCEB9F27597D3FE ON member_article');
        $this->addSql('ALTER TABLE member_article DROP member_id');
        $this->addSql('ALTER TABLE member_project DROP FOREIGN KEY FK_9047677A7597D3FE');
        $this->addSql('DROP INDEX IDX_9047677A7597D3FE ON member_project');
        $this->addSql('ALTER TABLE member_project DROP member_id');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEEE45BDBF');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE5D83CC1');
        $this->addSql('DROP INDEX IDX_2FB3D0EEEE45BDBF ON project');
        $this->addSql('DROP INDEX IDX_2FB3D0EE5D83CC1 ON project');
        $this->addSql('ALTER TABLE project ADD name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD creation DATE NOT NULL, ADD publication DATE DEFAULT NULL, ADD url_crowdfunding VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP picture_id, DROP state_id');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EE5E237E06 ON project (name)');
        $this->addSql('ALTER TABLE project_category DROP FOREIGN KEY FK_3B02921A166D1F9C');
        $this->addSql('ALTER TABLE project_category DROP FOREIGN KEY FK_3B02921A12469DE2');
        $this->addSql('DROP INDEX IDX_3B02921A166D1F9C ON project_category');
        $this->addSql('DROP INDEX IDX_3B02921A12469DE2 ON project_category');
        $this->addSql('ALTER TABLE project_category DROP project_id, DROP category_id');
        $this->addSql('ALTER TABLE project_partner DROP FOREIGN KEY FK_A7353273166D1F9C');
        $this->addSql('DROP INDEX IDX_A7353273166D1F9C ON project_partner');
        $this->addSql('DROP INDEX IDX_A73532739393F8FE ON project_partner');
        $this->addSql('ALTER TABLE project_partner DROP project_id, DROP partner_id');
        $this->addSql('ALTER TABLE role_project DROP FOREIGN KEY FK_937E7515FD230175');
        $this->addSql('DROP INDEX UNIQ_937E7515FD230175 ON role_project');
        $this->addSql('ALTER TABLE role_project DROP member_project_id');
        $this->addSql('ALTER TABLE supporters DROP FOREIGN KEY FK_C9A1EEE45BDBF');
        $this->addSql('DROP INDEX IDX_C9A1EEE45BDBF ON supporters');
        $this->addSql('ALTER TABLE supporters DROP picture_id');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C166D1F9C');
        $this->addSql('DROP INDEX IDX_7CC7DA2C166D1F9C ON video');
        $this->addSql('ALTER TABLE video DROP project_id');
    }
}
