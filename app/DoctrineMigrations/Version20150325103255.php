<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150325103255 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, first_name TEXT DEFAULT NULL, last_name TEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, title TEXT DEFAULT NULL, rating INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book_author (book_id INT NOT NULL, author_id INT NOT NULL, PRIMARY KEY(book_id, author_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE order__order CHANGE currency currency CHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE order__order_audit CHANGE currency currency CHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice__invoice CHANGE currency currency CHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE invoice__invoice_audit CHANGE currency currency CHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE basket__basket CHANGE currency currency CHAR(3) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE book_author');
        $this->addSql('ALTER TABLE basket__basket CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE invoice__invoice CHANGE currency currency CHAR(3) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE invoice__invoice_audit CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE order__order CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE order__order_audit CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
