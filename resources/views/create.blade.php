@extends('layouts.app')
@section('content')
{{-- @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>    
      @endforeach
    </ul>
  </div>
@endif --}}
  <form method='POST' action="{{route('article.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group" >
      <label for="title">title</label>
      <input name='title' type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" placeholder="Entez un titre">
      @error('title')
        <div class="alert alert-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">content</label>
      <textarea name='content' class="form-control @error('content') is-invalid @enderror" placeholder="..."> </textarea>
      @error('content')
        <div class="alert alert-danger mt-2">
          {{ $message }}
        </div>
      @enderror
    </div>
    {{-- <div class="form-group">
      <label for="exampleFormControlFile1">image de l article</label>
      <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1">
    </div> --}}
    <button type="submit" class="btn btn-primary">Enregistrer l'article</button>
  </form>
@stop