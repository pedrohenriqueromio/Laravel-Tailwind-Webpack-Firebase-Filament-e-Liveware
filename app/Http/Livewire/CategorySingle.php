<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class CategorySingle extends Component
{
    use WithPagination;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $slug = $this->slug;
        $category = Category::where('title', $slug)->first();

        if (!empty($category)){

            $posts_collection = Post::whereHas('categories', function($q) use($slug){
                $q->where('slug', $slug); //this refers id field from categories table
            })->paginate(2);
            
            return view('livewire.category-single', [
                'posts' => $posts_collection,
            ]);

        }else{
            return view('pages.home'); 
        }

    }
}
