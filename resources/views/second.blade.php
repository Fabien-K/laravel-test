@extends('layouts.app')

@section('content')
<h1>titre en surcharge</h1>
<div class="container">
  @if ($age >= 18)
    <p> vous avez{{$age}} ans, vous pouvez entrer </p>
  @else    
    <p> tu n'as pas l'age requis</p>
  @endif
  @php
    $tableau = ['pomme','poire','cerise'];
  @endphp
  <ul>
    @foreach ($tableau as $fruit)
      <li>{{$fruit}}</li>
    @endforeach
  </ul>
</div>
@stop