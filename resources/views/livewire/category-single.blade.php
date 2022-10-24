<div class="recent-posts-home-grid" >
    <div class="flex flex-wrap gap-4 justify-center">
        @foreach ($posts as $post)
        
            <div class="relative rounded-lg shadow-lg bg-white max-w-sm">

                @if ( count($post->categories) > 0 ) 
                    <div class="absolute bg-blue-100 inline-block py-1 px-4 rounded-xl mb-6">
                        @foreach ($post->categories as $cat)
                            <a href="/category/{{$cat->slug}}" ><span class="text-blue-500 font-bold ">{{$cat->title}}</span></a>
                        @endforeach
                    </div>
                @endif

                <a href="#!">
                    <img class="rounded-t-lg" src="{{ asset('storage/'.$post->image) }}" alt=""/>
                </a>
  
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">{{$post->title}}</h5>
                    <p class="text-gray-700 text-base mb-4">
                        {!! $post->meta_description !!}
                    </p>
                    <a class="pb-4" style="display: inline-block;" href="/post/{{$post->id}}" >
                        <button  type="button" class="bottom-2 absolute inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ver mais</button>
                    </a>
                </div>
            </div>
            
        @endforeach
    </div>
    <div class="mt-8 ">
        {{ $posts->links() }}
    </div>
</div>