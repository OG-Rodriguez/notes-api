<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    // Get all notes
    public function index()
    {
        return response()->json(Note::all());
    }

    // Create a new note
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'note_date' => 'required|date',
            'body' => 'required',
            'classification' => 'required',
        ]);

        $note = Note::create($request->all());
        return response()->json($note, 201);
    }

    // Get a single note
    public function show($id)
    {
        return response()->json(Note::findOrFail($id));
    }

    // Update a note
    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());
        return response()->json($note);
    }

    // Delete a note
    public function destroy($id)
    {
        Note::findOrFail($id)->delete();
        return response()->json(['message' => 'Note deleted successfully']);
    }
}

