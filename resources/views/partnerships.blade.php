@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Network & Partnerships') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Building bridges for theological excellence across the Asia-Pacific.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
        
        <div class="hidden lg:block w-1/4 pr-4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Network Overview') }}</h3>
                <ul class="space-y-3 text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li class="mb-3"><a href="#institutions" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Partner Institutions') }}</a></li>
                    <li class="mb-3"><a href="#international" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('International Collaboration') }}</a></li>
                    <li class="mb-3"><a href="#aptu" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('APTU Engagement') }}</a></li>
                    <li class="mb-3"><a href="#members" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Members') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="institutions" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Partner Institutions') }}</h2>
                <p class="mb-8 text-lg leading-relaxed">{{ __('IGTU is proudly founded and sustained by four primary pillars of theological education in Indonesia. This consortium pools resources, faculty, and research facilities to provide an unparalleled doctoral experience.') }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="h-20 flex items-center justify-center mb-4 w-full">
                            <img src="{{ asset('images/partners/persetia-logo.png') }}" alt="PERSETIA" class="h-14 object-contain transform scale-[2.0]">
                        </div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">PERSETIA</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('The Association of Theological Schools in Indonesia, serving as the coordinating body and extensive library network hub.') }}</p>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="h-20 flex items-center justify-center mb-4 w-full">
                            <img src="{{ asset('images/partners/stft-logo.png') }}" alt="STFT Jakarta" class="h-14 object-contain bg-white p-1 rounded">
                        </div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">STFT Jakarta</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Jakarta Theological Seminary, the oldest theological campus in Indonesia, renowned for its urban and public theology research.') }}</p>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="h-20 flex items-center justify-center mb-4 w-full">
                            <img src="{{ asset('images/partners/ukdw-logo.png') }}" alt="UKDW" class="h-12 object-contain bg-white p-1 rounded">
                        </div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">UKDW Yogyakarta</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Duta Wacana Christian University, bringing strong interdisciplinary approaches bridging theology, culture, and technology.') }}</p>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="h-20 flex items-center justify-center mb-4 w-full">
                            <img src="{{ asset('images/partners/uksw-logo.png') }}" alt="UKSW" class="h-14 object-contain bg-white p-1 rounded transform scale-110">
                        </div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">UKSW Salatiga</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Satya Wacana Christian University, offering profound expertise in sociology of religion and contextual biblical studies.') }}</p>
                    </div>
                </div>
            </section>

            <section id="international" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('International Collaboration') }}</h2>
                
                <div class="relative bg-fixed bg-center bg-cover bg-no-repeat rounded-2xl overflow-hidden shadow-lg border border-blue-100 dark:border-slate-700" style="background-image: url('{{ asset('images/photo/photo_3.jpeg') }}');">
                    
                    <div class="absolute inset-0 bg-blue-950/85 dark:bg-slate-950/90 mix-blend-multiply"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-transparent"></div>

                    <div class="relative z-10 p-8 md:p-12 flex flex-col md:flex-row items-center gap-8">
                        <div class="bg-white/10 p-4 rounded-2xl flex-shrink-0 border border-white/20 backdrop-blur-md shadow-2xl">
                            <svg class="w-12 h-12 text-blue-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-lg md:text-xl leading-relaxed text-blue-50 font-medium drop-shadow-md">
                                {{ __('Beyond our national borders, IGTU actively seeks mutually beneficial partnerships with global theological institutions. These collaborations facilitate visiting professorships, joint international conferences, and exchange programs for doctoral candidates, ensuring our research remains globally engaged and relevant.') }}
                            </p>
                        </div>
                    </div>
                    
                </div>
            </section>

            <section id="aptu" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('APTU Engagement') }}</h2>
                <div class="bg-blue-50 dark:bg-slate-800/50 p-8 md:p-10 rounded-2xl border border-blue-100 dark:border-slate-700">
                    <p class="mb-6 text-lg leading-relaxed">
                        {!! __('IGTU maintains a strategic relationship with the <strong>Asia Pacific Theological Union (APTU)</strong>. This engagement is vital for aligning our quality assurance standards with regional benchmarks.') !!}
                    </p>
                    <ul class="space-y-4 text-gray-700 dark:text-gray-300 text-lg">
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                            <span>{{ __('Participation in the APTU Theological Forum.') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                            <span>{{ __('Facilitating cross-border joint research initiatives.') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                            <span>{{ __('Access to a wider network of Asian scholars for dissertation external examination.') }}</span>
                        </li>
                    </ul>
                </div>
            </section>

            <section id="members" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Members') }}</h2>
                <p class="mb-8 text-lg">{{ __('The IGTU community is composed of a vibrant and diverse group of scholars, including:') }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                    <div class="p-8 bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 rounded-2xl shadow-sm hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="text-4xl font-extrabold text-blue-600 dark:text-blue-400 mb-3 drop-shadow-sm">40+</div>
                        <div class="font-bold text-slate-900 dark:text-white text-lg">{{ __('Core Faculty') }}</div>
                        <div class="text-sm mt-2 text-gray-500 dark:text-gray-400">{{ __('Across 4 institutions') }}</div>
                    </div>
                    <div class="p-8 bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 rounded-2xl shadow-sm hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="text-4xl font-extrabold text-blue-600 dark:text-blue-400 mb-3 drop-shadow-sm">150+</div>
                        <div class="font-bold text-slate-900 dark:text-white text-lg">{{ __('Active Candidates') }}</div>
                        <div class="text-sm mt-2 text-gray-500 dark:text-gray-400">{{ __('In Th.D and Ph.D programs') }}</div>
                    </div>
                    <div class="p-8 bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 rounded-2xl shadow-sm hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="text-4xl font-extrabold text-blue-600 dark:text-blue-400 mb-3 drop-shadow-sm">Global</div>
                        <div class="font-bold text-slate-900 dark:text-white text-lg">{{ __('Alumni Network') }}</div>
                        <div class="text-sm mt-2 text-gray-500 dark:text-gray-400">{{ __('Serving worldwide') }}</div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection