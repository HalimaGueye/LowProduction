<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124200258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66166D1F9C');
        $this->addSql('ALTER TABLE article ADD article_picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D29C6C3E FOREIGN KEY (article_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66D29C6C3E ON article (article_picture_id)');
        $this->addSql('ALTER TABLE member ADD member_picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7850BA356 FOREIGN KEY (member_picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_70E4FA7850BA356 ON member (member_picture_id)');
        $this->addSql('ALTER TABLE new_actuality ADD actuality_picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B748F8FCD6 FOREIGN KEY (actuality_picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_720CD8B748F8FCD6 ON new_actuality (actuality_picture_id)');
        $this->addSql('ALTER TABLE partner ADD picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E16EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_312B3E16EE45BDBF ON partner (picture_id)');
        $this->addSql('ALTER TABLE project ADD project_picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEF6E3C68D FOREIGN KEY (project_picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EEF6E3C68D ON project (project_picture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D29C6C3E');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66166D1F9C');
        $this->addSql('DROP INDEX IDX_23A0E66D29C6C3E ON article');
        $this->addSql('ALTER TABLE article DROP article_picture_id');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7850BA356');
        $this->addSql('DROP INDEX IDX_70E4FA7850BA356 ON member');
        $this->addSql('ALTER TABLE member DROP member_picture_id');
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B748F8FCD6');
        $this->addSql('DROP INDEX IDX_720CD8B748F8FCD6 ON new_actuality');
        $this->addSql('ALTER TABLE new_actuality DROP actuality_picture_id');
        $this->addSql('ALTER TABLE partner DROP FOREIGN KEY FK_312B3E16EE45BDBF');
        $this->addSql('DROP INDEX IDX_312B3E16EE45BDBF ON partner');
        $this->addSql('ALTER TABLE partner DROP picture_id');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEF6E3C68D');
        $this->addSql('DROP INDEX IDX_2FB3D0EEF6E3C68D ON project');
        $this->addSql('ALTER TABLE project DROP project_picture_id');
    }
}
