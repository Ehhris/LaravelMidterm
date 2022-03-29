<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function posts()
    {
        $name = 'Eris Mendoza';
        $email = 'Erismendoza@midterm.exam';
        $comment = 'yay midterm exam';
        return view('posts', compact('name','email','comment',));
    }
}
