<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:movies|max:255',
            'description' => 'required|max:255',
            'status' => 'required',
        ], [
            'title.required' => 'O título é obrigatório.',
            'title.unique' => 'Já existe um filme com este nome.',
            'title.max' => 'O título não pode ter mais que 255 caracteres.',
            
            'description.required' => 'A descrição é obrigatória',
            'status.required' => 'Selecione se você já assistiu ou não esse filme',
        ]);

        $movie = Movie::create($request->except('_token'));

        return redirect()->route('movies');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $movies = Movie::all();
        $movie = Movie::find($id);

        return view('movies.index', compact('movies', 'movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'status' => 'required',
        ], [
            'title.required' => 'O título é obrigatório.',
            'title.max' => 'O título não pode ter mais que 255 caracteres.',
            
            'description.required' => 'A descrição é obrigatória',
            'status.required' => 'Selecione se você já assistiu ou não esse filme',
        ]);

        $movie = Movie::findOrFail($id);
        $movie->updateOrFail($request->all());

        return redirect()->route('movies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(int $id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect()->route('movies');
    }
}
