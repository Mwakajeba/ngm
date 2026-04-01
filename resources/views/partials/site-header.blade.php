{{-- Shared public header: @include with ['active' => 'home'|'loan-products'|'about'|'contact'] or omit for no active tab --}}
@php
    $active = $active ?? null;
    $linkBase = 'font-headline font-bold tracking-tight text-sm uppercase ';
    $inactive = $linkBase . 'text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-white transition-colors';
    $activeLink = $linkBase . 'text-secondary dark:text-secondary border-b-2 border-secondary dark:border-secondary pb-1';
@endphp
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm">
    <div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto w-full gap-6 md:gap-8">
        <a href="{{ route('home') }}" class="flex items-center shrink-0 min-w-0">
            <img src="{{ asset('logo.png') }}" alt="{{ __('common.brand') }}" class="h-16 md:h-20 w-auto max-w-[340px] object-contain object-left"/>
        </a>
        <div class="hidden md:flex items-center space-x-8 lg:space-x-10">
            <a class="{{ $active === 'home' ? $activeLink : $inactive }}" href="{{ route('home') }}">{{ __('common.nav.home') }}</a>
            <a class="{{ $active === 'loan-products' ? $activeLink : $inactive }}" href="{{ route('loan-products') }}">{{ __('common.nav.loan_products') }}</a>
            <a class="{{ $active === 'about' ? $activeLink : $inactive }}" href="{{ route('about') }}">{{ __('common.nav.about') }}</a>
            <a class="{{ $active === 'contact' ? $activeLink : $inactive }}" href="{{ route('contact') }}">{{ __('common.nav.contact') }}</a>
        </div>
        <button type="button" class="shrink-0 bg-primary text-on-primary px-6 py-2.5 rounded-lg font-headline font-bold text-sm uppercase scale-95 active:scale-90 transition-transform hover:bg-primary-container">
            {{ __('common.nav.apply_now') }}
        </button>
    </div>
</nav>
