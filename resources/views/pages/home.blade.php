@extends('app')

@section('title','Hello City')



@section('content')

       <h1> Hello from GOMA !</h1>

       <p>It's currently {{ date('h:i A') }}</p>

       <footer>

         <p>&copy; Copyright {{date('Y')}} &middot; <a href="/about">About us</a></p>

       </footer>
@endsection
</html>
