<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124202324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7850BA356');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7850BA356 FOREIGN KEY (member_picture_id) REFERENCES picture (id)');
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B748F8FCD6');
        $this->addSql('ALTER TABLE new_actuality ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B748F8FCD6 FOREIGN KEY (actuality_picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE INDEX IDX_720CD8B7A76ED395 ON new_actuality (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7850BA356');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7850BA356 FOREIGN KEY (member_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B7A76ED395');
        $this->addSql('ALTER TABLE new_actuality DROP FOREIGN KEY FK_720CD8B748F8FCD6');
        $this->addSql('DROP INDEX IDX_720CD8B7A76ED395 ON new_actuality');
        $this->addSql('ALTER TABLE new_actuality DROP user_id');
        $this->addSql('ALTER TABLE new_actuality ADD CONSTRAINT FK_720CD8B748F8FCD6 FOREIGN KEY (actuality_picture_id) REFERENCES picture (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
