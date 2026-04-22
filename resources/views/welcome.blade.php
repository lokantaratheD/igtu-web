@extends('layouts.app')

@section('content')
    <section class="bg-blue-800 dark:bg-blue-950 text-white py-24 text-center transition-colors duration-300">
        <div class="container mx-auto px-4">
            <h1 class="text-5xl font-extrabold mb-4">{{ __('Welcome to IGTU') }}</h1>
            <p class="text-xl mb-8 text-blue-100">{{ __('Strengthening Theological Higher Education Quality in Asia-Pacific.') }}</p>
            <a href="/programs" class="bg-yellow-500 hover:bg-yellow-400 text-slate-900 px-8 py-3 rounded-lg font-bold shadow-lg transition">{{ __('Explore Programs') }}</a>
        </div>
    </section>

    <section class="py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6">{{ __('Vision Snapshot') }}</h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 leading-relaxed font-light italic">
                    "{!! __('To become a premier center of excellence in theological research and education that dynamically responds to the contextual challenges of Asia and the global south.') !!}"
                </p>
                <div class="mt-8">
                    <a href="/about" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">{{ __('Learn more about our mission') }} &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50 dark:bg-slate-800/50 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-8 border-b-2 border-blue-900 dark:border-blue-400 inline-block pb-2 transition-colors">{{ __('Latest Updates') }}</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($latestPosts as $post)
                    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-md border border-gray-100 dark:border-slate-700 overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 dark:bg-slate-700 flex items-center justify-center text-gray-500 dark:text-gray-400">No Image</div>
                        @endif
                        <div class="p-6 flex-1 flex flex-col">
                            <span class="text-xs font-bold text-blue-600 dark:text-blue-400 uppercase tracking-wider">{{ $post->category }}</span>
                            <h3 class="text-xl font-bold mt-2 mb-3 text-slate-900 dark:text-white">{{ $post->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 line-clamp-3 mb-4 flex-1">{!! Str::limit(strip_tags($post->content), 100) !!}</p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-100 dark:border-slate-700">
                                <p class="text-xs text-gray-400 dark:text-gray-500 font-medium">{{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 dark:text-gray-400">{{ __('No recent news available.') }}</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-16 bg-white dark:bg-slate-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-4">{{ __('Featured Programs') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('Advance your theological journey with our distinguished doctoral degrees.') }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-blue-50 dark:bg-slate-800 p-8 rounded-xl border border-blue-100 dark:border-slate-700 hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">{{ __('Doctor of Theology (Th.D.)') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">{{ __('A rigorous academic program designed for original research contribution.') }}</p>
                    <a href="/programs" class="text-blue-600 dark:text-blue-400 font-bold hover:underline">{{ __('View details') }} &rarr;</a>
                </div>
                
                <div class="bg-yellow-50 dark:bg-slate-800 p-8 rounded-xl border border-yellow-100 dark:border-slate-700 hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">{{ __('Doctor of Philosophy (Ph.D.)') }}</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">{{ __('Offers an International Ph. D program in Asia and the Pacific Theologies.') }}</p>
                    <a href="/programs" class="text-blue-600 dark:text-blue-400 font-bold hover:underline">{{ __('View details') }} &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-12 border-t border-gray-100 overflow-hidden relative">
        <div class="container mx-auto px-4 text-center mb-10">
            <h2 class="text-2xl font-bold text-slate-900">{{ __('Our Partner Institutions') }}</h2>
            <p class="text-gray-500 text-sm mt-1 font-medium">{{ __('United in theological excellence') }}</p>
        </div>

        <div class="flex w-[200%] animate-marquee items-center">
            
            <div class="flex items-center justify-around w-1/2 md:w-auto md:min-w-[100vw] gap-12 md:gap-24 px-12">
                
                <img src="{{ asset('images/partners/uksw-logo.png') }}" alt="UKSW" class="h-12 md:h-14 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0 transform scale-125">
                
                <img src="{{ asset('images/partners/persetia-logo.png') }}" alt="PERSETIA" class="h-12 md:h-14 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0 transform scale-[2.5]">
                
                <img src="{{ asset('images/partners/stft-logo.png') }}" alt="STFT Jakarta" class="h-12 md:h-14 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">

                <img src="{{ asset('images/partners/ukdw-logo.png') }}" alt="UKDW" class="h-8 md:h-10 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                
            </div>
            
            <div class="flex items-center justify-around w-1/2 md:w-auto md:min-w-[100vw] gap-12 md:gap-24 px-12">
                <img src="{{ asset('images/partners/uksw-logo.png') }}" alt="UKSW" class="h-12 md:h-14 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0 transform scale-125">
                <img src="{{ asset('images/partners/persetia-logo.png') }}" alt="PERSETIA" class="h-12 md:h-14 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0 transform scale-[2.5]">
                <img src="{{ asset('images/partners/stft-logo.png') }}" alt="STFT Jakarta" class="h-12 md:h-14 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                <img src="{{ asset('images/partners/ukdw-logo.png') }}" alt="UKDW" class="h-8 md:h-10 w-auto object-contain opacity-70 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
            </div>
            
        </div>
    </section>
@endsection