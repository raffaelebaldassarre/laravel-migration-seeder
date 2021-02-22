@extends('layouts.app')

@section('content')

<h1>Elenco Editor</h1>

<a href="{{ route('editors.create') }}" class="btn btn-warning"> Aggiungi Editor</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>LastName</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($editors as $editor)
        <tr>
            <td>{{$editor->id}}</td>
            <td>{{$editor->name}}</td>
            <td>{{$editor->lastname}}</td>
            <td>{{$editor->created_at}}</td>
            <td>{{$editor->updated_at}}</td>
            <td>
                <a href="{{ route('editors.show',$editor->id)}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i>
                    View
                </a>
                <a href="{{ route('editors.edit',$editor->id)}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i>
                    Edit
                </a>
                <form action="{{ route('editors.destroy', $editor->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash fa-lg fa-fw"></i>
                    Delete</button>
                </form>

            </td>
        </tr>
        @empty
        <div>Nessun Editor Presente</div>
        @endforelse
        <div class="col-sm-12">

            @if(session()->get('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}  
              </div>
            @endif
          </div>
    </tbody>
</table>
@endsection