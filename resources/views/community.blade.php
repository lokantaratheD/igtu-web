@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Community Engagement') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Translating theological reflection into transformative social action.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
        
        <div class="hidden lg:block w-1/4 pr-4">
            <div class="sticky top-24 bg-white dark:bg-slate-800 p-6 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700">
                <h3 class="font-bold text-slate-900 dark:text-white mb-4 uppercase tracking-wider text-sm">{{ __('Focus Areas') }}</h3>
                <ul class="text-sm font-medium text-gray-600 dark:text-gray-400">
                    <li class="mb-3"><a href="#programs" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Community Programs') }}</a></li>
                    <li class="mb-3"><a href="#contextual" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Contextual Theology') }}</a></li>
                    <li class="mb-3"><a href="#impact" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Social Impact') }}</a></li>
                    <li class="mb-3"><a href="#faith" class="hover:text-blue-600 dark:hover:text-blue-400 transition">{{ __('Faith & Society') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full lg:w-3/4 text-gray-700 dark:text-gray-300 leading-relaxed">
            
            <section id="programs" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Community Programs') }}</h2>
                <p class="mb-8 text-lg leading-relaxed">{{ __('Our commitment to society is realized through various sustainable outreach programs initiated by our faculty and doctoral candidates. These programs aim to empower local communities across Indonesia.') }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-blue-50 dark:bg-slate-800 p-6 md:p-8 rounded-xl border border-blue-100 dark:border-slate-700 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 rounded-full flex items-center justify-center mb-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h4 class="font-bold text-xl text-slate-900 dark:text-white mb-3">{{ __('Grassroots Empowerment') }}</h4>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('Collaborating with local non-profits to provide educational resources and leadership training for community leaders.') }}</p>
                    </div>
                    <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-red-50 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full flex items-center justify-center mb-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <h4 class="font-bold text-xl text-slate-900 dark:text-white mb-3">{{ __('Crisis Response & Pastoral Care') }}</h4>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('Deploying trained theological counselors and volunteers to assist in disaster recovery and community trauma healing.') }}</p>
                    </div>
                </div>
            </section>

            <section id="contextual" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Contextual Theology') }}</h2>
                <div class="flex flex-col md:flex-row gap-8 items-stretch">
                    <div class="w-full md:w-2/3">
                        <p class="mb-5 text-lg leading-relaxed">
                            {!! __('Theology must speak to the realities of the people. At IGTU, <strong>Contextual Theology</strong> is not just a classroom subject; it is a lived practice. Our researchers immerse themselves in the diverse cultural, economic, and political landscapes of the Asia-Pacific.') !!}
                        </p>
                        <p class="text-lg leading-relaxed text-gray-600 dark:text-gray-400">
                            {{ __('By engaging directly with local narratives, traditions, and struggles, we develop theological frameworks that are authentic, deeply rooted, and capable of addressing the specific challenges faced by local congregations.') }}
                        </p>
                    </div>
                    <div class="w-full md:w-1/3 bg-blue-50 dark:bg-slate-800 p-8 rounded-2xl border border-blue-100 dark:border-slate-700 flex items-center text-center justify-center shadow-sm">
                        <p class="italic text-lg font-medium text-blue-900 dark:text-blue-300">
                            "{{ __('Theology from below is our commitment to listen before we speak.') }}"
                        </p>
                    </div>
                </div>
            </section>

            <section id="impact" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Social Impact') }}</h2>
                <p class="mb-8 text-lg leading-relaxed">{{ __('Our academic rigor is matched by our dedication to creating measurable positive change in society. We actively advocate for:') }}</p>
                <div class="space-y-5">
                    <div class="flex items-start gap-5 p-6 bg-white dark:bg-slate-800 rounded-xl border border-gray-100 dark:border-slate-700 shadow-sm transition hover:border-blue-300">
                        <div class="bg-blue-100 dark:bg-blue-900/50 p-3 rounded-xl text-blue-600 dark:text-blue-400 flex-shrink-0 mt-1">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl text-slate-900 dark:text-white mb-2">{{ __('Justice & Human Rights') }}</h4>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('Providing theological foundations for advocacy groups fighting for marginalized communities and human dignity.') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-5 p-6 bg-white dark:bg-slate-800 rounded-xl border border-gray-100 dark:border-slate-700 shadow-sm transition hover:border-green-300">
                        <div class="bg-green-100 dark:bg-green-900/50 p-3 rounded-xl text-green-600 dark:text-green-400 flex-shrink-0 mt-1">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl text-slate-900 dark:text-white mb-2">{{ __('Ecological Responsibility') }}</h4>
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ __('Promoting environmental ethics and sustainable practices through community-based ecological projects.') }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="faith" class="scroll-mt-24 mb-16">
                <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6 border-b border-gray-200 dark:border-slate-700 pb-2">{{ __('Faith & Society') }}</h2>
                
                <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg border border-gray-100 dark:border-slate-700 overflow-hidden flex flex-col md:flex-row-reverse">
                    
                    <div class="md:w-2/5 relative bg-slate-100 dark:bg-slate-900 border-b md:border-b-0 md:border-l border-gray-100 dark:border-slate-700">
                        <img src="{{ asset('images/photo/photo_6.jpeg') }}" 
                             alt="IGTU Community Forum" 
                             class="w-full h-full object-cover min-h-[250px] hover:scale-105 transition-transform duration-700 ease-in-out">
                    </div>
                    
                    <div class="p-6 md:p-8 md:w-3/5 flex flex-col justify-center bg-gray-50 dark:bg-slate-800/50">
                        <p class="mb-6 text-gray-700 dark:text-gray-300 text-lg leading-relaxed">
                            {{ __('In an increasingly pluralistic and interconnected world, the intersection of faith and public life is more crucial than ever. IGTU actively fosters spaces for dialogue that transcend denominational and religious boundaries.') }}
                        </p>
                        
                        <ul class="space-y-5 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white block mb-1">{{ __('Interfaith Dialogue') }}</strong>
                                    <span class="text-sm leading-relaxed">{{ __('Hosting forums that build mutual understanding and peace-building initiatives among different religious communities in Indonesia.') }}</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-blue-600 dark:text-blue-400 mt-1 font-bold">✓</span>
                                <div>
                                    <strong class="text-slate-900 dark:text-white block mb-1">{{ __('Public Policy Engagement') }}</strong>
                                    <span class="text-sm leading-relaxed">{{ __('Contributing academic insights to national discourse on ethics, education, and social welfare.') }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </section>

        </div>
    </div>
</div>
@endsection