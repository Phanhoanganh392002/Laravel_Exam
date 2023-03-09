<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class   BookController extends Controller
{
    public function list(Request $rq){
        $book=Books::with('Author')->paginate(20);
        return view('home',compact('book'));
    }
    public function searchBook(Request $rq){
        $search=$rq->get('search');
        $book=Books::with('Author')->Search($search)->paginate();
        if($book->count()>0){
            return view('home',compact('book'));
        }
        return redirect()->route('book')->with('err_search','Book not found');
    }
}
