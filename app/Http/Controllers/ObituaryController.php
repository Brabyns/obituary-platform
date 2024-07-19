<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;





    

class ObituaryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'date_of_birth' => 'required|date',
            'date_of_death' => 'required|date',
            'content' => 'required',
            'author' => 'required|string|max:100',
        ]);

        $obituary = new Obituary();
        $obituary->name = $request->name;
        $obituary->date_of_birth = $request->date_of_birth;
        $obituary->date_of_death = $request->date_of_death;
        $obituary->content = $request->content;
        $obituary->author = $request->author;
        $obituary->slug = Str::slug($request->name . '-' . now()->timestamp);

        $obituary->save();

        return redirect()->back()->with('success', 'Obituary submitted successfully!');
    }


    public function index()
    {
        $obituaries = Obituary::all();
        return view('view_obituaries', compact('obituaries'));
    }




}

