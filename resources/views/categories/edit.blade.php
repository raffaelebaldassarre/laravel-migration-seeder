@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <button type="button" class="btn btn-light btn-ms"> 
            <a href="{{ route('categories.index') }}">Ritorna all'elenco delle Categorie</a> 
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
        <form method="post" action="{{route('categories.update', $category->id)}}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="title">Titolo :</label>
                <input type="text" class="form-control" name="title" value="{{$category->title}}" />
            </div>
            <div class="form-group">
                <label for="description">Testo :</label>
                <textarea id="validationTextarea" class="form-control " name="description" cols="50" rows="10">{{$category->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>
    </div>
</div>

@endsection