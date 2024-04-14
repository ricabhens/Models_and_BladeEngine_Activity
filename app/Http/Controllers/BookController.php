<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function show(){
        $data=Book::all();
        return view('book', ['book'=>$data]);
    }

}
