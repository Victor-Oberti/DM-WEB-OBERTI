### Rendu Devoir Maison WepMapping-Victor Oberti-M1Geomatique 

## Etapes nécéssaires à l'utilisation de l'application :

- installer docker https://www.docker.com/
- télécharger l'ensemble des fichiers du dépot Git
- lancer la stack avec docker-compose up -d


## Prise en main de l'application Ville2France: 
- ouvrir l'application à l'addresse http://localhost:1234/
- cliquer sur "explorer les villes de France"
- selectionner une option dans le menu déroulant
- insérer une chaine de caractères dans la zone de texte et appuyer sur "rechercher" 
- cliquer sur un marker pour obtenir le nom de la ville 
- cliquer sur un des trois boutons préconfigurés pour observer une sélection de villes 
- cliquer sur le titre pour revenir à la page d'accueil

## ajout et précision 
- si aucune ville n'est concernée par votre recherche rien ne s'affiche 
- en cliquant sur le marker vous pouvez également observer la superficie en km² de la ville, obtenue depuis la BDD geobase via une requête SQL


## commentaires 
- je n'ai pas réussi à faire afficher le message d'erreur, il y a un problème dans le php que je n'ai pas réussi à régler 
- j'ai seulement rajouter la superficie de la commune, je n'ai pas pu implémenter d'autres fonctionnalités. 
