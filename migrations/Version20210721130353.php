<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210721130353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce ADD marque_id INT NOT NULL, ADD type_carburant_id INT NOT NULL, ADD garage_id INT NOT NULL');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E54827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5B5991721 FOREIGN KEY (type_carburant_id) REFERENCES type_carburant (id)');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5C4FFF555 FOREIGN KEY (garage_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_F65593E54827B9B2 ON annonce (marque_id)');
        $this->addSql('CREATE INDEX IDX_F65593E5B5991721 ON annonce (type_carburant_id)');
        $this->addSql('CREATE INDEX IDX_F65593E5C4FFF555 ON annonce (garage_id)');
        $this->addSql('ALTER TABLE image ADD annonce_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F8805AB2F FOREIGN KEY (annonce_id) REFERENCES annonce (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F8805AB2F ON image (annonce_id)');
        $this->addSql('ALTER TABLE modele ADD marque_id INT NOT NULL');
        $this->addSql('ALTER TABLE modele ADD CONSTRAINT FK_100285584827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('CREATE INDEX IDX_100285584827B9B2 ON modele (marque_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E54827B9B2');
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5B5991721');
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5C4FFF555');
        $this->addSql('DROP INDEX IDX_F65593E54827B9B2 ON annonce');
        $this->addSql('DROP INDEX IDX_F65593E5B5991721 ON annonce');
        $this->addSql('DROP INDEX IDX_F65593E5C4FFF555 ON annonce');
        $this->addSql('ALTER TABLE annonce DROP marque_id, DROP type_carburant_id, DROP garage_id');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F8805AB2F');
        $this->addSql('DROP INDEX IDX_C53D045F8805AB2F ON image');
        $this->addSql('ALTER TABLE image DROP annonce_id');
        $this->addSql('ALTER TABLE modele DROP FOREIGN KEY FK_100285584827B9B2');
        $this->addSql('DROP INDEX IDX_100285584827B9B2 ON modele');
        $this->addSql('ALTER TABLE modele DROP marque_id');
    }
}
