# Prise de notes

## Création d'un projet 

```bash
symfony new blog --webapp
```

## Lancement du serveur

```bash
cd Blog
symfony serve -d # -d afin  de lancer en arrière plan
symfony serve:stop
```

## Configuration de la base de données

Dans le fichier `.env.`, on modifie les informations de connexion à la base de données.

## Configuration du serveur mail

Avec mailtrap, un service gratuit de test de mail qui n'a aucun lien avec Symfony.
On a mis en place la ligne de configuration dans un fichier `.env.local`pour ne pas que les informations de connexion à mailtrap se retrouvent sur le dépot github.

## Première commande avec symfony-cli

La base c'est :
- être dans le doccier du projet avec son terminal
-  utiliser `symfony console` pour lancer une commande
- l'autre alternative est `php bin/console`
  
Suite à cela un assistant nous demande le nom du controlleur (classe), nous avons choisi `PageController`.
Le résultat a été la création d'un fichier `src/Controller/PageController.php`et un fichier `templates/page/index.html.twig`.

Pour en faire notre d'accueil, nous avons modifié le chemein de la route dans le fichier du controlleur.

```php
// Avant
#[route('/page', name: 'app_page)]

// Après
#[route('/', name: 'app_page)]
```

# Les extensions dans Vscode

Pour travailler plus facilement avec Symfony, il est conseillé d'installer les extensions suivantes : 

- PHP Intelephense
- Twig Language 2
- Namespace Resolver
- Prettier