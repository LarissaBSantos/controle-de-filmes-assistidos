<form action="/update-movie/{{ $movie->id }}" method="POST" class="form-container edit">
    @csrf
    <button class="btn-close" type="button" onclick="window.location.href='/movies'">X</button>
    <h2>Editar filme</h2>

    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" value="{{ $movie->title }}">
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Descrição:</label>
        <input type="text" id="description" name="description" value="{{ $movie->description }}">
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="status"></label>
        <select id="status" name="status" value="{{ $movie->status }}">
            <option value="watched" selected>Assistido</option>
            <option value="to_watch">Para assistir</option>
        </select>
    </div>

    <div class="form-group rating">
        <label for="rating">Avaliação (1 a 5):</label>
        <input type="range" min="1" max="5" id="rating" name="rating" value="{{ $movie->rating }}">
    </div>

    <button class="btn-submit" type="submit">Atualizar</button>
</form>