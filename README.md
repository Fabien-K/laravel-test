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
- php artisan migrate
- PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 La clé est 
trop longue. Longueur maximale: 1000")
solution
App/providers/AppServiceProvider.php 
Schema::defaultStringLength('171');