@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Community Engagement') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Translating theological reflection into transformative social action.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <div class="hidden lg:block w-1/4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Focus Areas') }}</h3>
                <ul class="space-y-3 text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li><a href="#programs" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Community Programs') }}</a></li>
                    <li><a href="#contextual" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Contextual Theology') }}</a></li>
                    <li><a href="#impact" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Social Impact') }}</a></li>
                    <li><a href="#faith" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Faith & Society') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 space-y-16 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="programs" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Community Programs') }}</h2>
                <p class="mb-6">{{ __('Our commitment to society is realized through various sustainable outreach programs initiated by our faculty and doctoral candidates. These programs aim to empower local communities across Indonesia.') }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-blue-50 dark:bg-slate-800 p-6 rounded-xl border border-blue-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Grassroots Empowerment') }}</h4>
                        <p class="text-sm">{{ __('Collaborating with local non-profits to provide educational resources and leadership training for community leaders.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                        <h4 class="font-bold text-lg text-slate-900 dark:text-white mb-2">{{ __('Crisis Response & Pastoral Care') }}</h4>
                        <p class="text-sm">{{ __('Deploying trained theological counselors and volunteers to assist in disaster recovery and community trauma healing.') }}</p>
                    </div>
                </div>
            </section>

            <section id="contextual" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Contextual Theology') }}</h2>
                <div class="flex flex-col md:flex-row gap-6 items-center">
                    <div class="w-full md:w-2/3">
                        <p class="mb-4">
                            {!! __('Theology must speak to the realities of the people. At IGTU, <strong>Contextual Theology</strong> is not just a classroom subject; it is a lived practice. Our researchers immerse themselves in the diverse cultural, economic, and political landscapes of the Asia-Pacific.') !!}
                        </p>
                        <p>
                            {{ __('By engaging directly with local narratives, traditions, and struggles, we develop theological frameworks that are authentic, deeply rooted, and capable of addressing the specific challenges faced by local congregations.') }}
                        </p>
                    </div>
                    <div class="w-full md:w-1/3 bg-gray-50 dark:bg-slate-800 p-6 rounded-xl border border-gray-100 dark:border-slate-700 text-center italic text-sm">
                        "{{ __('Theology from below is our commitment to listen before we speak.') }}"
                    </div>
                </div>
            </section>

            <section id="impact" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Social Impact') }}</h2>
                <p class="mb-6">{{ __('Our academic rigor is matched by our dedication to creating measurable positive change in society. We actively advocate for:') }}</p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 bg-white dark:bg-slate-800 rounded-lg border border-gray-100 dark:border-slate-700 shadow-sm">
                        <div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded-full text-blue-600 dark:text-blue-400 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">{{ __('Justice & Human Rights') }}</h4>
                            <p class="text-sm mt-1">{{ __('Providing theological foundations for advocacy groups fighting for marginalized communities and human dignity.') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 p-4 bg-white dark:bg-slate-800 rounded-lg border border-gray-100 dark:border-slate-700 shadow-sm">
                        <div class="bg-green-100 dark:bg-green-900/50 p-2 rounded-full text-green-600 dark:text-green-400 flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">{{ __('Ecological Responsibility') }}</h4>
                            <p class="text-sm mt-1">{{ __('Promoting environmental ethics and sustainable practices through community-based ecological projects.') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="faith" class="scroll-mt-24">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b pb-2">{{ __('Faith & Society') }}</h2>
                <div class="bg-gray-50 dark:bg-slate-800/50 p-8 rounded-2xl border border-gray-100 dark:border-slate-700">
                    <p class="mb-4">
                        {{ __('In an increasingly pluralistic and interconnected world, the intersection of faith and public life is more crucial than ever. IGTU actively fosters spaces for dialogue that transcend denominational and religious boundaries.') }}
                    </p>
                    <ul class="list-disc pl-5 space-y-2 mb-0">
                        <li><strong>{{ __('Interfaith Dialogue:') }}</strong> {{ __('Hosting forums that build mutual understanding and peace-building initiatives among different religious communities in Indonesia.') }}</li>
                        <li><strong>{{ __('Public Policy Engagement:') }}</strong> {{ __('Contributing academic insights to national discourse on ethics, education, and social welfare.') }}</li>
                    </ul>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection