# Projet Git php-crud-tvshow

## Elèves :
- Tom Sikora (siko0001)
- Tristan Romet (rome0019)

## Utilisation de GIT :
- `git checkout branche_Tom` *(Replacement sur la branche secondaire)*
- `git add .` *(Ajout d'une modification)*
- `git commit -m "exemple"` *(Ajout d'un commit avec informations)*
- `git push` *(Ajout de cette modification sur la branche)*
- `git push -u origin branche_Tom` *(Ajout de la branche branche_Tom)*
- `git checkout main` *(Replacement sur la branche principal)*
- `git merge branche_Tom` *(Fusion sans conflit avec la branche principal)*
- `git log` *(Informations sur les derniers commit)*

## Fichiers :
___php-crud-tvshow/___ est le dossier racine du projet :
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___composer.json___ est un script de configuration qui permet d'automatiser et simplifier le projet.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___.gitignore___ est un fichier qui permet d'exclure d'autres fichier du projet Git.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___README.md___ est un fichier qui résume les actions effectuées sur ce projet.

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___public/___ est le dossier qui regroupe les fichiers permettant de retourner le code HTML vers un site :
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___pageweb.php___ retourne le code HTML vers un site.

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___src/___ est le dossier qui regroupe les fichiers permettant de retourner l'affichage graphique du code HTML vers un site.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___WebPage.php___ retourne l'affichage graphique du code HTML vers un site.

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___tests/___ est le dossier qui regroupe les fichiers permettant de vérifier la bonne écriture du code HTML :
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___WebPageHtmlOutputTest.php___ est un fichier qui vérifie l'affichage graphique du code HTML.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___WebPageTest.php___ est un fichier qui vérifie le code HTML.

## Commandes :
- `composer run-server:win` : lancement de l'**index.php** se trouvant dans le dossier public