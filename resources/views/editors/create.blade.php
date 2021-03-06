@extends('layouts.app')

@section('content')

<h1>Aggiungi un nuovo Editor</h1>

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
  <form action="{{ route('editors.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text"
          class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="Inserisci il nome" value="{{ old('name') }}">
        <small id="nameHelper" class="form-text text-muted">Nome</small>
      </div>
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror

      <div class="form-group">
        <label for="lastname">Cognome</label>
        <input type="text"
          class="form-control" name="lastname" id="lastname" aria-describedby="lastnameHelper" placeholder="Inserisci il cognome" value="{{ old('lastname') }}">
        <small id="lastnameHelper" class="form-text text-muted">Cognome</small>
      </div>
      @error('lastname')
        <div class="alert alert-danger">{{ $message }}</div>    
      @enderror

      <button type="submit" class="btn btn-success">Aggiungi Editor</button>

  </form>

@endsection