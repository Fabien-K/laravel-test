@extends('layouts.app')
@section('content')
<form method='POST' action="{{route('article.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group" >
    <label for="title">title</label>
    <input name='title' type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Entez un titre">
  </div>
  <div class="form-group">
    <label for="content">content</label>
    <textarea name='content' class="form-control" placeholder="..."> </textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">image de l article</label>
    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer l'article</button>
</form>
@stop