<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $data = DB::table('books')->select('id', 'isbn', 'title', 'author', 'description', 'date_published')->get();
        DD($data);

        return view('books.index', ['books' => $data]);
    }
}
