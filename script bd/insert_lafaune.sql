DELETE FROM categorie;

INSERT INTO categorie
VALUES("car","Carnivores");

INSERT INTO categorie
VALUES("pay","Paysages");

INSERT INTO categorie
VALUES("ois","Oiseaux");

INSERT INTO categorie
VALUES("aut","Autres mammiferes");

DELETE FROM produit;

INSERT INTO produit
VALUES("f01","Lionceau 40x60",35.00,"Lionceau.jpg","car");

INSERT INTO produit
VALUES("f02","Jeune guépard 40x60",30.00,"Jeune-guepard.jpg","car");

INSERT INTO produit
VALUES("f03","Accouplement royal 50x75",40.00,"Acc-royal.jpg","car");

INSERT INTO produit
VALUES("f04","Hyène 30x45",25.00,"Hyene.jpg","car");

INSERT INTO produit
VALUES("f05","Portrait lion mâle 20x30",15.00,"Portrait-lion.jpg","car");

INSERT INTO produit
VALUES("f06","Lionne et carcasse 20x30",17.00,"Carcasse.jpg","car");

INSERT INTO produit
VALUES("f07","Galipette de lion 40x60",35.00,"Galipette.jpg","car");

INSERT INTO produit
VALUES("w01","Rollier 20x30",10.00,"Rollier.jpg","ois");

INSERT INTO produit
VALUES("w02","Aigle 30x40",19.00,"Aigle.jpg","ois");

INSERT INTO produit
VALUES("w03","Oedicnème 20x30",8.00,"Oedicneme.jpg","ois");

INSERT INTO produit
VALUES("w04","Calao terrestre 20x30",8.00,"Calao.jpg","ois");

INSERT INTO produit
VALUES("w05","Ombrette",8.00,"Ombrette.jpg","ois");

INSERT INTO produit
VALUES("p01","Paysage du lac Magadi 40x60",35.00,"Magadi.jpg","pay");

INSERT INTO produit
VALUES("p02","La sentinelle 40x60",36.00,"Sentinelle.jpg","pay");

INSERT INTO produit
VALUES("p03","Rivière rouge 40x60",35.00,"Riviere-rouge.jpg","pay");

INSERT INTO produit
VALUES("p04","Lac Natron 30x40",25.00,"Natron.jpg","pay");

INSERT INTO produit
VALUES("p05","Survol 30x40",24.00,"Survol.jpg","pay");

INSERT INTO produit
VALUES("p06","Ombre 30x40",25.00,"Ombre.jpg","pay");

INSERT INTO produit
VALUES("p07","Flamants 40x60",35.00,"Flamants.jpg","pay");

INSERT INTO produit
VALUES("m01","Bouquet de girafes 20x30",8.00,"Bouquet-girafes.jpg","aut");

INSERT INTO produit
VALUES("m02","Portrait de girafe 20x30",8.00,"Girafe.jpg","aut");

INSERT INTO produit
VALUES("m03","Phacochère 20x30",8.00,"Phacochere.jpg","aut");

INSERT INTO produit
VALUES("m04","Impalas au lever du solei 40x60",28.00,"Impalas.jpg","aut");

INSERT INTO produit
VALUES("m05","Buffle 20x30",8.00,"Buffle.jpg","aut");

INSERT INTO client
VALUES("c0001","Dupont","10, rue heute 75001 Paris","0105223597","dupont@wanadoo.fr","aaa");

INSERT INTO client
VALUES("c0002","Dubois","4, bld d'Alsace 75002 Paris","0144972654","dubois@club-interne.fr","bbb");

INSERT INTO client
VALUES("c0003","Durand","5, allée des lys 80000 Amiens","0322796456","durand@free.fr","ccc");