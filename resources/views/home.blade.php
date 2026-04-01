<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ __('common.meta.home_title') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .hero-typewriter-caret {
            display: inline-block;
            width: 3px;
            height: 0.85em;
            margin-left: 4px;
            vertical-align: -0.05em;
            background: currentColor;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body selection:bg-secondary-container selection:text-on-secondary-container">
@include('partials.site-header', ['active' => 'home'])
<main class="pt-28">
<!-- Hero Section -->
<section class="relative min-h-[870px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" alt="" src="{{ asset('home1.png') }}"/>
<div class="absolute inset-0 bg-primary/40 backdrop-saturate-50"></div>
<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="text-on-primary">
<h1 class="font-headline text-5xl md:text-7xl font-extrabold leading-[1.1] tracking-tight mb-6 min-h-[9rem] sm:min-h-[10rem] md:min-h-[12rem] lg:min-h-[8.5rem]" aria-live="polite">
                        <span id="hero-typewriter" class="block min-h-[3.5rem] md:min-h-[4.5rem]"></span><span class="hero-typewriter-caret" aria-hidden="true"></span>
                    </h1>
<p class="text-lg md:text-xl text-primary-fixed mb-10 max-w-xl font-light leading-relaxed">
                        {{ __('home.hero_sub') }}
                    </p>
<div class="flex flex-col sm:flex-row gap-4">
<button type="button" class="bg-secondary text-on-secondary px-8 py-4 rounded-lg font-headline font-bold text-lg hover:bg-on-secondary-container transition-all shadow-lg">
                            {{ __('home.explore_loans') }}
                        </button>
<button type="button" class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-4 rounded-lg font-headline font-bold text-lg hover:bg-white/20 transition-all">
                            {{ __('home.how_it_works') }}
                        </button>
</div>
</div>
</div>
</section>
<!-- Trust Indicators - Bento Style -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20 group hover:bg-surface-container-highest transition-all duration-300">
<div class="w-14 h-14 bg-secondary-container text-on-secondary-container rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl">bolt</span>
</div>
<h3 class="font-headline text-xl font-bold text-primary mb-3">{{ __('home.trust.fast_title') }}</h3>
<p class="text-on-surface-variant leading-relaxed">{{ __('home.trust.fast_body') }}</p>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20 group hover:bg-surface-container-highest transition-all duration-300">
<div class="w-14 h-14 bg-primary-fixed text-on-primary-fixed rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl">account_balance_wallet</span>
</div>
<h3 class="font-headline text-xl font-bold text-primary mb-3">{{ __('home.trust.flex_title') }}</h3>
<p class="text-on-surface-variant leading-relaxed">{{ __('home.trust.flex_body') }}</p>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20 group hover:bg-surface-container-highest transition-all duration-300">
<div class="w-14 h-14 bg-tertiary-fixed text-on-tertiary-fixed rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl">trending_down</span>
</div>
<h3 class="font-headline text-xl font-bold text-primary mb-3">{{ __('home.trust.afford_title') }}</h3>
<p class="text-on-surface-variant leading-relaxed">{{ __('home.trust.afford_body') }}</p>
</div>
</div>
</div>
</section>
<!-- Who We Are - Asymmetric Layout -->
<section class="py-24 bg-surface-container-low overflow-hidden">
<div class="max-w-7xl mx-auto px-6">
<div class="flex flex-col lg:flex-row items-center gap-16">
<div class="w-full lg:w-1/2 relative">
<div class="relative z-10 rounded-xl overflow-hidden shadow-2xl">
<img class="w-full aspect-[4/3] object-cover" alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBEU02zSwIMjxjyIX_Fi9pbV5YOsm5O35O6yppMMDqTJVKMu6pxgU7Ol8qUL4Gp7Dsxuuybgq5-fVteTMxM8wGm-yZNoKfVs_KBaGErIdTAsZEBelMSPgWDghiKIGzwHlq4_iN28W_2Bc59s19n6pUeDBgayedrJd-oAKVU4aL6LqYX66DNJVOpQQFWEUyqe4T78n3ifNvoLarKb88KMwlniFWkvQioDbjF6lWVoJeRI3d18hT2RQiMBIoh2K1SijEq0X3JzATsP4"/>
</div>
<div class="absolute -bottom-8 -right-8 w-64 h-64 bg-secondary/10 rounded-full blur-3xl -z-10"></div>
<div class="absolute -top-12 -left-12 px-6 py-4 bg-white shadow-xl rounded-lg z-20 hidden md:block">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary text-4xl">verified</span>
<div>
<p class="font-headline font-bold text-primary">{{ __('home.verified_title') }}</p>
<p class="text-xs text-on-surface-variant">{{ __('home.verified_sub') }}</p>
</div>
</div>
</div>
</div>
<div class="w-full lg:w-1/2">
<span class="text-secondary font-headline font-bold tracking-widest uppercase text-sm mb-4 block">{{ __('home.who.badge') }}</span>
<h2 class="font-headline text-4xl md:text-5xl font-extrabold text-primary leading-tight mb-8">
                            {{ __('home.who.title') }}
                        </h2>
<p class="text-on-surface-variant text-lg leading-relaxed mb-6">
                            {{ __('home.who.p1') }}
                        </p>
<p class="text-on-surface-variant text-lg leading-relaxed mb-10">
                            {{ __('home.who.p2') }}
                        </p>
<div class="grid grid-cols-2 gap-8">
<div>
<h4 class="font-headline text-3xl font-extrabold text-secondary">10k+</h4>
<p class="text-sm text-on-surface-variant">{{ __('home.who.clients') }}</p>
</div>
<div>
<h4 class="font-headline text-3xl font-extrabold text-secondary">98%</h4>
<p class="text-sm text-on-surface-variant">{{ __('home.who.success') }}</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Loan Products - Grid with Editorial Typography -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-16">
<h2 class="font-headline text-4xl md:text-5xl font-extrabold text-primary mb-4">{{ __('home.products.section_title') }}</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto">{{ __('home.products.section_sub') }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Business Loan -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-primary mb-6">storefront</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">{{ __('home.products.business.title') }}</h3>
<p class="text-on-surface-variant text-sm mb-8">{{ __('home.products.business.body') }}</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                {{ __('home.products.details') }} <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Emergency Loan -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-tertiary mb-6">emergency</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">{{ __('home.products.emergency.title') }}</h3>
<p class="text-on-surface-variant text-sm mb-8">{{ __('home.products.emergency.body') }}</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                {{ __('home.products.details') }} <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Public Sector -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-secondary mb-6">account_balance</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">{{ __('home.products.public.title') }}</h3>
<p class="text-on-surface-variant text-sm mb-8">{{ __('home.products.public.body') }}</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                {{ __('home.products.details') }} <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Private Sector -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-outline mb-6">work</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">{{ __('home.products.private.title') }}</h3>
<p class="text-on-surface-variant text-sm mb-8">{{ __('home.products.private.body') }}</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                {{ __('home.products.details') }} <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section - Gradient Glassmorphism -->
<section class="py-24">
<div class="max-w-7xl mx-auto px-6">
<div class="relative hero-gradient rounded-3xl p-12 md:p-20 overflow-hidden shadow-2xl text-center">
<div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
<div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-secondary/20 rounded-full blur-3xl"></div>
<div class="relative z-10">
<h2 class="font-headline text-4xl md:text-5xl font-extrabold text-white mb-8 leading-tight">{{ __('home.cta.title') }}</h2>
<p class="text-primary-fixed text-xl mb-12 max-w-2xl mx-auto">{{ __('home.cta.body') }}</p>
<div class="flex flex-col sm:flex-row justify-center gap-6">
<button type="button" class="bg-white text-primary px-10 py-4 rounded-lg font-headline font-bold text-lg hover:bg-surface-container-highest transition-all shadow-xl">
                                {{ __('home.cta.apply') }}
                            </button>
<button type="button" class="border-2 border-white/30 text-white px-10 py-4 rounded-lg font-headline font-bold text-lg hover:bg-white/10 transition-all">
                                {{ __('home.cta.contact_agent') }}
                            </button>
</div>
</div>
</div>
</div>
</section>
</main>
@include('partials.site-footer')
<script>
(function () {
    var el = document.getElementById('hero-typewriter');
    if (!el) return;
    var phrases = @json(__('home.typewriter'));
    var i = 0;
    var ch = 0;
    var deleting = false;
    var typeMs = 92;
    var deleteMs = 58;
    var pauseEnd = 3800;
    var pauseBetween = 700;

    function step() {
        var full = phrases[i];
        if (!deleting) {
            ch++;
            el.textContent = full.slice(0, ch);
            if (ch >= full.length) {
                deleting = true;
                setTimeout(step, pauseEnd);
                return;
            }
            setTimeout(step, typeMs);
            return;
        }
        ch--;
        el.textContent = full.slice(0, Math.max(0, ch));
        if (ch <= 0) {
            deleting = false;
            i = (i + 1) % phrases.length;
            setTimeout(step, pauseBetween);
            return;
        }
        setTimeout(step, deleteMs);
    }

    setTimeout(step, 600);
})();
</script>
@include('partials.whatsapp-float')
</body>
</html>
