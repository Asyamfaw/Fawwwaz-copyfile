<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $no = 1;
        $authors = Authors::all();
        return view("authors.index", compact("authors", 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("authors.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            "name_author"=> "required|max:255",
            "age"=> "required",
            "alamat" => "required"
        ]);
        
        if (!$validasi) {
            return redirect()->route("penulis.index")->with("error");
        }

        Authors::create($validasi);
        return redirect()->route("penulis.index")->with("success");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $author = Authors::find($id);
        return view("authors.show", compact("author"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Authors $authors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Authors $authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Authors $authors)
    {
        //
    }
}
