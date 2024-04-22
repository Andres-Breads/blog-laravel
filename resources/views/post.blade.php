@extends('template')

@section('content')

<div class="max-w-4xl mx-auto bg-yellow-100 rounded-xl px-4 py-4">
    <h1 class="text-5xl mb-8">{{ $post->title }}</h1>
    <p class="leading-loose text-lg text-gray-700">
        {{ $post->body }}
    </p>
</div>

@endsection