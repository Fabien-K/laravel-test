## test fonctionalités

### Controller
- creation controller CRUD : php artisan make:controller -r  ArticleController

### Vues et blade + bootstrap
- @extends('layouts.app') pour hériter d'un template
- @yield('name') pour une zone a surcharger dans le template -- @section('name') @stop pour pour le contenu à inserer.
- @include('incs.footer') poure require d'autre page partiels
- @if @else @endif
- @php @endphp
- @foreach @endforeach