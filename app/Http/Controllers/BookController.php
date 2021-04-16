<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
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
        if ($request->title !== null && $request->excerpt !== null && $request->isbn !== null && $request->pages !== null && $request->cost !== null && $request->value !== null && $request->released !== null && $request->condition_id !== null && $request->genre_id !== null) {
          $book = new Book();
          $book->title = $request->title;
          $book->excerpt = $request->excerpt;
          $book->isbn = $request->isbn;
          $book->pages = $request->pages;
          $book->cost = $request->cost;
          $book->value = $request->value;
          $book->released = $request->released;
          $book->condition_id = $request->condition_id;
          $book->genre_id = $request->genre_id;
          $book->save();
          return $book;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
//     public function edit(Book $book)
//     {
//         //
//     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if ($request->title !== null) { $book->title = $request->title; }
        if ($request->excerpt !== null) { $book->excerpt = $request->excerpt; }
        if ($request->isbn !== null) { $book->isbn = $request->isbn; }
        if ($request->pages !== null) { $book->pages = $request->pages; }
        if ($request->cost !== null) { $book->cost = $request->cost; }
        if ($request->value !== null) { $book->value = $request->value; }
        if ($request->released !== null) { $book->released = $request->released; }
        if ($request->condition_id !== null) { $book->condition_id = $request->condition_id; }
        if ($request->genre_id !== null) { $book->genre_id = $request->genre_id; }
        $book->save();
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();
    }
}
