@extends('layouts.home-layout')

@section('home-content')
    
    <main>
        <div class="text my-5 text-center container home">
            <h1 class="mb-3 text text-decoration-underline">Check our catalog of movies</h1>
            <p class="fs-3 my-4">
                Created with LARAVEL, an exercise with laravel-model & laravel-controller
                <br>
                Designed with Bootsrap featuring Sass variables and mixins
            </p>
            <a type="button" href=" {{ route('movies') }} " class="btn btn-primary btn-lg px-4 gap-3">Go to Movies</a>
        </div>
    </main>

@endsection