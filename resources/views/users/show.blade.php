@extends('layouts.app')

@section('title', 'Listagem do usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do Usuário {{ $user->name }}</h1>

    <ul>
        <li> {{ $user->name }} </li>
        <li> {{ $user->email }} </li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
    </form>
@endsection
