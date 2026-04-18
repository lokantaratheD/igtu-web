@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Network & Partnerships') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Building bridges for theological excellence across the Asia-Pacific.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <div class="hidden lg:block w-1/4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Network Overview') }}</h3>
                <ul class="space-y-3 text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li><a href="#institutions" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Partner Institutions') }}</a></li>
                    <li><a href="#international" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('International Collaboration') }}</a></li>
                    <li><a href="#aptu" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('APTU Engagement') }}</a></li>
                    <li><a href="#members" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Members') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 space-y-16 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="institutions" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Partner Institutions') }}</h2>
                <p class="mb-8">{{ __('IGTU is proudly founded and sustained by four primary pillars of theological education in Indonesia. This consortium pools resources, faculty, and research facilities to provide an unparalleled doctoral experience.') }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition">
                        <img src="{{ asset('images/partners/persetia-logo.png') }}" alt="PERSETIA" class="h-16 object-contain mb-4 bg-white p-1 rounded">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">PERSETIA</h4>
                        <p class="text-sm">{{ __('The Association of Theological Schools in Indonesia, serving as the coordinating body and extensive library network hub.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition">
                        <img src="{{ asset('images/partners/stft-logo.png') }}" alt="STFT Jakarta" class="h-16 object-contain mb-4 bg-white p-1 rounded">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">STFT Jakarta</h4>
                        <p class="text-sm">{{ __('Jakarta Theological Seminary, the oldest theological campus in Indonesia, renowned for its urban and public theology research.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition">
                        <img src="{{ asset('images/partners/ukdw-logo.png') }}" alt="UKDW" class="h-16 object-contain mb-4 bg-white p-1 rounded">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">UKDW Yogyakarta</h4>
                        <p class="text-sm">{{ __('Duta Wacana Christian University, bringing strong interdisciplinary approaches bridging theology, culture, and technology.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-md transition">
                        <img src="{{ asset('images/partners/uksw-logo.png') }}" alt="UKSW" class="h-16 object-contain mb-4 bg-white p-1 rounded">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">UKSW Salatiga</h4>
                        <p class="text-sm">{{ __('Satya Wacana Christian University, offering profound expertise in sociology of religion and contextual biblical studies.') }}</p>
                    </div>
                </div>
            </section>

            <section id="international" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('International Collaboration') }}</h2>
                <p>
                    {{ __('Beyond our national borders, IGTU actively seeks mutually beneficial partnerships with global theological institutions. These collaborations facilitate visiting professorships, joint international conferences, and exchange programs for doctoral candidates, ensuring our research remains globally engaged and relevant.') }}
                </p>
            </section>

            <section id="aptu" class="scroll-mt-24">
                <div class="bg-blue-50 dark:bg-slate-800 p-8 rounded-2xl border border-blue-100 dark:border-slate-700">
                    <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-4">{{ __('APTU Engagement') }}</h2>
                    <p class="mb-4">
                        {!! __('IGTU maintains a strategic relationship with the <strong>Asia Pacific Theological Union (APTU)</strong>. This engagement is vital for aligning our quality assurance standards with regional benchmarks.') !!}
                    </p>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>{{ __('Participation in the APTU Theological Forum.') }}</li>
                        <li>{{ __('Facilitating cross-border joint research initiatives.') }}</li>
                        <li>{{ __('Access to a wider network of Asian scholars for dissertation external examination.') }}</li>
                    </ul>
                </div>
            </section>

            <section id="members" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Members') }}</h2>
                <p class="mb-4">
                    {{ __('The IGTU community is composed of a vibrant and diverse group of scholars, including:') }}
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                    <div class="p-4 border border-gray-200 dark:border-slate-700 rounded-lg">
                        <div class="text-3xl font-extrabold text-blue-600 dark:text-blue-400 mb-2">40+</div>
                        <div class="font-bold text-slate-900 dark:text-white">{{ __('Core Faculty') }}</div>
                        <div class="text-xs mt-1">{{ __('Across 4 institutions') }}</div>
                    </div>
                    <div class="p-4 border border-gray-200 dark:border-slate-700 rounded-lg">
                        <div class="text-3xl font-extrabold text-blue-600 dark:text-blue-400 mb-2">150+</div>
                        <div class="font-bold text-slate-900 dark:text-white">{{ __('Active Candidates') }}</div>
                        <div class="text-xs mt-1">{{ __('In Th.D and Ph.D programs') }}</div>
                    </div>
                    <div class="p-4 border border-gray-200 dark:border-slate-700 rounded-lg">
                        <div class="text-3xl font-extrabold text-blue-600 dark:text-blue-400 mb-2">Global</div>
                        <div class="font-bold text-slate-900 dark:text-white">{{ __('Alumni Network') }}</div>
                        <div class="text-xs mt-1">{{ __('Serving worldwide') }}</div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection