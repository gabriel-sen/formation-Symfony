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
