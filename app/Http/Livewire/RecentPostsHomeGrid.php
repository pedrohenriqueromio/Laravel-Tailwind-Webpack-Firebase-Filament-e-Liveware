<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class RecentPostsHomeGrid extends Component
{
    use WithPagination ;

    public function render()
    {
        $posts_collection = Post::with('categories')->paginate(6);
    
        return view('livewire.recent-posts-home-grid', [
            'posts' => $posts_collection,
        ]);
    }
}
