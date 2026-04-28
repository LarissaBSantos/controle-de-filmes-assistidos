@php
    $translations = [
        'watched' => 'Assistido',
        'to_watch' => 'Para assistir'
    ];
@endphp

<div class="card">
    <button class="options">
        <img class="icon" src="{{ asset('icons/options.png') }}" alt="Opções">
    </button>

    <div class="menu hidden">
        <a href="{{ route('movies.edit', $id) }}">
            <img class="icon" src="{{ asset('icons/edit.png') }}" alt="Editar">
            Editar
        </a>
        
        <form action="{{ route('movies.destroy', $id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                <img class="icon" src="{{ asset('icons/trash.png') }}" alt="Apagar">
                Apagar
            </button>
        </form>
    </div>

    <div class="container-span">
        <span class="badge" data-status="{{ $status }}">
            {{ $translations[$status] ?? $status }}
        </span>
    </div>
    <h2 class="title">{{ $title }}</h2>
    <p class="description">
        {{ $description }}
    </p>
    <div class="rating">
        @for($i = 0; $i < $rating; $i++)
            <span class="star">★</span>
        @endfor
        @for($i = 0; $i < 5 - $rating; $i++)
            <span class="star empty">★</span>
        @endfor
        <span class="rating-number">({{ $rating }}/5)</span>
    </div>
</div>
