<?php

namespace App\Http\Controllers;

use App\Models\Book_author;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book_author::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//     public function create()
//     {
//         //
//     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->book_id !== null && $request->author_id !== null) {
          $book_author = new Book_author();
          $book_author->book_id = $request->book_id;
          $book_author->author_id = $request->author_id;
          $book_author->save();
          return $book_author;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book_author::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
//     public function edit(Book_author $book_author)
//     {
//         //
//     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book_author = Book_author::find($id);
        if ($request->book_id !== null) { $book_author->book_id = $request->book_id; }
        if ($request->author_id !== null) { $book_author->author_id = $request->author_id; }
        $book_author->save();
        return $book_author;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book_author  $book_author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book_author::find($id)->delete();
    }
}
