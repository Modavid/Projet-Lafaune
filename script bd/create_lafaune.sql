DROP TABLE IF EXISTS categorie;
CREATE TABLE categorie
(cat_code VARCHAR(3) NOT NULL,
cat_libelle VARCHAR(50),
CONSTRAINT PK_CAT PRIMARY KEY(cat_code)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS produit;
CREATE TABLE produit
(pdt_ref VARCHAR(3) NOT NULL,
pdt_designation VARCHAR(50),
pdt_prix FLOAT(5.2),
pdt_image VARCHAR(50),
pdt_categorie VARCHAR(3),
CONSTRAINT PK_PRO PRIMARY KEY(pdt_ref)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS client;
CREATE TABLE client
(clt_code VARCHAR(5) NOT NULL,
clt_nom VARCHAR(20),
clt_adresse VARCHAR(100),
clt_tel VARCHAR(10),
clt_email VARCHAR(50),
clt_motPasse VARCHAR(10),
CONSTRAINT PK_CLI PRIMARY KEY(clt_code)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS commande;
CREATE TABLE commande
(com_code VARCHAR(20),
com_date DATE,
com_cli VARCHAR(5),
CONSTRAINT PK_COM PRIMARY KEY(com_code,com_cli)
)ENGINE=InnoDB;

DROP TABLE IF EXISTS contenir;
CREATE TABLE contenir
(con_code VARCHAR(20),
con_pdt VARCHAR(3),
con_qte INT,
con_cli VARCHAR(5),
CONSTRAINT PK_COM PRIMARy key(con_cli, con_code, con_pdt)
)ENGINE=InnoDB;
