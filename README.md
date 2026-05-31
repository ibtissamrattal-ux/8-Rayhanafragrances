# Rayhana Fragrance

Rayhana Fragrance est une boutique e-commerce de parfums développée dans le cadre d'un projet de methodologie de developpement logicielle.

## Fonctionnalités

* Authentification utilisateur
* Inscription avec email et mot de passe
* Connexion avec email et mot de passe
* Connexion via Google (Google Sign-In)
* Déconnexion utilisateur
* Gestion du profil utilisateur
* Catalogue de parfums
* Recherche de produits
* Consultation des détails des produits
* Ajout au panier
* Suppression d'articles du panier
* Gestion du panier en temps réel
* Validation de commande
* Confirmation de commande
* Page de contact




## Structure du projet

RayhanaFragrance/
│
├── documents/
    ├──LIVRABLE 3(11).pdf
   ├──livrable_2_8.pdf
   ├──S1_fiche_projet (1) (1) (1).pdf
├── admin/
   ├──add-product.php
   ├──dashboard.php
   ├──delete-product.php
   ├──orders.php
   ├──update-order.php
├── assets/
  ├── cat-femme.jpg
  ├── cat-homme.jpg
  ├── cat-unisexe.jpg
  ├── hero-perfume.jpg
  ├── logo.png
  ├── perfume-bg.jpg
  ├── cart-icon.png
  ├── search-icon.png
  ├── user-icon.png
  ├── femme-floral-1.jpg
  ├── femme-musk-1.jpg
  ├── femme-vanille-1.jpg
  ├── homme-musk-1.jpg
  ├── homme-oud-1.jpg
  ├── homme-oud-2.jpg
  ├── unisexe-floral-1.jpg
  ├── unisexe-musk-1.jpg
  ├── unisexe-oud-1.jpg
  ├── unisexe-vanille-1.jpg

├── add-to-cart.php
├── cart.php 
├── checkout.php
├── config.php 
├── contact.php
├── database.sql
├── get-cart-count.php
├── home.php
├── index.html
├── login.php 
├── logout.php 
├── product-detail.php 
├── products.php
├── profile.php 
├── register.php 
├── remove-cart-item.php 
├── script.js 
├── search.php 
├── style.css 
├── success.php 
├── README.md
├──.gitignore

## Technologies et outils utilisés

## Prérequis

- WampServer 3.3.0
- PHP 8.2
- MySQL 8.0
- Git 2.x
- Navigateur Web moderne (Edge)

### Outils

* Visual Studio Code (édition du code)
* WampServer (environnement de développement local)
* phpMyAdmin (gestion de la base de données)
* Git & GitHub (gestion de versions et collaboration)
* InfinityFree (hébergement web)

## Installation et déploiement

### Développement local

1. Installer WampServer.
2. Copier le projet dans le dossier `www` de WampServer.
3. Démarrer les services Apache et MySQL.
4. Ouvrir phpMyAdmin.
5. Créer une base de données nommée `rayhana_db`.
6. Importer le fichier `database.sql`.
7. Configurer les paramètres de connexion dans `config.php`.
8. Accéder au site via :


http://localhost/rayhanafragrance


### Déploiement

Le projet est versionné et hébergé à l'aide de GitHub.

Pour la mise en ligne :

1. Envoyer les fichiers du projet vers l'hébergement InfinityFree.
2. Créer la base de données MySQL fournie par InfinityFree.
3. Importer le fichier `database.sql`.
4. Mettre à jour les informations de connexion à la base de données dans `config.php`.
5. Vérifier le bon fonctionnement du site en ligne.

#site en ligne:
http://rayhanafragrance.infinityfree.io/home.php

## Gestion du projet

* Développement du code avec Visual Studio Code.
* Tests locaux avec WampServer.
* Gestion de la base de données avec phpMyAdmin et MySQL.
* Versionnage du projet avec Git et GitHub.
* Hébergement du site avec InfinityFree.


## Membres de l'équipe
 Ibtissam Rattal — Scrum Master — Gestion du projet, authentification et interface utilisateur
- Rania Benraihane — Product Owner — Analyse des besoins et rédaction des livrables
- Nouhaila Aitari— Développeur — Gestion du panier et commandes_Base de données et tests

## Statut du projet

Projet de methodologie en developpement logiciel en cours de développement.
