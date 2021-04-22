@extends('app')

@section('title')



@section('content')

        <img src="{{asset('/images/drc_flag.png')}}" alt="drc_flag">

       <h1 class="mt-5 text-5xl font-semibold text-indigo-600"> Hello from GOMA !</h1>

       <p class="text-lg text-gray-600">It's currently {{ date('h:i A') }}</p>



@endsection
</html>
