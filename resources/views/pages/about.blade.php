@extends('app')

@section('header')

@section('title','Hello City | About us')


@section('content')
        <p>Built with &hearts; by Bienfait GITA</p>
        <p><a href="/">Revenir à la page d'accueil</a></p>

        <footer>

            <p>&copy; Copyright {{date('Y')}}</p>

        </footer>
@endsection
