@php
    $translations = [
        'watched' => 'Assistido',
        'to_watched' => 'Para assistir'
    ];
@endphp

<div class="card">
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

<style scoped>
    .card {
        background: var(--card-bg);
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        margin: 16px;
        padding: 24px;
        width: 320px;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .container-span {
        margin-bottom: 12px;
        padding: 0px;
        text-align: right;
    }

    .badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .badge[data-status = "watched"] { 
        background: #dcfce7; 
        color: #166534; 
    }

    .badge[data-status = "to_watched"]  { 
        background: #fee2e2; 
        color: #991b1b; 
    }

    .title {
        font-size: 1.5rem;
        color: var(--text-main);
        margin: 0 0 8px 0;
    }

    .description {
        font-size: 0.95rem;
        color: var(--text-muted);
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .rating {
        display: flex;
        gap: 4px;
        align-items: center;
    }

    .rating-number {
        margin-left: 8px; 
        color: var(--text-muted); 
        font-size: 0.9rem;
    }

    .star {
        color: var(--star-color);
        font-size: 1.2rem;
    }

    .star.empty {
        color: #e2e8f0;
    }
</style>