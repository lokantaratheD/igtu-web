@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Admissions') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Join our consortium and shape the future of theology in Asia.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
        
        <div class="hidden lg:block w-1/4 pr-4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Admissions Guide') }}</h3>
                <ul class="text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li class="mb-3"><a href="#requirements" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Admission Requirements') }}</a></li>
                    <li class="mb-3"><a href="#process" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Application Process') }}</a></li>
                    <li class="mb-3"><a href="#tuition" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Tuition & Funding') }}</a></li>
                    <li class="mb-3"><a href="#scholarships" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Scholarships') }}</a></li>
                    <li class="mb-3"><a href="#faq" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('FAQ') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="requirements" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Admission Requirements') }}</h2>
                
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-gray-100 dark:border-slate-700 overflow-hidden flex flex-col md:flex-row">
                    
                    <div class="md:w-2/5 relative bg-slate-100 dark:bg-slate-900">
                        <img src="{{ asset('images/photo/photo_4_card.jpeg') }}" 
                             alt="Admission Application Process" 
                             class="w-full h-full object-cover min-h-[300px] hover:scale-105 transition-transform duration-700 ease-in-out">
                    </div>
                    
                    <div class="p-6 md:p-8 md:w-3/5 bg-gray-50 dark:bg-slate-800/50">
                        <p class="mb-6 text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                            {{ __('To apply for the doctoral programs under the IGTU consortium, candidates must fulfill the following prerequisites:') }}
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex gap-4 items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center font-bold border border-blue-200 dark:border-blue-800">1</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-lg">{{ __('Academic Background') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1 leading-relaxed">{!! __('A recognized Master of Theology (M.Th) or equivalent degree with a minimum GPA of 3.30 (on a 4.0 scale).') !!}</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center font-bold border border-blue-200 dark:border-blue-800">2</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-lg">{{ __('Research Proposal') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1 leading-relaxed">{!! __('A comprehensive 3,000-word proposal outlining the intended research area, methodology, and its contextual relevance to Asia.') !!}</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center font-bold border border-blue-200 dark:border-blue-800">3</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-lg">{{ __('Language Proficiency') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1 leading-relaxed">{!! __('Proof of English proficiency (TOEFL/IELTS). Additional classical languages may be required based on the research focus.') !!}</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center font-bold border border-blue-200 dark:border-blue-800">4</div>
                                <div>
                                    <h4 class="font-bold text-slate-900 dark:text-white text-lg">{{ __('Recommendations') }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1 leading-relaxed">{!! __('Two academic recommendation letters from previous professors or institutional leaders.') !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="process" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Application Process') }}</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                        </div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Online Submission') }}</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('Submit all required documents, including the research proposal and academic transcripts, through the IGTU portal.') }}</p>
                    </div>
                    
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="w-12 h-12 bg-yellow-50 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-500 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Joint-Committee Review') }}</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('The academic senate, representing PERSETIA, STFT, UKDW, and UKSW, will evaluate the academic merit of your proposal.') }}</p>
                    </div>

                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-gray-100 dark:border-slate-700 shadow-sm hover:shadow-md transition hover:-translate-y-1 duration-300">
                        <div class="w-12 h-12 bg-green-50 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                        </div>
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Interview Session') }}</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('Shortlisted candidates will be invited for an academic interview to defend their proposal before a panel of professors.') }}</p>
                    </div>
                </div>
            </section>

            <section id="tuition" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Tuition & Funding') }}</h2>
                <p class="mb-6 text-lg leading-relaxed">
                    {{ __('Because IGTU operates as a consortium, tuition fees are standardized across partner institutions. This ensures that students can cross-register for seminars without incurring extra institutional fees.') }}
                </p>
                <div class="bg-blue-50 dark:bg-slate-800/50 p-6 md:p-8 rounded-xl border border-blue-100 dark:border-slate-700 flex items-start gap-4">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-base text-gray-700 dark:text-gray-300 leading-relaxed">
                        {{ __('Detailed fee structures for the upcoming academic year will be provided upon request. Please contact the admissions office for the most up-to-date schedule of fees, which includes matriculation, library access, and examination costs.') }}
                    </p>
                </div>
            </section>

            <section id="scholarships" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Scholarships') }}</h2>
                <div class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-slate-700">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">{{ __('Funding Your Doctoral Journey') }}</h3>
                    <p class="mb-6 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                        {{ __('IGTU is committed to ensuring that financial barriers do not prevent highly qualified scholars from contributing to Asian theology. Various funding options are available:') }}
                    </p>
                    
                    <ul class="space-y-4 text-gray-700 dark:text-gray-300 text-lg mb-8">
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                            <span><strong>PERSETIA Grants:</strong> {{ __('Limited grants available for faculty members of PERSETIA-affiliated schools.') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                            <span><strong>Institutional Scholarships:</strong> {{ __('Merit-based assistance provided directly by STFT, UKDW, or UKSW.') }}</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                            <span><strong>Partner Endowments:</strong> {{ __('Support from global ecumenical partners for research addressing critical Asian contextual issues.') }}</span>
                        </li>
                    </ul>
                    
                    <!-- <a href="#" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        {{ __('Download Scholarship Guide') }}
                    </a> -->
                </div>
            </section>

            <section id="faq" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('FAQ') }}</h2>
                <div class="space-y-4">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-3">{{ __('Can I study part-time?') }}</h4>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('The doctoral program requires intensive research. While some coursework can be adjusted, a full-time commitment is highly recommended during the first two years.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-3">{{ __('Do I need to live in the same city as the campus?') }}</h4>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('While physical presence is required for specific colloquiums and examinations, the consortium model allows for certain research phases to be conducted in your specific ministry context.') }}</p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection