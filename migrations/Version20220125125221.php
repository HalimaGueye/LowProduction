<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220125125221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_actuality ADD project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B7166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE INDEX IDX_720CD8B7166D1F9C ON new_actuality (project_id)');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEEE45BDBF');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B7166D1F9C');
        $this->addSql('DROP INDEX IDX_720CD8B7166D1F9C ON new_actuality');
        $this->addSql('ALTER TABLE new_actuality DROP project_id');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEEE45BDBF');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEEE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
