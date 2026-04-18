@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Admissions') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Join our consortium and shape the future of theology in Asia.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <div class="hidden lg:block w-1/4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Admissions Guide') }}</h3>
                <ul class="space-y-3 text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li><a href="#requirements" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Admission Requirements') }}</a></li>
                    <li><a href="#process" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Application Process') }}</a></li>
                    <li><a href="#tuition" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Tuition & Funding') }}</a></li>
                    <li><a href="#scholarships" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Scholarships') }}</a></li>
                    <li><a href="#faq" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('FAQ') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 space-y-16 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="requirements" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Admission Requirements') }}</h2>
                <p class="mb-6">{{ __('To apply for the doctoral programs under the IGTU consortium, candidates must fulfill the following prerequisites:') }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('1. Academic Background') }}</h4>
                        <p class="text-sm">{!! __('A recognized Master of Theology (M.Th) or equivalent degree with a minimum GPA of 3.30 (on a 4.0 scale).') !!}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('2. Research Proposal') }}</h4>
                        <p class="text-sm">{!! __('A comprehensive 3,000-word proposal outlining the intended research area, methodology, and its contextual relevance to Asia.') !!}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('3. Language Proficiency') }}</h4>
                        <p class="text-sm">{!! __('Proof of English proficiency (TOEFL/IELTS). Additional classical languages may be required based on the research focus.') !!}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('4. Recommendations') }}</h4>
                        <p class="text-sm">{!! __('Two academic recommendation letters from previous professors or institutional leaders.') !!}</p>
                    </div>
                </div>
            </section>

            <section id="process" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Application Process') }}</h2>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h4 class="font-bold text-lg text-slate-900 dark:text-white">{{ __('Online Submission') }}</h4>
                            <p class="text-sm">{{ __('Submit all required documents, including the research proposal and academic transcripts, through the IGTU portal.') }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h4 class="font-bold text-lg text-slate-900 dark:text-white">{{ __('Joint-Committee Review') }}</h4>
                            <p class="text-sm">{{ __('The academic senate, representing PERSETIA, STFT, UKDW, and UKSW, will evaluate the academic merit of your proposal.') }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h4 class="font-bold text-lg text-slate-900 dark:text-white">{{ __('Interview Session') }}</h4>
                            <p class="text-sm">{{ __('Shortlisted candidates will be invited for an academic interview to defend their proposal before a panel of professors.') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tuition" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Tuition & Funding') }}</h2>
                <p class="mb-4">
                    {{ __('Because IGTU operates as a consortium, tuition fees are standardized across partner institutions. This ensures that students can cross-register for seminars without incurring extra institutional fees.') }}
                </p>
                <div class="bg-gray-50 dark:bg-slate-800/50 p-6 rounded-xl border border-gray-100 dark:border-slate-700">
                    <p class="text-sm italic text-gray-600 dark:text-gray-400">{{ __('Detailed fee structures for the upcoming academic year will be provided upon request. Please contact the admissions office for the most up-to-date schedule of fees, which includes matriculation, library access, and examination costs.') }}</p>
                </div>
            </section>

            <section id="scholarships" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Scholarships') }}</h2>
                <div class="bg-blue-50 dark:bg-slate-800 p-8 rounded-2xl border border-blue-100 dark:border-slate-700">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">{{ __('Funding Your Doctoral Journey') }}</h3>
                    <p class="mb-4">
                        {{ __('IGTU is committed to ensuring that financial barriers do not prevent highly qualified scholars from contributing to Asian theology. Various funding options are available:') }}
                    </p>
                    <ul class="list-disc pl-5 space-y-2 mb-6">
                        <li><strong>PERSETIA Grants:</strong> {{ __('Limited grants available for faculty members of PERSETIA-affiliated schools.') }}</li>
                        <li><strong>Institutional Scholarships:</strong> {{ __('Merit-based assistance provided directly by STFT, UKDW, or UKSW.') }}</li>
                        <li><strong>Partner Endowments:</strong> {{ __('Support from global ecumenical partners for research addressing critical Asian contextual issues.') }}</li>
                    </ul>
                    <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded transition">
                        {{ __('Download Scholarship Guide') }}
                    </a>
                </div>
            </section>

            <section id="faq" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('FAQ') }}</h2>
                <div class="space-y-4">
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('Can I study part-time?') }}</h4>
                        <p class="text-sm">{{ __('The doctoral program requires intensive research. While some coursework can be adjusted, a full-time commitment is highly recommended during the first two years.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-slate-900 dark:text-white mb-2">{{ __('Do I need to live in the same city as the campus?') }}</h4>
                        <p class="text-sm">{{ __('While physical presence is required for specific colloquiums and examinations, the consortium model allows for certain research phases to be conducted in your specific ministry context.') }}</p>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection