<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class booksController extends Controller
{
    //
    public function get()
    {
        $books = books::paginate(6);
        return view('Home', [
            'books'=>$books,
            'category'=>'Book List'
        ]);
    }
}
