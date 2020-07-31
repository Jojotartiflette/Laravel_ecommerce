# Laravel_ecommerce
Laravel ecommerce Digikap

## Clone le repository
`git clone https://github.com/Jojotartiflette/Laravel_ecommerce.git`

## Installer les dépendances du projet
`composer install`

## Créer la base de donnée ecommerce

## Lancer les migrations
`php artisan migrate`

## Lancer les seeds
`php artisan db:seed`

## Lancer les seeds Voyager
1. `php artisan db:seed --class=VoyagerDatabaseSeeder`
2. Vider la table Category
3. `php artisan db:seed --class=VoyagerDummyatabaseSeeder`
