<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220127202859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D29C6C3E');
        $this->addSql('ALTER TABLE article ADD image LONGBLOB NOT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D29C6C3E FOREIGN KEY (article_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7850BA356');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7850BA356 FOREIGN KEY (member_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B748F8FCD6');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B748F8FCD6 FOREIGN KEY (actuality_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE partner DROP FOREIGN KEY FK_312B3E16EE45BDBF');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E16EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE portfolio CHANGE member_id member_id INT DEFAULT NULL, CHANGE portfolio_type_id portfolio_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEEE45BDBF');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE supporters DROP FOREIGN KEY FK_C9A1E53B0CC1B');
        $this->addSql('ALTER TABLE supporters ADD CONSTRAINT FK_C9A1E53B0CC1B FOREIGN KEY (supporter_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C166D1F9C');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66D29C6C3E');
        $this->addSql('ALTER TABLE article DROP image');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66D29C6C3E FOREIGN KEY (article_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7850BA356');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7850BA356 FOREIGN KEY (member_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B748F8FCD6');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B748F8FCD6 FOREIGN KEY (actuality_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE partner DROP FOREIGN KEY FK_312B3E16EE45BDBF');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E16EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE portfolio CHANGE portfolio_type_id portfolio_type_id INT NOT NULL, CHANGE member_id member_id INT NOT NULL');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEEE45BDBF');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE supporters DROP FOREIGN KEY FK_C9A1E53B0CC1B');
        $this->addSql('ALTER TABLE supporters ADD CONSTRAINT FK_C9A1E53B0CC1B FOREIGN KEY (supporter_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C166D1F9C');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
