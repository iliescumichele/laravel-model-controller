@extends('layouts.home-layout')

@section('movie-content')
    <main>
        <div class="container movies">
            <div class="row row-cols-2">

                @foreach ($movieItems as $item)    
                    <div class="col p-4 text-center">
                        <p><strong>TITOLO:</strong> {{ $item->title }}</p>
                        <p><strong>DATA:</strong> {{ $item->date }}</p>
                        <p><strong>NAZIONALITà:</strong> {{ $item->nationality }}</p>
                    </div>
                @endforeach
                
            </div>
        </div>
    </main>
@endsection

