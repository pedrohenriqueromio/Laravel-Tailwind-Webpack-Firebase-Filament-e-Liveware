@extends('layouts.default')

@section('content')

<div class="container mx-auto px-6 mt-16">
  <div class="h-96 w-full bg-gray-100 mb-24 rounded-2xl shadow-xl bg-cover bg-center" style="background-image: url('{{ asset('storage/'.$post->image) }}')"></div>
    <div class="w-11/12 md:w-10/12 lg:w-1/2 mx-auto">

      <div>

        @if ( count($post->categories) > 0 ) 
          <div class="bg-blue-100 inline-block py-1 px-4 rounded-xl mb-6">
              @foreach ($post->categories as $cat)
                  <a href="/category/{{$cat->slug}}" ><span class="text-blue-500 font-bold ">{{$cat->title}}</span></a>
              @endforeach
          </div>
        @endif

        <h1 class="text-3xl md:text-5xl text-ui-secondary font-semibold">
        {{$post->title}}
      </h1>
    </div>

    <section class="mt-10 mb-32 blog">
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-ui-tertiary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <p class="text-ui-secondary">{{ $readtime }} minutos p 
          </p>
          </div>
          <div class="flex">
            <a class="mr-2" href="https://twitter.com/intent/tweet?text={{url()->current()}}&amp;url={{url()->current()}}" target="_blank">
            <svg width="24" height="24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23 3.01s-2.018 1.192-3.14 1.53a4.48 4.48 0 00-7.86 3v1a10.66 10.66 0 01-9-4.53s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5 0-.278-.028-.556-.08-.83C21.94 5.674 23 3.01 23 3.01z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </a>
            <a class="mr-2" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank">
            <svg width="24" height="24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 2h-3a5 5 0 00-5 5v3H6v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3V2z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </a>
            <a class="mr-2" href="https://www.linkedin.com/shareArticle?mini=true?url={{url()->current()}}&amp;title={{url()->current()}}&amp;summary=tailwindtemplates.io&amp;source=TailwindTemplates" target="_blank">
            <svg width="24" height="24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 8v8a5 5 0 01-5 5H8a5 5 0 01-5-5V8a5 5 0 015-5h8a5 5 0 015 5zM7 17v-7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11 17v-3.25M11 10v3.75m0 0c0-3.75 6-3.75 6 0V17M7 7.01l.01-.011" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </a>
          </div>
        </div>

        <div class="mt-8">
          {!!$post->content!!}
        </div>
        
    </section>
  </div>
</div>

@stop
