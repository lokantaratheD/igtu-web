@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Academic Programs') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Empowering theological scholars for the Asia-Pacific context.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
        
        <div class="hidden lg:block w-1/4 pr-4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Program Details') }}</h3>
                <ul class="text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li class="mb-3"><a href="#doctoral" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Doctoral Program (PhD)') }}</a></li>
                    <li class="mb-3"><a href="#structure" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Program Structure') }}</a></li>
                    <li class="mb-3"><a href="#curriculum" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Curriculum Framework') }}</a></li>
                    <li class="mb-3"><a href="#interdisciplinary" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Interdisciplinary Approach') }}</a></li>
                    <li class="mb-3"><a href="#language" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Language Policy') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="doctoral" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Doctoral Program (PhD)') }}</h2>
                
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-gray-100 dark:border-slate-700 overflow-hidden flex flex-col md:flex-row">
                    
                    <div class="md:w-2/5 relative bg-slate-100">
                        <img src="{{ asset('images/photo/photo_5_card.jpeg') }}" 
                             alt="IGTU Doctoral Graduates" 
                             class="w-full h-full object-cover min-h-[250px] hover:scale-105 transition-transform duration-700 ease-in-out">
                    </div>
                    
                    <div class="p-6 md:p-8 md:w-3/5 flex flex-col justify-center">
                        <p class="mb-5 text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                            {!! __('The IGTU <strong>Doctor of Philosophy (Ph.D.)</strong> and <strong>Doctor of Theology (Th.D.)</strong> programs represent the highest level of academic achievement in theological studies. Designed for future educators, researchers, and thought leaders, this program demands rigorous critical thinking and original contribution to the field of theology.') !!}
                        </p>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            {{ __('Candidates are expected to engage deeply with both historical traditions and contemporary realities, producing scholarship that is globally recognized yet profoundly relevant to the Asian context.') }}
                        </p>
                    </div>
                </div>
            </section>

            <section id="structure" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Program Structure') }}</h2>
                <p class="mb-8 text-lg">{{ __('The doctoral journey is structured into three distinct phases, typically completed within 3 to 5 years:') }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-50 dark:bg-slate-800 p-6 rounded-xl border border-blue-100 dark:border-slate-700 hover:-translate-y-1 transition-transform duration-300">
                        <div class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-lg mb-5 shadow-md">1</div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-3">{{ __('Coursework Phase') }}</h4>
                        <p class="text-sm leading-relaxed text-gray-600 dark:text-gray-400">{{ __('Intensive seminars on methodology, core theological disciplines, and specialized electives across partner institutions.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 hover:-translate-y-1 transition-transform duration-300">
                        <div class="w-10 h-10 bg-yellow-500 text-slate-900 rounded-full flex items-center justify-center font-bold text-lg mb-5 shadow-md">2</div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-3">{{ __('Candidacy Phase') }}</h4>
                        <p class="text-sm leading-relaxed text-gray-600 dark:text-gray-400">{{ __('Completion of comprehensive examinations and the successful defense of the dissertation proposal.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 hover:-translate-y-1 transition-transform duration-300">
                        <div class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center font-bold text-lg mb-5 shadow-md">3</div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-3">{{ __('Research & Defense') }}</h4>
                        <p class="text-sm leading-relaxed text-gray-600 dark:text-gray-400">{{ __('Original research, writing of the dissertation under joint-supervision, and final oral defense.') }}</p>
                    </div>
                </div>
            </section>

            <section id="curriculum" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Curriculum Framework') }}</h2>
                <div class="bg-white dark:bg-slate-800 p-8 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                    <p class="mb-6 text-lg">
                        {{ __('Our curriculum is built upon a flexible yet demanding framework. It emphasizes advanced research methodologies tailored for theological inquiry.') }}
                    </p>
                    <ul class="space-y-5 text-gray-700 dark:text-gray-300">
                        <li class="flex items-start">
                            <span class="text-blue-600 dark:text-blue-400 font-bold mt-1 mr-4">✓</span>
                            <span>{!! __('<strong>Core Methodological Seminars:</strong> Equipping students with advanced tools for biblical exegesis, historical analysis, and systematic construction.') !!}</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 dark:text-blue-400 font-bold mt-1 mr-4">✓</span>
                            <span>{!! __('<strong>Contextual Theology Seminars:</strong> Exploring the intersection of theology with Asian socio-political, cultural, and religious landscapes.') !!}</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 dark:text-blue-400 font-bold mt-1 mr-4">✓</span>
                            <span>{!! __('<strong>Colloquiums:</strong> Mandatory participation in cross-campus academic forums to present ongoing research.') !!}</span>
                        </li>
                    </ul>
                </div>
            </section>

            <section id="interdisciplinary" class="scroll-mt-24 mb-16 bg-blue-50 dark:bg-slate-800/50 p-8 md:p-10 rounded-2xl border border-blue-100 dark:border-slate-700">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-5">{{ __('Interdisciplinary Approach') }}</h2>
                <p class="text-lg leading-relaxed">
                    {!! __('The complexities of modern society cannot be addressed by theology in isolation. IGTU strongly advocates for an <strong>Interdisciplinary Approach</strong>. Candidates are encouraged to integrate insights from sociology, anthropology, philosophy, and cultural studies into their theological research. This approach ensures that our graduates produce scholarship that is holistic, scientifically grounded, and practically impactful.') !!}
                </p>
            </section>

            <section id="language" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Language Policy') }}</h2>
                <p class="mb-8 text-lg">{{ __('To ensure global academic competitiveness while maintaining deep local roots, IGTU enforces a strict bilingual and multi-lingual policy:') }}</p>
                
                <div class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-slate-700">
                    <div class="p-6 border-b border-gray-100 dark:border-slate-700 flex items-start gap-5">
                        <div class="bg-blue-100 dark:bg-blue-900/50 p-3 rounded-lg flex-shrink-0 text-blue-600 dark:text-blue-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                        </div>
                        <div>
                            <strong class="text-slate-900 dark:text-white block text-lg mb-1">{{ __('Academic English') }}</strong>
                            <span class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('A high proficiency in English (evidenced by TOEFL/IELTS) is mandatory for reading international journals, participating in specific seminars, and writing dissertation abstracts.') }}</span>
                        </div>
                    </div>
                    <div class="p-6 border-b border-gray-100 dark:border-slate-700 flex items-start gap-5">
                        <div class="bg-blue-100 dark:bg-blue-900/50 p-3 rounded-lg flex-shrink-0 text-blue-600 dark:text-blue-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <div>
                            <strong class="text-slate-900 dark:text-white block text-lg mb-1">{{ __('Biblical/Classical Languages') }}</strong>
                            <span class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('Depending on the concentration, proficiency in Biblical Hebrew, New Testament Greek, or Latin may be required as a prerequisite.') }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex items-start gap-5">
                        <div class="bg-blue-100 dark:bg-blue-900/50 p-3 rounded-lg flex-shrink-0 text-blue-600 dark:text-blue-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                        </div>
                        <div>
                            <strong class="text-slate-900 dark:text-white block text-lg mb-1">{{ __('Bahasa Indonesia / Local Context') }}</strong>
                            <span class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('For dissertations addressing specific regional issues, fluency in Bahasa Indonesia or relevant local languages is vital for field research and community engagement.') }}</span>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection