<?php

namespace App\Providers;

use App\Http\Controllers\FBNotification;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class PostModelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        Post::creating(function ($model) {

            $post = $model->toArray() ;  
            $notification = new FBNotification ; 
            $notification->sendNotification( [
                'title' => $post['title'] ,
                'body' => $post['meta_description'] ,
            ] ) ;
        
        }); 
            
    }
}
