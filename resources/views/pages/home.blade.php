@extends('app')

@section('title')



@section('content')

       <h1> Hello from GOMA !</h1>

       <p>It's currently {{ date('h:i A') }}</p>


       <footer>

         <p>&copy; Copyright {{date('Y')}} &middot; <a href="{{route('about')}}">About us</a></p>

       </footer>
@endsection
</html>
