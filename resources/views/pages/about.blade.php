@extends('app')

@section('header')

@section('title','About us | '.config('app.name'))


@section('content')
        <p>Built with &hearts; by Bienfait GITA</p>
        <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>

        <footer>

            <p>&copy; Copyright {{date('Y')}}</p>

        </footer>
@endsection
