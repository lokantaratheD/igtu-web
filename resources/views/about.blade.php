@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('About IGTU') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('A Collaborative Ecosystem for Theological Excellence in the Asia-Pacific.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <div class="hidden lg:block w-1/4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('In this section') }}</h3>
                <ul class="space-y-3 text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li><a href="#background" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Background & Formation') }}</a></li>
                    <li><a href="#vision" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Vision & Mission') }}</a></li>
                    <li><a href="#values" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Core Values') }}</a></li>
                    <li><a href="#model" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Consortium Model') }}</a></li>
                    <li><a href="#governance" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Governance Structure') }}</a></li>
                    <li><a href="#aptu" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Strategic Alignment (APTU)') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 space-y-16 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="background" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Background & Formation') }}</h2>
                <p class="mb-4">
                    {!! __('The <strong>Indonesia Graduate Theological Union (IGTU)</strong> was born out of a historic Memorandum of Understanding (MoU) recognizing the urgent need for high-caliber, contextually rooted doctoral theological education in Indonesia and Southeast Asia.') !!}
                </p>
                <p>
                    {!! __('Formed through an unprecedented strategic partnership, IGTU unites the strengths of <strong>PERSETIA</strong>, <strong>STFT Jakarta</strong>, <strong>Universitas Kristen Duta Wacana (UKDW)</strong>, and <strong>Universitas Kristen Satya Wacana (UKSW)</strong> to pool academic resources, faculty expertise, and research facilities.') !!}
                </p>
            </section>

            <section id="vision" class="scroll-mt-24 bg-blue-50 dark:bg-slate-800/50 p-8 rounded-2xl border border-blue-100 dark:border-slate-700">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6">{{ __('Vision & Mission') }}</h2>
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ __('Our Vision') }}</h3>
                    <p>{!! __('To become a premier center of excellence in theological research and education that dynamically responds to the contextual challenges of Asia and the global south.') !!}</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ __('Our Mission') }}</h3>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>{{ __('To provide a robust, world-class Doctor of Theology (Th.D.) and Ph.D. ecosystem.') }}</li>
                        <li>{{ __('To facilitate inter-institutional joint-supervision and cross-registration of courses.') }}</li>
                        <li>{{ __('To produce collaborative academic publications that impact both the church and society.') }}</li>
                    </ul>
                </div>
            </section>

            <section id="values" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Core Values') }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Contextuality') }}</h4>
                        <p class="text-sm">{{ __('Theology that speaks directly to the Asian reality, addressing pluralism, poverty, and cultural diversity.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Ecumenism') }}</h4>
                        <p class="text-sm">{{ __('Fostering unity across diverse denominational backgrounds through open academic dialogue.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Excellence') }}</h4>
                        <p class="text-sm">{{ __('Upholding the highest standards of academic rigor, research integrity, and pedagogical innovation.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Collaboration') }}</h4>
                        <p class="text-sm">{{ __('Believing that institutional synergy produces far greater outcomes than isolated efforts.') }}</p>
                    </div>
                </div>
            </section>

            <section id="model" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Consortium Model') }}</h2>
                <p class="mb-4">{{ __('IGTU operates on a highly integrated consortium model designed to maximize student experience:') }}</p>
                <ul class="list-none space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-yellow-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <strong class="text-slate-900 dark:text-white block">{{ __('Shared Library Resources') }}</strong>
                            <span class="text-sm">{{ __('Students gain access to the combined digital and physical libraries of all partner institutions via PERSETIA.') }}</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-yellow-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <strong class="text-slate-900 dark:text-white block">{{ __('Cross-Registration') }}</strong>
                            <span class="text-sm">{{ __('Seamless enrollment in specialized doctoral seminars across STFT, UKDW, and UKSW.') }}</span>
                        </div>
                    </li>
                </ul>
            </section>

            <section id="governance" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Governance Structure') }}</h2>
                <p class="mb-6">{{ __('To ensure academic integrity and equitable collaboration, IGTU is governed by a multi-layered structure:') }}</p>
                <div class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-slate-700">
                    <div class="p-4 border-b border-gray-100 dark:border-slate-700 flex items-center gap-4">
                        <div class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 font-bold px-3 py-1 rounded text-sm w-32 text-center">{{ __('Tier 1') }}</div>
                        <div class="font-medium text-slate-900 dark:text-white">{{ __('Board of Directors (Rectors/Heads of Institutions)') }}</div>
                    </div>
                    <div class="p-4 border-b border-gray-100 dark:border-slate-700 flex items-center gap-4">
                        <div class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 font-bold px-3 py-1 rounded text-sm w-32 text-center">{{ __('Tier 2') }}</div>
                        <div class="font-medium text-slate-900 dark:text-white">{{ __('Academic Senate & Joint-Committee') }}</div>
                    </div>
                    <div class="p-4 flex items-center gap-4">
                        <div class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 font-bold px-3 py-1 rounded text-sm w-32 text-center">{{ __('Tier 3') }}</div>
                        <div class="font-medium text-slate-900 dark:text-white">{{ __('IGTU Executive Directorate') }}</div>
                    </div>
                </div>
            </section>

            <section id="aptu" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Strategic Alignment (APTU)') }}</h2>
                <p class="leading-relaxed">
                    {!! __('IGTU is strategically aligned with the <strong>Asia Pacific Theological Union (APTU)</strong>. This international affiliation ensures that our curriculum, research standards, and theological engagements are not only locally relevant but globally recognized. Through APTU, our graduates are connected to a vast network of scholars and institutions across the Asia-Pacific rim.') !!}
                </p>
            </section>

        </div>
    </div>
</div>
@endsection