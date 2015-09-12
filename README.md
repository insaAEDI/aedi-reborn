# AEDI - Reborn

Refonte totale et absolue du site de l'Association des Elèves du Département Informatique de l'INSA de Lyon (AEDI, c'est plus court).

<img src="http://puu.sh/jLRPw/6ff9e5b003.jpg">

Ça veut dire mise à jour des infos, ajout de contenu, modernisation du bazar. Faut vivre avec son temps :D

Pour l'instant, avec un tout petit framework PHP : [Flight](http://flightphp.com/learn)

## Installation

Webserver avec PHP 5.3 minimum, notre serveur est actuellement en 5.4.  
Liens utiles, si vous n'avez jamais trop touché à ces machins : 
 - [WampServer](http://www.wampserver.com/) (Windows)
 - [XAMPP](https://www.apachefriends.org/index.html) (Windows/Linux/OS X)


###Configuration du serveur :

 - **Apache :** ajouter les lignes suivantes dans le .htaccess
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```
Il faut également activer le module *rewrite* (Debian/Ubuntu : `sudo a2enmod rewrite`)

 - **Nginx :** ajouter les lignes suivantes dans la déclaration du site
```
server {
    location / {
        try_files $uri $uri/ /index.php;
    }
}
```

## Organisation

L'avantage, c'est que *Flight* propose une gestion des routes très simple (comprenez : on peut balancer les pages n'importe comment avec des noms à la con, après on leur assigne l'URL qu'on veut). 

Ça veut aussi dire que pour les pages toutes normales et sans contenu dynamique, c'est on ne peut plus simple : du bête HTML, directement dans le `body` de la page. Menu, pied de page et css global sont déjà intégrés.

Donc voici l'organisation des fichiers :
```
/ : index.php, qui gère tout + licences, README, etc
|
|->assets/ : tous les fichiers communs
|        |->css/
|        |->img/
|        |->js/
|
|->flight/ : pas toucher
|
|->views/                 C'est là qu'y a les pages, faut que ça soit simple à maintenir. 
|       |->etudiants/     Pour l'instant ça *matche* la structure des menus, y aura sans doute
|       |->entreprises/   un sous dossier "auth" ou un truc comme ça. 
|                         Ce qui est cool c'est que ça ne contraint pas les URLs.
|
|->old_shit/ : ben oui, y a pt'être des trucs utiles dedans ; à terme ça va disparaître.
```
Pour ajouter une nouvelle page, il faut taper sur `index.php` :
```php
Flight::route('/<route>', function() { // pas oublier le '/' , ce qui donne : aedi.insa-lyon.fr/<route>
	// le contenu de la page est généré sans paramètres (ici sans paramètres), 
	// et stocké dans $body_content (utilisé par layout.php)
	Flight::render('<nom de la page>', array(), 'body_content');
	// le reste de la page est généré, faut préciser le titre
	Flight::render('layout', array('title' => '<titre de la page>'));
});
```

## Et maintenant ?

Il y a plusieurs projets intéressants et utiles, des trucs à la fois sympas à faire et potentiellement pratiques. En particulier :
 - une CVthèque, un joli annuaire avec tous les CVs des étudiants
 - un truc de gestion des stages un peu plus sympa que le bazar actuel sur le site du départ'

Pour l'instant, rien de très avancé, mais on y viendra.
