@extends('layouts.app')

@section('content')

<div class="wrap">
    <button type="button" class="btn btn-light btn-ms"> 
      <a href="{{ route('admins.index') }}">Ritorna all'elenco degli Admin</a> 
    </button>
          <div class="blog-card">
            <div class="article-details">
              <h2 class="admin-name"><?php echo "{$admin->name}";?></h2>
              <h2 class="admin-lastname"><?php echo " {$admin->lastname}" ;?></h2>
            </div>
          </div>
  </div>

@endsection