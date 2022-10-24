@extends('layouts.default')

@section('content')
  
  <h3 class="mt-8 md:my-8 font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">Categoria {{$slug}}</h3>

  @livewire('category-single', ['slug' => $slug])

@stop
