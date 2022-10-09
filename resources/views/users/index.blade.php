@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
    <h1>
        Listagem de Usuários
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisa">
        <button>Pesquisar</button>
    </form>

    @foreach ($users as $user)
        <ul>
            <li>
                {{ $user->name }}
                - {{ $user->email }}
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>
        </ul>
    @endforeach
@endsection
