<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220925134318 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF3466860D6DC42');
        $this->addSql('DROP INDEX IDX_3AF3466860D6DC42 ON categories');
        $this->addSql('ALTER TABLE categories DROP modules_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories ADD modules_id INT NOT NULL');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF3466860D6DC42 FOREIGN KEY (modules_id) REFERENCES modules (id)');
        $this->addSql('CREATE INDEX IDX_3AF3466860D6DC42 ON categories (modules_id)');
    }
}
