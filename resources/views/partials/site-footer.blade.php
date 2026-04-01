{{-- Shared public footer — logo matches site-header (h-16 md:h-20 max-w-[340px]) --}}
<footer class="w-full border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 px-8 py-16 max-w-7xl mx-auto">
        <div class="col-span-1 md:col-span-1">
            <a href="{{ route('home') }}" class="inline-block mb-4">
                <img src="{{ asset('logo.png') }}" alt="{{ __('common.brand') }}" class="h-16 md:h-20 w-auto max-w-[340px] object-contain object-left"/>
            </a>
            <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed font-body">
                {{ __('common.footer.tagline') }}
            </p>
        </div>
        <div>
            <h4 class="font-headline font-bold text-primary mb-6 text-sm uppercase tracking-widest">{{ __('common.footer.solutions') }}</h4>
            <ul class="space-y-4">
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="{{ route('loan-products') }}">{{ __('common.footer.business_growth') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="#">{{ __('common.footer.emergency_support') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="#">{{ __('common.footer.salary_advances') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="#">{{ __('common.footer.asset_financing') }}</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-headline font-bold text-primary mb-6 text-sm uppercase tracking-widest">{{ __('common.footer.company') }}</h4>
            <ul class="space-y-4">
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="{{ route('about') }}">{{ __('common.footer.about_us') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="{{ route('jobs.index') }}">{{ __('common.footer.job_vacancy') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="{{ route('admin.login') }}">{{ __('common.footer.admin_login') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="#">{{ __('common.footer.financial_disclosures') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="#">{{ __('common.footer.microfinance_act') }}</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-headline font-bold text-primary mb-6 text-sm uppercase tracking-widest">{{ __('common.footer.support') }}</h4>
            <ul class="space-y-4">
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="#">{{ __('common.footer.privacy') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="#">{{ __('common.footer.terms') }}</a></li>
                <li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-secondary dark:hover:text-secondary underline-offset-4 transition-all duration-200" href="{{ route('contact') }}">{{ __('common.footer.contact_us') }}</a></li>
            </ul>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-8 py-8 border-t border-slate-200/50 dark:border-slate-800/50 flex flex-col sm:flex-row flex-wrap justify-between items-center gap-6">
        <p class="text-slate-500 dark:text-slate-400 text-xs font-body text-center sm:text-left">{{ __('common.footer.rights', ['year' => date('Y')]) }}</p>
        @php
            $socialIg = config('ngm.social_instagram_url');
            $socialX = config('ngm.social_x_url');
            $socialFb = config('ngm.social_facebook_url');
            $socialExternal = fn ($url) => is_string($url) && str_starts_with($url, 'http');
        @endphp
        <div class="flex items-center gap-6 flex-wrap justify-center sm:justify-end">
            @include('partials.language-switch')
            <a
                href="{{ $socialIg }}"
                class="text-slate-400 hover:text-primary transition-colors"
                @if($socialExternal($socialIg)) target="_blank" rel="noopener noreferrer" @endif
                aria-label="{{ __('common.footer.aria_instagram') }}"
            >
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a
                href="{{ $socialX }}"
                class="text-slate-400 hover:text-primary transition-colors"
                @if($socialExternal($socialX)) target="_blank" rel="noopener noreferrer" @endif
                aria-label="{{ __('common.footer.aria_x') }}"
            >
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
            </a>
            <a
                href="{{ $socialFb }}"
                class="text-slate-400 hover:text-primary transition-colors"
                @if($socialExternal($socialFb)) target="_blank" rel="noopener noreferrer" @endif
                aria-label="{{ __('common.footer.aria_facebook') }}"
            >
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>
