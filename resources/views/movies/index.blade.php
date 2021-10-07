@extends('layouts.template')
@section('main')

<section id="movies">
    @forelse ($movies as $movie)

    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">{{$movie['title']}}</div>
        <div class="card-body text-primary">
          <h5 class="card-title">{{$movie['original_title']}}</h5>
          <p class="card-text">{{$movie['nationality']}}, {{$movie['date']}}</p>
          <p>{{$movie['vote']}}</p>
        </div>
      </div>

    @empty
    <h1 class="text-center">Non ci sono film</h1>
    @endforelse 
</section>


@endsection