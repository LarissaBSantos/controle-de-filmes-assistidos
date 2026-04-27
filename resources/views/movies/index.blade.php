@extends('layouts.app')

@push('styles')
  @vite(['resources/css/movies.css'])
@endpush

@push('scripts')
  @vite(['resources/js/movies.js'])
@endpush

@section('content')
  @foreach ($movies as $movie)
    <x-movie-card
      :id="$movie->id"
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