@extends('layouts.app')

@section('content')

<h1>Elenco Admin</h1>

<a href="{{ route('admins.create') }}" class="btn btn-warning"> Aggiungi Admin</a>

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
        @forelse ($admins as $admin)
        <tr>
            <td>{{$admin->id}}</td>
            <td>{{$admin->name}}</td>
            <td>{{$admin->lastname}}</td>
            <td>{{$admin->created_at}}</td>
            <td>{{$admin->updated_at}}</td>
            <td>
                <a href="{{ route('admins.show',$admin->id)}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i>
                    View
                </a>
                <a href="{{ route('admins.edit',$admin->id)}}" class="btn btn-primary">
                    <i class="fas fa-eye fa-lg fa-fw"></i>
                    Edit
                </a>
                <form action="{{ route('admins.destroy', $admin->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash fa-lg fa-fw"></i>
                    Delete</button>
                </form>

            </td>
        </tr>
        @empty
        <div>Nessun Admin Presente</div>
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