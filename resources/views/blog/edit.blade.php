@extends('layouts.app');

@section('content')


<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-blod">Edit Posts</h1>
</div>

<div class="container m-auto  pt-15 pb-5">
    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text"
        name="title"
        value="{{$post->title}}"
        class="w-full h-20 text-6xl rounded-lg shodow-lg border-b p-15 mb-5"
        >
        <textarea name="discription"
        class="w-full h-60 text-l rounded-lg shodow-lg border-b p-15 mb-5"
        {{$post->description}}
        ></textarea>
        <div class="py-15">
            <label 
            class="bg-gray-200 hover:bg-gray-700
            text-gray-700 hover:text-gray-200
            transition duration-300
            cursor-pointer
            p-5 rounded-lg
            font-blod uppercase
            
            "
            >
                <span>Select an image to upload</span>
                <input type="file" name="image" class="hidden">
            </label>

        </div>
        <button type="submit"
        class="bg-green-200 hover:bg-green-700
            text-gray-700 hover:text-gray-200
            transition duration-300
            cursor-pointer
            p-5 rounded-lg
            font-blod uppercase"

        > Submit the post </button>
    
    </form>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@endsection
