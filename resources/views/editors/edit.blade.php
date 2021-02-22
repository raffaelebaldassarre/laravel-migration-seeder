@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Aggiorna Contatto</h1>
        <button type="button" class="btn btn-light btn-ms"> 
            <a href="{{ route('editors.index') }}">Ritorna all'elenco degli Editor</a> 
        </button>

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
        <form method="post" action="{{route('editors.update', $editor->id)}}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" value="{{$editor->name}}" />
            </div>
            <div class="form-group">
                <label for="name">Cognome</label>
                <input type="text" class="form-control" name="lastname" value="{{$editor->lastname}}" />
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>
    </div>
</div>

@endsection