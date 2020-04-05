Structure du plugin rt-template
-------------------------------
BUT: Le plugin doit permettre de rajouter aux bases de données qui créent les realtors et les listings sur l'interface admin. Ensuite, le theme btre_theme permet de gérer les views de ses bases de données.

5/04/2020

3 dossiers:
-----------
- assets contient les dossiers css et js pour la part front end et les fichiers JS pour les besoins du plugin
- includes contient le dossier admin et les fichiers activate.php et init.php servant les bases de données et les custome post types realtor et listings
- process contient 3 fichiers database.php (définit les variables à sauver dans les bases de données), save-post.php (avec la fonction pour sauver dans les DB) et update.php (vide)

Description de l'enregistrement des données realtors vers la base de données:
-----------------------------------------------------------------------------

Les fichiers concernés sont les suivants:
- realtors-option.php
- save-post.php
- init.php
- menus.php
- database.php

Il n'y a pas de save-options.php car les données sont soumises directement dans la base de de données wp_starterthemereal_estate_realtor.

