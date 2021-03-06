ALTER TABLE produit
ADD CONSTRAINT FK_PRO FOREIGN KEY(pdt_categorie)
REFERENCES categorie(cat_code);

ALTER TABLE commande
ADD CONSTRAINT FK_COM FOREIGN KEY(com_cli)
REFERENCES client(clt_code);

ALTER TABLE contenir
ADD CONSTRAINT FK_CON_PDT FOREIGN KEY(con_pdt)
REFERENCES produit(pdt_ref);

ALTER TABLE contenir
ADD CONSTRAINT FK_CON_CLI FOREIGN KEY(con_cli)
REFERENCES client(clt_code);
