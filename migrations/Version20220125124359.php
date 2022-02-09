<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220125124359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B748F8FCD6');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B748F8FCD6 FOREIGN KEY (actuality_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE partner DROP FOREIGN KEY FK_312B3E16EE45BDBF');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E16EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B748F8FCD6');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B748F8FCD6 FOREIGN KEY (actuality_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE partner DROP FOREIGN KEY FK_312B3E16EE45BDBF');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E16EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
