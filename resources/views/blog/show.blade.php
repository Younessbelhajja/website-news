@extends('layouts.app');

@section('content')


<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-blod">{{$post->title}}</h1>
    <div class="mt-2">
        by: <span class="text-gray-500">{{$post->user->name}}</span>
        on: <span class="text-gray-500">{{ date('m-d-Y' , strtotime($post->updated_at) )}}</span>
    </div>
</div>

<div class="container m-auto  pt-15 pb-5">
    <div class="flex h-96">
        <img class="object-over w-full" src="/images/{{$post->image_path}} " alt="">

    </div>
   <div class="text-l text-gray-700 py-5 leading-6">
    {{$post->description}}  

   </div>
   @if (Auth::user() && Auth::user()->id == $post->user_id)
   <a href="/blog/{{$post->slug}}/edit " class="bg-green-700 border-2 text-green-100 py-4 px-5 mt-6 inline-block rounded-lg font-blod uppercase text-l inline-block  ">Edit post</a>

   @endif
   <form action="/blog/{{$post->slug}}" method="POST" class="inline-block">
    @csrf
    @method('DELETe')
    @if (Auth::user() && Auth::user()->id == $post->user_id)
   <button type="submit" h class="bg-red-700 border-2 text-red-100 py-4 px-5 mt-6 inline-block rounded-lg font-blod uppercase text-l inline-block  ">delet post</button>

   @endif
   </form>


</div>





@endsection
