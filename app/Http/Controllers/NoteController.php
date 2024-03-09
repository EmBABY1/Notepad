<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        $title=$request->input('title');
        $text=$request->input('notepad');
        $user_id=Auth::id();
        $quiz = Notes::create([
            'title' => $title,
            'text' => $text, 
            'user_id' => $user_id,

        ]);
        return view('notepad');
            
    }
}