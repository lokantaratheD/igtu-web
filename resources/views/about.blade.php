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
            
           <section id="about-us" class="scroll-mt-24 mb-16">
    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 md:p-10 shadow-lg border border-gray-100 dark:border-slate-700">
        
        <div class="mb-10">
            <p class="text-gray-700 dark:text-gray-300 mb-5 text-lg leading-relaxed">
                {!! __('The <strong>Indonesia Graduate Theological Union (IGTU)</strong> is a collaborative doctoral in theology established through a formal partnership among:') !!}
            </p>
            
            <ul class="list-disc list-outside pl-6 text-gray-700 dark:text-gray-300 space-y-3 text-lg marker:text-blue-600 dark:marker:text-blue-400">
                <li>{!! __('<strong>The Association of Theological Schools in Indonesia</strong> (PERSETIA_ATSI)') !!}</li>
                <li>{!! __('<strong>Sekolah Tinggi Filsafat Theologi Jakarta</strong> (STFT Jakarta)') !!}</li>
                <li>{!! __('<strong>Universitas Kristen Duta Wacana</strong> (UKDW)') !!}</li>
                <li>{!! __('<strong>Universitas Kristen Satya Wacana</strong> (UKSW)') !!}</li>
            </ul>
        </div>

        <div class="bg-gradient-to-r from-blue-50 to-white dark:from-slate-700/50 dark:to-slate-800 border-l-4 border-blue-500 p-6 md:p-8 rounded-r-xl shadow-sm mb-10">
            <p class="text-gray-700 dark:text-gray-300 italic text-lg leading-relaxed">
                {{ __('IGTU is not a standalone higher education institution. Rather, it is a joint academic initiative designed to strengthen the quality, scope, and global engagement of doctoral-level theological education in Indonesia through inter-institutional collaboration.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-gray-50 dark:bg-slate-700/30 rounded-xl p-6 border border-gray-100 dark:border-slate-600 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4 border-b border-gray-200 dark:border-slate-600 pb-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 dark:text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 dark:text-blue-300">{{ __('Operational Principles') }}</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    {!! __('The consortium operates on the principle of <strong>equal partnership</strong> among its participating institutions. Academic authority—including student registration, credit recognition, supervision, and degree conferral—remains under the jurisdiction of each respective university in accordance with national higher education regulations.') !!}
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-slate-700/30 rounded-xl p-6 border border-gray-100 dark:border-slate-600 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4 border-b border-gray-200 dark:border-slate-600 pb-3">
                    <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 dark:text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 dark:text-blue-300">{{ __('Academic Synergy') }}</h3>
                </div>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    {!! __('Doctoral degrees are conferred by the partner institutions, while IGTU provides an <strong>integrated academic framework</strong>, <strong>collaborative supervision</strong>, and an <strong>international research environment</strong> that enhances the quality and impact of doctoral studies.') !!}
                </p>
            </div>

        </div>
    </div>
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