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


Si l'instllation c'est bien passé, se rendre sur :

http://localhost/NOM_REPO/NOM_PROJET/public/
