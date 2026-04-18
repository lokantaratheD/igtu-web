@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('News & Events') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Stay updated with the latest consortium activities, conferences, and announcements.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <div class="hidden lg:block w-1/4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Categories') }}</h3>
                <ul class="space-y-3 text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('All Updates') }}</a></li>
                    <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('News') }}</a></li>
                    <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Events') }}</a></li>
                    <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Conferences') }}</a></li>
                    <li><a href="#" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Announcements') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($posts as $post)
                    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 overflow-hidden hover:shadow-md transition-all duration-300 flex flex-col">
                        
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-56 object-cover">
                        @else
                            <div class="w-full h-56 bg-blue-50 dark:bg-slate-700 flex items-center justify-center text-blue-200 dark:text-slate-500">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20a2 2 0 012 2v1m-2 13v-1"></path></svg>
                            </div>
                        @endif
                        
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="mb-3">
                                <span class="bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-blue-200 dark:border-blue-800">
                                    {{ $post->category ?? 'News' }}
                                </span>
                            </div>
                            
                            <h3 class="text-xl font-bold mt-1 mb-3 text-slate-900 dark:text-white line-clamp-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 line-clamp-3 mb-4 flex-1 text-sm leading-relaxed">
                                {!! Str::limit(strip_tags($post->content), 120) !!}
                            </p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-100 dark:border-slate-700 flex justify-between items-center">
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-medium flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->format('d M Y') }}
                                </p>
                                <a href="{{ route('post_show', $post->slug) }}" class="text-sm font-bold text-blue-600 dark:text-blue-400 hover:text-blue-800 transition">
                                    {{ __('Read More') }} &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16 bg-gray-50 dark:bg-slate-800/50 rounded-xl border border-dashed border-gray-300 dark:border-slate-600">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20a2 2 0 012 2v1m-2 13v-1"></path></svg>
                        <h3 class="text-xl font-bold text-slate-700 dark:text-gray-300 mb-2">{{ __('No Updates Found') }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">{{ __('Check back later for the latest news and events.') }}</p>
                    </div>
                @endforelse
            </div>
        </div>
        
    </div>
</div>
@endsection