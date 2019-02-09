@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<div class="container-fluid">
    {{-- JUMBOTRON --}}
    <div class="jumbotron">
        <h1 class="display-3">Lorem ipsum</h1>
        <p class="lead">Lorem ipsum sis amet</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit modi quisquam molestias doloremque delectus,
            ipsam aut a in praesentium iure dolor numquam qui officiis voluptatum nam beatae quam ullam libero.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
        </p>
    </div>
    {{-- CARDS SECTION --}}
    <div class="container-fluid">
        @include('cards')
        
    </div>

</div>
@include('layouts.footer')
@endsection
