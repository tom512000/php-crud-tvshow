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
___php-crud-tvshow/___ (dossier racine) ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___composer.json___ est un script de configuration qui permet d'automatiser et simplifier le projet.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___.gitignore___ est un fichier qui permet d'exclure d'autres fichier du projet Git.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___README.md___ est un fichier qui résume les actions effectuées sur ce projet.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___public/___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___index.php___ retourne le code HTML vers le site.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___tvshow.php___ retourne les requêtes SQL vers l'index.php.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___css___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___style.css___ Feuille de style css.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___src/___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___Database___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___jonque01_tvshow.sql___ Base de données en format sql.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___MyPDO.php___ Base de données copiée de jonque01.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___tvshow-lite.sql___ Base de donnée de test.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___Entity___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___TvShow.php___ Classe TvShow.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___Collection___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___CollectionTvShow.php___ Classe CollectionTvShow.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___Exception___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___EntityNotFoundException.php___ Exception EntityNotFoundException.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___ParameterException.php___ Exception ParameterException.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___Html___ ↴
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___AppWebPage.php___ Classe AppWebPage.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___WebPage.php___ Classe WebPage.

## Commandes :
- `composer run-server:win` : lancement de l'**index.php** se trouvant dans le dossier public.