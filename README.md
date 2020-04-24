Le but du site est de pouvoir générer de manière automatique des slides, et pouvoir leur affecter un effet : l'effet Ken-Burns. 

## Les onglets

Sur le site conçu nous avons 2 onglets : ProjetCESI, Admin. 

### Onglet ProjetCESI 
Lorsque nous cliquons sur cet onglet, nous sommes redirigé vers la page Accueil, sur cette page est présent : 
1 diaporama qui comporte l'ensemble des images qui sont ajoutées. Et de manière automatique, les images défilent (slide) et un effet Ken-Burns est appliqué à chaque images. 

### Onglet Admin 
Lorsque nous cliquons sur l'onglet admin cela nous redirige donc vers la page de gestion Administrateur, sont présents 3 boutons : 
1. Retour à l'accueil : bouton permettant de revenir sur la page d'Accueil 
2. Slides : bouton permettant d'aller sur la page de gestion des slides. A partir de cette page nous pouvons donc ajouter des images, en supprimer. 
Nota : il faut être connecté avec un user et un password correct pour accéder à cette gestion. 
Est présent, également, un bouton permettant de sélectioner un ou plusieurs slides afin d'appliquer une action sur un ou plusieurs slides (suppression par exemple). 
Nous pouvons également agrandir une image en cliquant dessus. 
A noter également que nous ne pouvons pas ajouter des fichiers trop volumineux. 
3. Gestion des utilisateurs : lorsque nous cliquons dessus, nous avons la liste des utilisateurs, et nous pouvons en ajouter un ou plusieurs utilisateurs à condition d'être déjà connecté. 

# Technologie 
Nous avons utilisé les technologies suivantes : 
- Bootstrap 
- Symfony (CRUD pour slide, EasyAdminBundle)

lorem upsum..

### Etapes d'installation

1. Cloner le projet 
2. Faite la commande: composer install 
3. Importez la base de données dans phpMyAdmin pour importer l'utilisateur
4. Faite la commande: php bin/console make:migration
5. Faite la commande: php bin/console doctrine:migrations:migrate

~ login : admin@mail.com
~ mot de passe: 0000


