@extends('layouts.app')

@section('content')

<div class="wrap">
    <button type="button" class="btn btn-light btn-ms"> 
      <a href="{{ route('categories.index') }}">Ritorna all'elenco delle Categorie</a> 
    </button>
          <div class="blog-card">
            <div class="article-details">
              <h2 class="post-title"><?php echo "{$category->title}";?></h2>
              <p class="post-description"><?php echo " {$category->description}" ;?></p>
            </div>
          </div>
  </div>

@endsection