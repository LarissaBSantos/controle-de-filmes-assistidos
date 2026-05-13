<form action="/add-movie" method="POST" class="form-container create hidden">
    @csrf
    <button class="btn-close" type="button">X</button>
    <h2>Adicionar novo filme</h2>

    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Descrição:</label>
        <input type="text" id="description" name="description" value="{{ old('description') }}">
        @error('description')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="status"></label>
        <select id="status" name="status">
            <option value="watched" selected>Assistido</option>
            <option value="to_watch">Para assistir</option>
        </select>
    </div>

    <div class="form-group rating">
        <label for="rating">Avaliação (1 a 5):</label>
        <input type="range" min="1" max="5" id="rating" name="rating" value="{{ old('rating') }}">
    </div>

    <button class="btn-submit" type="submit">Enviar</button>
</form>