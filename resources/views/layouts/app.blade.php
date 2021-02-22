<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand navbar-light bg-light">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route ('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('contacts')}}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Lista Categorie</a>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('editors.index') }}">Lista Editor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admins.index') }}">Lista Admin</a>
                        </li>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="container">
            @yield('content')
        </main>

    </body>
</html>