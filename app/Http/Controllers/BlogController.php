<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return response()->json(Blog::all());
    }

    public function show($id)
    {
        return response()->json(Blog::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string',
            'contenu' => 'required|string',
            'categorie' => 'required|string',
        ]);

        return response()->json(Blog::create($validated), 201);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'titre' => 'sometimes|string',
            'contenu' => 'sometimes|string',
            'categorie' => 'sometimes|string',
        ]);

        $blog->update($validated);

        return response()->json($blog);
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return response()->json(['message' => 'Supprimé avec succès']);
    }
}
