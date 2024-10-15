<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;


    class NoteController extends Controller
{
    public function showAllNotes() {
        
        $notes = Note::orderBy('desc')->get();
        return view ('notes', ['notes' => $notes]);
    }

    public function createNote() {

        return view ('create-note');
    }

    public function storeNote(Request $request) {
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string|max:255'
            
        ]);

        $note = new Note();
        $note->title = $validated['title'];
        $note->desc = $validated['desc'];
        
        $note->save();

        return redirect()->route('showAllNotes')->with('success', 'Notes created successfully');
    }
}

