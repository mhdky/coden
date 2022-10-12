<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Code-N | Home',
            'description' => 'Code-N adalah blog yang membahas seputar web design dan web programming',
            'poster' => 'logo-icon.png',
            'categories' => Category::all(),
            'contents' => Content::latest()->search(request(['search']))->paginate(12)->withQueryString()
        ]);
    }
}
