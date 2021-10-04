@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_1280.jpg" width="700" alt="Laptop">
    </div>

    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            Learn how to write Laravel Code
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">Code With Dary</span>, 1 day ago
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto soluta tempora, sunt asperiores officia sed, dolores fugiat autem rem odit ex voluptatibus dolor porro dolore ipsa, neque tempore recusandae eveniet.
        </p>

        <a href=""
        class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading
        </a>
    </div>
</div>
@endsection