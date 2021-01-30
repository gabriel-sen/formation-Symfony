# installation symfony


# Requis : 

- PHP >= 7.2.5
  https://www.php.net/downloads
- Composer 
  https://getcomposer.org/download/
  
- symfony 
  https://symfony.com/doc/current/setup.html
  
# installation : 

  Installez composer :
    compose-Setup.exe 
    1 - Pas besoin de devlopper mode
    2 - Choisir son executable PHP (atention, la version doit être au dessus de 7.2.5)
        - On ajoute PHP à nos variables d'environement.
    3 - Pas besoin de proxy
    

- Sur PHPstorm installez le pluggin Symfony Support, il sera à activer projet par projer

# Créer un projet symfony :
 - On crééer le projet en lancant cette cmd :

```shell
composer create-project symfony/website-skeleton [nom du projet] 
```

(On ajoute /.idea/ au .gitignore pour éviter les conflits avec les collègues qui bossent sur PHP storm)

###Apache-pack
On install apache-pack pour rediriger les URL vers index.html via l'écriture d'URL.

```shell
composer req apache-pack 
```

### Structures des reprtoires

- #####Bin : 
  Le fichier Console permet d'executer des commandes qui génère du code Symfony pour nous. 
  
- #####Config > Package : 
  Fichiers.yml sont des fichier contenant des clés, attention, très stricte à l'indentation. Très souvent automatisé.
  
- #####Public : 
  Contrôleur frontal. Index.php / C'est aussi dans ce repo qu'on va placer les fichiers accessible par le navigateur (img, css, toute les assets en somme). Accessible via une URL.

- #####Vendor : 
  On retrouve tout ce que Composer install. L'équivalent des nodes modules. On ne touche à rien. 
  
- #####src : 
  C'est là ou on place nos codes PHP, les objets, les classes etc...
  
- #####template : 
  Nos fichiers de vues, Twig...
  
- #####migrations :
  Scripte de mis eà jour de bases de données 
  
- #####translations : 
  Fichiers de traductions, on y trouve les dictionnaires. 
  
- #####tests : 
  Les teste unitaires et fonctionnels. 
  
- #####var : 
  Caches et logs d'erreurs.


Si l'instllation c'est bien passé, se rendre sur :

http://localhost/NOM_REPO/NOM_PROJET/public/



--------------

Pour créer une page en Symphony on as besoin d'une route, d'un crontrôleur et d'un fichier twig.
### Le system de routage 
 Une URL => Une fonction

http://localhost/NOM_REPO/NOM_PROJET/public/contact/   => contactUs()
http://localhost/NOM_REPO/NOM_PROJET/public/           => home()



# Notes utiles :

###La page ne s'affiche pas malgré le routage ?
Il s'agit peut-être d'un problème de cache. Testons avant, si les routes sont bien activés. 

Utilisez la commandeci dessous pour afficher la lister des routes.
```shell
php bin/console debug:router
```
On obtiens donc : 
```shell
 -------------------------- -------- -------- ------ -----------------------------------
Name                       Method   Scheme   Host   Path
 -------------------------- -------- -------- ------ -----------------------------------
_preview_error             ANY      ANY      ANY    /_error/{code}.{_format}
_wdt                       ANY      ANY      ANY    /_wdt/{token}
_profiler_home             ANY      ANY      ANY    /_profiler/
_profiler_search           ANY      ANY      ANY    /_profiler/search
_profiler_search_bar       ANY      ANY      ANY    /_profiler/search_bar
_profiler_phpinfo          ANY      ANY      ANY    /_profiler/phpinfo
_profiler_search_results   ANY      ANY      ANY    /_profiler/{token}/search/results
_profiler_open_file        ANY      ANY      ANY    /_profiler/open
_profiler                  ANY      ANY      ANY    /()_profiler/{token}
_profiler_router           ANY      ANY      ANY    /_profiler/{token}/router
_profiler_exception        ANY      ANY      ANY    /_profiler/{token}/exception
_profiler_exception_css    ANY      ANY      ANY    /_profiler/{token}/exception.css
app_main_home              ANY      ANY      ANY    /
 -------------------------- -------- -------- ------ -----------------------------------
```

Si la dernière route il affiche pourtant bien dans la liste, il s'agit d'un problème de cache. 
Pour supprimer le cache. Ca ce passe dans le repertoire Var > cache > on supprime [dev].
Et on rafraichis la page. 


### le comportement de symfony
On créer le contrôler qui comporte une fonction ayant en return le lien vers du template twig.
```shell
    voir : src > Controller > MaintController.php
````
#### Quand on écris l'url de notre projet, comment se comporte Symfony ? : 
- C'est d'abord l'index qui est chargé,
- Puis le Kernel
- Ensuite Symfony analyse toute les routes du projet jus'quà trouver celui qui correspond
- une fois la route trouvé, il pplique la fonction ocntenue dans le controller pour return le fichier twig qui se trouve dans le repo Template :
    ```shell
    voir : template > main > home.html.twig
    ````
  On accède jamais au template par un lien direct. Mais toujours via le Controler. 

