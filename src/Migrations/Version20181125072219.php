<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181125072219 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bitcoin (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, adresse_wallet VARCHAR(30) NOT NULL, montant DOUBLE PRECISION NOT NULL, INDEX IDX_D6C1D26EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mode_payement (id INT AUTO_INCREMENT NOT NULL, libelle_mode_payement VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', civilite VARCHAR(15) NOT NULL, nom VARCHAR(15) NOT NULL, prenom VARCHAR(25) NOT NULL, telephone VARCHAR(11) NOT NULL, datenaisssance DATE DEFAULT NULL, image_name VARCHAR(255) NOT NULL, image_size INT DEFAULT NULL, updated_at DATETIME DEFAULT NULL, nomtierce VARCHAR(25) NOT NULL, prenomtierce VARCHAR(25) NOT NULL, societetierce VARCHAR(25) NOT NULL, adressetierce VARCHAR(25) NOT NULL, codepostaltierce VARCHAR(25) NOT NULL, villetierce VARCHAR(25) NOT NULL, paystierce VARCHAR(25) NOT NULL, phonetierce VARCHAR(11) NOT NULL, UNIQUE INDEX UNIQ_8D93D64992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_8D93D649A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_8D93D649C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bitcoin ADD CONSTRAINT FK_D6C1D26EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bitcoin DROP FOREIGN KEY FK_D6C1D26EA76ED395');
        $this->addSql('DROP TABLE bitcoin');
        $this->addSql('DROP TABLE mode_payement');
        $this->addSql('DROP TABLE user');
    }
}
