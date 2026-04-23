<form action="/add-movie" method="POST" class="form-container none">
    @csrf
    <button class="btn-close" type="button" onclick="hiddenForm()">X</button>
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

<style scoped>
    .none {
        display: none;
    }

    .form-container {
        position: absolute; 
        z-index: 2; 
        left: 50%;
        transform: translateX(-50%); 
        background: var(--card-bg);
        width: 450px;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        color: var(--text-main);
    }

    .form-group {
        margin-bottom: 15px;
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    select {
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        transition: 0.3s;
    }

    input[type="text"]:focus,
    select:focus {
        border-color: var(--primary-color);
        outline: none;
    }

    input[type="range"] {
        margin-top: 5px;
    }

    button.btn-submit {
        width: 100%;
        padding: 12px;
        border: none;
        background: var(--primary-color);
        color: white;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }

    button.btn-submit:hover {
        background: #574fd6;
    }

    button.btn-close {
        border: 1px solid #000;
        border-radius: 50%;
        font-size: larger;
        margin-left: 94%;
    }

    button.btn-close:hover {
        background: #aaa9a9;
    }

    .error {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }
</style>