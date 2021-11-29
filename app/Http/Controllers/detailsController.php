<?php

namespace App\Http\Controllers;

use App\Models\details;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    //
    public function get($id)
    {
        $details = details::find($id);
        return view('Details', [
            'details'=>$details,
            'category'=>"Book Details"
        ]);
    }
}
