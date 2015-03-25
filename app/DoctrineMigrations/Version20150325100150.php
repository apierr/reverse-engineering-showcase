<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150325100150 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE customers (customer_id INT AUTO_INCREMENT NOT NULL, customer_name VARCHAR(100) DEFAULT NULL, PRIMARY KEY(customer_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (order_id INT AUTO_INCREMENT NOT NULL, customer_id INT DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, INDEX customer_id (customer_id), PRIMARY KEY(order_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE9395C3F3 FOREIGN KEY (customer_id) REFERENCES customers (customer_id)');
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

        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE9395C3F3');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE orders');
        $this->addSql('ALTER TABLE basket__basket CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE invoice__invoice CHANGE currency currency CHAR(3) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE invoice__invoice_audit CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE order__order CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE order__order_audit CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
