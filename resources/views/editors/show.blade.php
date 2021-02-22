@extends('layouts.app')

@section('content')

<div class="wrap">
    <button type="button" class="btn btn-light btn-ms"> 
      <a href="{{ route('editors.index') }}">Ritorna all'elenco degli Editor</a> 
    </button>
          <div class="blog-card">
            <div class="article-details">
              <h2 class="editor-name"><?php echo "{$editor->name}";?></h2>
              <h2 class="editor-lastname"><?php echo " {$editor->lastname}" ;?></h2>
            </div>
          </div>
  </div>

@endsection