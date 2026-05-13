@extends('layouts.app')

@push('styles')
  @vite(['resources/css/movies.css'])
@endpush

@push('scripts')
  @vite(['resources/js/movies.js'])
@endpush

@section('content')
  @foreach ($movies as $m)
    <x-movie-card
      :id="$m->id"
      :title="$m->title" 
      :status="$m->status" 
      :description="$m->description" 
      :rating="$m->rating"
    />
  @endforeach

  @empty($movies)
      <p>Nenhum filme cadastrado</p>
  @endempty

  @if(isset($movie))
    @include('movies.edit')
  @else
    @include('movies.create')
  @endif
@endsection