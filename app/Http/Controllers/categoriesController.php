<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    //
    public function get($id)
    {
        $book = books::where('category_id', $id)->paginate(6);
        $categories = categories::find($id);

        return view('Category', [
            'books'=>$book,
            'category'=>$categories->category
        ]);
    }
}
