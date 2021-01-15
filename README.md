## test fonctionalités
- php artisan serve
### Controller
- creation controller CRUD : php artisan make:controller -r  ArticleController

### Vues et blade + bootstrap
- @extends('layouts.app') pour hériter d'un template
- @yield('name') pour une zone a surcharger dans le template -- @section('name') @stop pour pour le contenu à inserer.
- @include('incs.footer') poure require d'autre page partiels
- @if @else @endif
- @php @endphp
- @foreach @endforeach

### BDD
- php artisan config:clear 
- php artisan route:clear
- php artisan cache:clear

- php artisan make:migration create_post_table // crée une table post
- php artisan migrate:reset // rollback toutes les migrations
- php artisan migrate:rollback //annule la derniere migration
- php artisan migrate:refresh // rollback toutes les migrations et les migrate juste apres
- php artisan migrate // envoie la migration en basse de données
- PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 La clé est 
  trop longue. Longueur maximale: 1000")
- solution
  App/providers/AppServiceProvider.php 
  Schema::defaultStringLength('171');

### Model
- php artisan make:model Article 

### SEEDER

- php artisan make:seed ArticleSeeder // prépare un seed executé par databaseSeeder
- php artisan db:seed // lance les seed ciblé
- php artisan db:seed --class=DataSeeder // lance LE seed selectioné ici DataSeeder

-php artisan tinker // shell pour utiliser php ...