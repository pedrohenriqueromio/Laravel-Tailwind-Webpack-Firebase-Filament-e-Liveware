<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function show($id)
    {   
        $post = Post::with('categories')->find($id);

        return view('pages.single-post' , [ 
                'post' => $post,
                'readtime' => $this->str_counter( $post )  
            ]
        );
    }

    public function str_counter( $post){
        $text = $post->toArray()['content'] ;
        $val = explode(' ', $text) ; 
        $totalWords = str_word_count(implode(' ', $val));
        $minutesToRead = round($totalWords / 200);
        return (int) max(1, $minutesToRead);
    }
}
