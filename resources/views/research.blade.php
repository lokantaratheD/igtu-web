@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Research & Publications') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Advancing theological discourse through collaborative inquiry.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    
    <section class="mb-20">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6">{{ __('Collaborative Research') }}</h2>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    {{ __('At IGTU, we believe that the most impactful theological insights are forged in community. Our consortium model enables scholars from PERSETIA, STFT Jakarta, UKDW, and UKSW to form cross-institutional research clusters.') }}
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                    {{ __('These clusters focus on pressing issues in the Asia-Pacific context, bridging the gap between rigorous academic theory and practical, grassroots application.') }}
                </p>
            </div>
            
            <div class="w-full md:w-1/2">
                <div class="bg-blue-50 dark:bg-slate-800 p-8 rounded-2xl border border-blue-100 dark:border-slate-700 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">{{ __('Current Research Focus Areas') }}</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full bg-blue-500 mt-2 flex-shrink-0"></div>
                            <span class="text-gray-700 dark:text-gray-300 font-medium">{{ __('Public Theology and Social Justice in Asia') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full bg-yellow-500 mt-2 flex-shrink-0"></div>
                            <span class="text-gray-700 dark:text-gray-300 font-medium">{{ __('Inter-religious Dialogue in Pluralistic Societies') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-2 h-2 rounded-full bg-green-500 mt-2 flex-shrink-0"></div>
                            <span class="text-gray-700 dark:text-gray-300 font-medium">{{ __('Ecological Theology and Environmental Ethics') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="border-b-2 border-gray-200 dark:border-slate-700 pb-4 mb-8">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400">{{ __('Academic Publications') }}</h2>
            <p class="text-gray-600 dark:text-gray-400 mt-2">{{ __('Peer-reviewed journals, monographs, and dissertations by our faculty and candidates.') }}</p>
        </div>

        <div class="space-y-6">
            @forelse($publications as $pub)
                <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 hover:shadow-md transition-all flex flex-col md:flex-row justify-between md:items-center gap-6">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $pub->title }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">
                            <span class="font-bold text-slate-800 dark:text-gray-200">{{ $pub->author }}</span> 
                            <span class="mx-2 text-gray-400">|</span> 
                            <span class="italic">{{ $pub->institution }}</span>
                        </p>
                        @if($pub->abstract)
                            <p class="text-gray-500 dark:text-gray-400 text-sm line-clamp-3 leading-relaxed">{{ $pub->abstract }}</p>
                        @endif
                    </div>
                    
                    <div class="flex flex-col items-end gap-4 min-w-max">
                        <span class="bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-300 px-4 py-1.5 rounded-full text-sm font-bold border border-blue-200 dark:border-blue-800">
                            {{ $pub->publication_year }}
                        </span>
                        
                        @if($pub->document_file)
                            <a href="{{ asset('storage/' . $pub->document_file) }}" target="_blank" class="inline-flex items-center gap-2 text-sm bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg font-medium transition shadow-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                {{ __('Download PDF') }}
                            </a>
                        @else
                            <span class="text-xs text-gray-400 italic">{{ __('Physical copy only') }}</span>
                        @endif
                    </div>
                </div>
            @empty
                <div class="text-center py-12 bg-gray-50 dark:bg-slate-800/50 rounded-xl border border-dashed border-gray-300 dark:border-slate-600">
                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <p class="text-gray-500 dark:text-gray-400">{{ __('No publications available at the moment.') }}</p>
                </div>
            @endforelse
        </div>
    </section>

</div>
@endsection