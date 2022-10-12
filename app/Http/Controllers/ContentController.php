<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(Content $content) {
        return view('content.index', [
            'title' => $content->title,
            'description' => $content->description,
            'poster' => $content->poster,
            'content' => $content,
            'categories' => Category::all()
        ]);
    }
}
