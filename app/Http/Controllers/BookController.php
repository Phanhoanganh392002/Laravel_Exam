<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class   BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books')->with('books',$books);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $books = Book::query()
            ->where('name','LIKE',"%{$keyword}%")
            ->get();
        return view('books')->with('books',$books);
    }
}
