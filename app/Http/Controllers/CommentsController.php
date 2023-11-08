<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentsController extends Controller
{
    //

    public function create():View
    {
        return view('comments.create');
    }
}
