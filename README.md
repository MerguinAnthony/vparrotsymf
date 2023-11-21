# Nom du Projet

Garage V.Parrot - Projet de fin de formation - STUDI - 2023

## Installation

1. **Cloner le dépôt**

   ```bash
   git clone https://github.com/MerguinAnthony/vparrotsymf
   ```

2. **Installer les dépendances**

   ```bash
   composer install
   ```

3. **Configurer la base de données**

   ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
   ```

4. **Lancer le serveur de développement**
   ```bash
   symfony serve
   ```

## Configuration

- Ouvrir `.env` et configurez les paramètres appropriés. Exemple :
  ```env
  APP_ENV=dev
  APP_SECRET=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
  DATABASE_URL=mysql://db_user:db_pass@db_host:3306/db_name
  ```

## Utilisation

- Ouvrir le navigateur et accéder à l'adresse `http://localhost:8000`.
- Vous devriez voir la page d'accueil.
- Connectez-vous à l'adresse `http://localhost:8000/connexion` ou `https://amtest.xyz`avec les identifiants suivants :
  - Email : `vparrot@amtest.xyz`
  - Mot de passe : `@Vparrot7`
- Vous devriez voir le dashboard de l'application.

## Fonctionnalités

- Page d'accueil (accès public)

  - [x] Affichage des services proposés par le garage
  - [x] Affichage des véhicules en vente
  - [x] Affichage des avis clients
  - [x] Affichage des horaires d'ouverture
  - [x] Affichage des coordonnées du garage
  - [x] Affichage des informations de contact

- Page de contact (accès public)

  - [x] Formulaire de contact
  - [x] Formulaire de contact pré-rempli si l'utilisateur est intéressé par un véhicule en vente

- Dashboard
  - [x] Page de connexion (accès public)
  - [x] Gestion des ventes (accès employés et gérant)
  - [x] Gestion des services (accès gérant)
  - [x] Gestion des horaires (accès gérant)
  - [x] Gestion des avis clients (accès gérant)
  - [x] Gestion des employés (accès gérant)
  - [x] Gestion des avis clients (accès employés et gérant)
  - [x] Messagerie (accès employés et gérant)

## Structure du Projet

```
.
├── bin
├── config
├── migrations
├── public
├── src
│   ├── Controller
│   ├── DataFixtures
│   ├── Entity
│   ├── Form
│   ├── Migrations
│   ├── Repository
│   ├── Security
│   ├── Service
│   ├── Twig
│   └── Validator
├── templates
├── tests
├── translations
├── var
└── vendor
```

## Auteurs

- Merguin Anthony - Développeur
