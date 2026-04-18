@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Contact Us') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Get in touch with the IGTU secretariat and our partner institutions.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col lg:flex-row gap-12 max-w-6xl mx-auto">
        
        <div class="w-full lg:w-3/5">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-6">{{ __('Send us a message') }}</h2>
            <p class="text-gray-600 dark:text-gray-400 mb-8">{{ __('Have questions about our doctoral programs, admissions, or research collaborations? Fill out the form below and our administrative team will get back to you shortly.') }}</p>
            
            <form action="#" method="POST" class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-slate-700">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Full Name') }}</label>
                        <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-slate-600 bg-gray-50 dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="{{ __('e.g. John Doe') }}">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Email Address') }}</label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-slate-600 bg-gray-50 dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="name@example.com">
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Subject') }}</label>
                    <select id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-slate-600 bg-gray-50 dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none transition">
                        <option value="">{{ __('Select a topic') }}</option>
                        <option value="admissions">{{ __('Admissions Inquiry') }}</option>
                        <option value="academic">{{ __('Academic Programs') }}</option>
                        <option value="partnership">{{ __('Partnership Opportunities') }}</option>
                        <option value="other">{{ __('Other') }}</option>
                    </select>
                </div>
                
                <div class="mb-8">
                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('Message') }}</label>
                    <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-slate-600 bg-gray-50 dark:bg-slate-700 text-slate-900 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="{{ __('How can we help you?') }}"></textarea>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 flex justify-center items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    {{ __('Send Message') }}
                </button>
            </form>
        </div>

       <div class="w-full lg:w-2/5 flex flex-col gap-4">
            <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-2">{{ __('Consortium Offices') }}</h2>
            
            <div class="bg-blue-50 dark:bg-slate-800 p-6 rounded-xl border border-blue-200 dark:border-slate-600 shadow-sm relative overflow-hidden mb-2">
                
                <div class="absolute bottom-0 right-0 opacity-10 dark:opacity-5 pointer-events-none transform translate-x-1/4 translate-y-1/4">
                    <img src="{{ asset('images/igtu-logo.jpeg') }}" class="w-40 h-40 object-cover rounded-full grayscale" alt="">
                </div>
                
                <div class="relative z-10">
                    <h3 class="font-extrabold text-xl text-slate-900 dark:text-white mb-1">{{ __('IGTU Main Secretariat') }}</h3>
                    <p class="text-sm text-blue-700 dark:text-blue-300 font-bold mb-4">{{ __('c/o PERSETIA Office') }}</p>
                    <div class="space-y-3 text-sm text-gray-700 dark:text-gray-300">
                        <p class="flex items-start gap-3">
                            <span class="bg-blue-200 dark:bg-blue-900/50 p-1.5 rounded-md text-blue-700 dark:text-blue-300 mt-0.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </span>
                            <span class="leading-relaxed">Jl. Proklamasi No.27, Menteng, Jakarta Pusat 10320</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <span class="bg-blue-200 dark:bg-blue-900/50 p-1.5 rounded-md text-blue-700 dark:text-blue-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </span>
                            <span class="font-medium">info@igtu.ac.id</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex items-center gap-4 hover:shadow-md transition duration-300 group">
                <div class="w-16 h-16 bg-white rounded-lg p-2 flex-shrink-0 flex items-center justify-center border border-gray-100 dark:border-slate-600">
                    <img src="{{ asset('images/partners/stft-logo.png') }}" alt="STFT" class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-0.5">STFT Jakarta</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-1.5">Jl. Proklamasi No.27, Jakarta Pusat</p>
                    <a href="https://stftjakarta.ac.id" target="_blank" class="text-xs font-bold text-blue-600 dark:text-blue-400 hover:text-blue-800 transition inline-flex items-center gap-1">
                        {{ __('Visit Website') }} &rarr;
                    </a>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex items-center gap-4 hover:shadow-md transition duration-300 group">
                <div class="w-16 h-16 bg-white rounded-lg p-2 flex-shrink-0 flex items-center justify-center border border-gray-100 dark:border-slate-600">
                    <img src="{{ asset('images/partners/ukdw-logo.png') }}" alt="UKDW" class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-0.5">UKDW Yogyakarta</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-1.5">Jl. Dr. Wahidin No.5-25, Yogyakarta</p>
                    <a href="https://www.ukdw.ac.id" target="_blank" class="text-xs font-bold text-blue-600 dark:text-blue-400 hover:text-blue-800 transition inline-flex items-center gap-1">
                        {{ __('Visit Website') }} &rarr;
                    </a>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 flex items-center gap-4 hover:shadow-md transition duration-300 group">
                <div class="w-16 h-16 bg-white rounded-lg p-2 flex-shrink-0 flex items-center justify-center border border-gray-100 dark:border-slate-600">
                    <img src="{{ asset('images/partners/uksw-logo.png') }}" alt="UKSW" class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-0.5">UKSW Salatiga</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-1.5">Jl. Diponegoro No.52-60, Salatiga</p>
                    <a href="https://www.uksw.edu" target="_blank" class="text-xs font-bold text-blue-600 dark:text-blue-400 hover:text-blue-800 transition inline-flex items-center gap-1">
                        {{ __('Visit Website') }} &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection