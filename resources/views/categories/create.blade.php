@extends('layouts.app')

@section('content')

<h1>Aggiungi una nuova Categoria</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  <br /> 
  @endif
  <form action="{{ route('categories.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Nome Categoria</label>
        <input type="text"
          class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="Inserisci il nome della categoria" value="{{ old('title') }}">
        <small id="titleHelper" class="form-text text-muted">Nome categoria</small>
      </div>
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror

      <div class="form-group">
        <label for="description">Testo</label>
        <textarea class="form-control" name="description" id="description" rows="20" value="{{ old('description') }}"></textarea>
      </div>
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>    
    @enderror

      <button type="submit" class="btn btn-success">Aggiungi la Categoria</button>

  </form>

@endsection