<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class CategoryController extends Controller
{
    public function show($slug)
    {   
        return view('pages.category')->with(
            'slug',$slug
        );
    }
}
