@extends('layouts.app')

@section('title', "Editar Usuário { $user->name }")

@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection
