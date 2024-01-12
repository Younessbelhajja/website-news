@extends('layouts.app');

@section('content')



<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-blod">ALL Posts</h1>
</div>



@if(Auth::check())
<div class="container m-auto sm:grid  py-15 px-5 border-gray-300 border-b">
    <a href="/blog/create " class="bg-green-700 border-2 text-gray-100 py-4 px-5 rounded-lg font-blod uppercase text-l inline-block  place-self-start">Add Post</a>

</div>
@endif
@foreach ($posts as $posts)
<div class="container m-auto sm:grid grid-cols-2 gap-15 py-15 px-5 border-gray-300 border-b">
    <div class="flex">
        <img class="object-cover" src="/images/{{$posts->image_path}} " alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-blod text-4xl py-6 md:pt-0">
            {{$posts->title}} 
        </h2>
        <span>
            by: <span class="text-gray-500">{{$posts->user->name}}</span>
            on: <span class="text-gray-500">{{ date('m-d-Y' , strtotime($posts->updated_at) )}}</span>
            <p class="text-l text-gray-700 py-5 leading-6">
                {{$posts->description}} 
            </p>
            <a href="/blog/{{$posts->slug}} " class="bg-gray-700 border-2 text-gray-100 py-4 px-5 rounded-lg font-blod uppercase text-l inline-block  ">Read More</a>
        </span>
    </div>  
</div>
    
@endforeach

@endsection
