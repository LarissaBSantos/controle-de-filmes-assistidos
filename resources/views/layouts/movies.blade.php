@extends('layouts.app')

@section('content')
  @foreach ($movies as $movie)
    <x-movie-card 
      :title="$movie->title" 
      :status="$movie->status" 
      :description="$movie->description" 
      :rating="$movie->rating"
    />
  @endforeach

  @empty($movies)
      <p>Nenhum filme cadastrado</p>
  @endempty

@endsection