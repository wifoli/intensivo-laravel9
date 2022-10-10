@extends('layouts.app')

@section('title', "Editar o Comentário do usuário { $user->name }")

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Editar o Comentário do usuário  {{ $user->name }}</h1>

    @include('includes.validations-form')

    <form action="{{ route('comments.update', $user->id) }}" method="post">
        @method('PUT')
        @include('users.comments._partials.form')
    </form>
@endsection
