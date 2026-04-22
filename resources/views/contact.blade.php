@extends('layouts.app')

@section('content')
<div class="bg-blue-900 dark:bg-blue-950 text-white py-20 transition-colors duration-300">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">{{ __('Contact Us') }}</h1>
        <p class="text-xl text-blue-200 max-w-2xl mx-auto">{{ __('Get in touch with the IGTU secretariat and our partner institutions.') }}</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16 max-w-5xl">
    
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-blue-900 dark:text-blue-400 mb-5">{{ __('Consortium Offices') }}</h2>
        <p class="text-gray-600 dark:text-gray-400 text-lg max-w-3xl mx-auto leading-relaxed">
            {{ __('As a collaborative initiative, IGTU currently operates through our founding consortium members. For any academic, admissions, or administrative inquiries, please reach out to our main secretariat or visit our partner institutions directly.') }}
        </p>
    </div>

    <div class="bg-blue-50 dark:bg-slate-800 p-8 md:p-10 rounded-3xl border border-blue-200 dark:border-slate-600 shadow-md relative overflow-hidden mb-12 max-w-4xl mx-auto">
        
        <div class="absolute bottom-0 right-0 opacity-10 dark:opacity-5 pointer-events-none transform translate-x-1/4 translate-y-1/4">
            <img src="{{ asset('images/igtu-logo.jpeg') }}" class="w-64 h-64 object-cover rounded-full grayscale" alt="">
        </div>
        
        <div class="relative z-10 flex flex-col md:flex-row items-center md:items-start gap-8 text-center md:text-left">
            
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-blue-100 dark:border-slate-700 flex-shrink-0 w-36 h-36 flex items-center justify-center">
                <img src="{{ asset('images/partners/persetia-logo.png') }}" class="w-full h-full object-contain transform scale-125" alt="PERSETIA">
            </div>
            
            <div class="flex-grow w-full flex flex-col items-center md:items-start">
                <h3 class="font-extrabold text-2xl md:text-3xl text-slate-900 dark:text-white mb-2">{{ __('IGTU Main Secretariat') }}</h3>
                <p class="text-blue-700 dark:text-blue-300 font-bold mb-6 text-lg">{{ __('c/o PERSETIA Office') }}</p>
                
                <div class="flex items-start gap-4 text-gray-700 dark:text-gray-300 bg-white/70 dark:bg-slate-900/50 p-6 rounded-xl border border-white/50 dark:border-slate-700/50 backdrop-blur-sm w-full md:max-w-md shadow-sm">
                    <span class="bg-blue-100 dark:bg-blue-900/50 p-2.5 rounded-lg text-blue-700 dark:text-blue-400 flex-shrink-0 mt-0.5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </span>
                    <span class="leading-relaxed font-medium text-left text-base">
                        Jl. Proklamasi No.27, Menteng,<br>
                        Jakarta Pusat 10320, Indonesia
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
        
        <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-lg transition duration-300 group hover:-translate-y-1">
            <div class="w-20 h-20 bg-white rounded-xl p-3 mb-6 flex items-center justify-center border border-gray-100 dark:border-slate-600 shadow-sm">
                <img src="{{ asset('images/partners/stft-logo.png') }}" alt="STFT" class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition duration-500">
            </div>
            <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">STFT Jakarta</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-8 flex-grow">Jl. Proklamasi No.27,<br>Jakarta Pusat</p>
            <a href="https://stftjakarta.ac.id" target="_blank" class="w-full py-3 px-4 bg-blue-50 hover:bg-blue-600 text-blue-700 hover:text-white dark:bg-slate-700/50 dark:hover:bg-blue-600 dark:text-blue-300 dark:hover:text-white rounded-xl text-sm font-bold transition duration-300 flex items-center justify-center gap-2">
                {{ __('Visit Website') }} <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            </a>
        </div>

        <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-lg transition duration-300 group hover:-translate-y-1">
            <div class="w-20 h-20 bg-white rounded-xl p-3 mb-6 flex items-center justify-center border border-gray-100 dark:border-slate-600 shadow-sm">
                <img src="{{ asset('images/partners/ukdw-logo.png') }}" alt="UKDW" class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition duration-500">
            </div>
            <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">UKDW Yogyakarta</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-8 flex-grow">Jl. Dr. Wahidin No.5-25,<br>Yogyakarta</p>
            <a href="https://www.ukdw.ac.id" target="_blank" class="w-full py-3 px-4 bg-blue-50 hover:bg-blue-600 text-blue-700 hover:text-white dark:bg-slate-700/50 dark:hover:bg-blue-600 dark:text-blue-300 dark:hover:text-white rounded-xl text-sm font-bold transition duration-300 flex items-center justify-center gap-2">
                {{ __('Visit Website') }} <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            </a>
        </div>

        <div class="bg-white dark:bg-slate-800 p-6 md:p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-slate-700 flex flex-col items-center text-center hover:shadow-lg transition duration-300 group hover:-translate-y-1">
            <div class="w-20 h-20 bg-white rounded-xl p-3 mb-6 flex items-center justify-center border border-gray-100 dark:border-slate-600 shadow-sm">
                <img src="{{ asset('images/partners/uksw-logo.png') }}" alt="UKSW" class="max-w-full max-h-full object-contain grayscale group-hover:grayscale-0 transition duration-500">
            </div>
            <h3 class="font-bold text-xl text-slate-900 dark:text-white mb-2">UKSW Salatiga</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-8 flex-grow">Jl. Diponegoro No.52-60,<br>Salatiga</p>
            <a href="https://www.uksw.edu" target="_blank" class="w-full py-3 px-4 bg-blue-50 hover:bg-blue-600 text-blue-700 hover:text-white dark:bg-slate-700/50 dark:hover:bg-blue-600 dark:text-blue-300 dark:hover:text-white rounded-xl text-sm font-bold transition duration-300 flex items-center justify-center gap-2">
                {{ __('Visit Website') }} <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            </a>
        </div>

    </div>
</div>
@endsection