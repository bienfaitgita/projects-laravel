@extends('app')

@section('header')

@section('title','About us | '.config('app.name'))


@section('content')

        <img src="{{asset('/images/ds_logo.png')}}" alt="ds_logo" class="mb-5">
        <p class="font-semibold">Built with <span class="text-pink-500">&hearts;</span> by Bienfait GITA</p>
        <p><a href="{{route('home')}}" class="text-indigo-400 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>


@endsection
