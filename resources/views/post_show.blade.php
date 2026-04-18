@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <article class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-auto object-cover" alt="{{ $post->title }}">
        @endif
        
        <div class="p-8">
            <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
    
            <p class="text-gray-500 mb-6 italic">Published at: {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->format('d M Y') }}</p>
            
            <div class="prose max-w-none">
                {!! $post->content !!}
            </div>
        </div>
    </article>
</div>
@endsection