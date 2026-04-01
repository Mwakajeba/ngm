<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ __('common.meta.contact_title') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body selection:bg-secondary-container selection:text-on-secondary-container">
@include('partials.site-header', ['active' => 'contact'])
<main class="pt-28 pb-8">
<!-- Hero Section: Editorial Style -->
<section class="relative h-[400px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA02jGDV0QduPQ6Ff19sW09ND6TaIWIEE-HY5RY2CwiymXkUVIuoyTlKPLMXR8xGf5s26fGG2ZHQD0kPuzZ3jp5d6WSPahvtzCTQQEQEqWpQd_2vY3bwOzKs3XTothDt4xrtHy76zgQxruGgrqctwa7r9ruEdHHYpJnDP9D8ntbMIsf1-xXJ3bruMjFPOLalGCw-jvZ56KrpyqJtQkYnPDNk0EqLm3hxAH0drC2NqO3YU2wGO8NwTtB_UqJNhLDr8rzD6MavqgUUN8"/>
<div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary-container/80"></div>
</div>
<div class="relative z-10 text-center px-6 max-w-4xl">
<h1 class="font-headline text-5xl md:text-6xl font-extrabold text-on-primary tracking-tighter mb-4">
                    {{ __('contact.hero_title') }}
                </h1>
<p class="font-body text-xl text-on-primary/90 max-w-2xl mx-auto">
                    {{ __('contact.hero_sub') }}
                </p>
</div>
</section>
<!-- Main Content Grid: Tonal Separation -->
<section class="bg-surface py-20 px-6">
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Contact Information & Form -->
<div class="lg:col-span-7 space-y-12">
<div class="bg-surface-container-lowest p-10 rounded-xl shadow-sm">
<h2 class="font-headline text-3xl font-bold text-primary mb-8 tracking-tight">{{ __('contact.form_title') }}</h2>
<form class="space-y-6" action="#" method="get">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-name">{{ __('contact.label_name') }}</label>
<input id="contact-name" name="name" autocomplete="name" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="{{ __('contact.ph_name') }}" type="text"/>
</div>
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-email">{{ __('contact.label_email') }}</label>
<input id="contact-email" name="email" autocomplete="email" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="{{ __('contact.ph_email') }}" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-phone">{{ __('contact.label_phone') }}</label>
<input id="contact-phone" name="phone" autocomplete="tel" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="{{ __('contact.ph_phone') }}" type="tel"/>
</div>
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-message">{{ __('contact.label_message') }}</label>
<textarea id="contact-message" name="message" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="{{ __('contact.ph_message') }}" rows="4"></textarea>
</div>
<button type="button" class="w-full bg-primary text-on-primary py-4 rounded-lg font-headline font-bold text-lg hover:bg-primary-container transition-all">
                                {{ __('contact.send') }}
                            </button>
</form>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="material-symbols-outlined text-secondary text-3xl mb-3">call</span>
<h4 class="font-headline font-bold text-on-surface">{{ __('contact.call_title') }}</h4>
<p class="text-on-surface-variant text-sm mt-1">+255 22 211 0000</p>
</div>
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="material-symbols-outlined text-secondary text-3xl mb-3">mail</span>
<h4 class="font-headline font-bold text-on-surface">{{ __('contact.email_title') }}</h4>
<p class="text-on-surface-variant text-sm mt-1">info@nextgenmicro.co.tz</p>
</div>
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="material-symbols-outlined text-secondary text-3xl mb-3">location_on</span>
<h4 class="font-headline font-bold text-on-surface">{{ __('contact.visit_title') }}</h4>
<p class="text-on-surface-variant text-sm mt-1">{{ __('contact.visit_body') }}</p>
</div>
</div>
</div>
<!-- Application Sidebar: Bento Style -->
<div class="lg:col-span-5 space-y-8">
<div class="bg-primary p-8 rounded-xl text-on-primary relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-9xl">trending_up</span>
</div>
<h2 class="font-headline text-3xl font-extrabold mb-4 relative z-10">{{ __('contact.sidebar_title') }}</h2>
<p class="text-on-primary/80 mb-8 relative z-10 leading-relaxed">
                            {{ __('contact.sidebar_body') }}
                        </p>
<button type="button" class="w-full bg-secondary text-on-secondary py-4 rounded-lg font-headline font-bold text-lg hover:opacity-90 transition-all flex items-center justify-center gap-2 relative z-10">
                            {{ __('contact.sidebar_btn') }} <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<div class="bg-surface-container-high p-8 rounded-xl">
<h3 class="font-headline text-xl font-bold text-primary mb-6">{{ __('contact.expect_title') }}</h3>
<div class="space-y-6">
<div class="flex gap-4">
<div class="bg-primary-fixed w-8 h-8 rounded-full flex items-center justify-center shrink-0">
<span class="text-on-primary-fixed font-bold">1</span>
</div>
<div>
<h4 class="font-headline font-bold text-on-surface">{{ __('contact.step1_title') }}</h4>
<p class="text-sm text-on-surface-variant">{{ __('contact.step1_body') }}</p>
</div>
</div>
<div class="flex gap-4">
<div class="bg-primary-fixed w-8 h-8 rounded-full flex items-center justify-center shrink-0">
<span class="text-on-primary-fixed font-bold">2</span>
</div>
<div>
<h4 class="font-headline font-bold text-on-surface">{{ __('contact.step2_title') }}</h4>
<p class="text-sm text-on-surface-variant">{{ __('contact.step2_body') }}</p>
</div>
</div>
<div class="flex gap-4">
<div class="bg-primary-fixed w-8 h-8 rounded-full flex items-center justify-center shrink-0">
<span class="text-on-primary-fixed font-bold">3</span>
</div>
<div>
<h4 class="font-headline font-bold text-on-surface">{{ __('contact.step3_title') }}</h4>
<p class="text-sm text-on-surface-variant">{{ __('contact.step3_body') }}</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Map & FAQ Section -->
<section class="bg-surface-container-low py-20 px-6">
<div class="max-w-7xl mx-auto space-y-16">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div>
<h2 class="font-headline text-4xl font-extrabold text-primary mb-6 tracking-tight">{{ __('contact.map_title') }}</h2>
<p class="text-lg text-on-surface-variant leading-relaxed mb-8">
                            {{ __('contact.map_body') }}
                        </p>
<div class="grid grid-cols-2 gap-4">
<div class="bg-surface p-4 rounded-lg shadow-sm">
<div class="text-2xl font-extrabold text-secondary">24/7</div>
<div class="text-xs font-bold text-on-surface-variant uppercase">{{ __('contact.stat_support') }}</div>
</div>
<div class="bg-surface p-4 rounded-lg shadow-sm">
<div class="text-2xl font-extrabold text-secondary">48hr</div>
<div class="text-xs font-bold text-on-surface-variant uppercase">{{ __('contact.stat_decision') }}</div>
</div>
</div>
</div>
<div class="rounded-xl overflow-hidden h-96 shadow-lg bg-surface-container-highest">
<img class="w-full h-full object-cover grayscale opacity-80" alt="" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvEcTy1QSXMng6dPI1UA3AtatIU0wGCotFQhIAQXyVC8LKYwSBz1I2ilRBVm4pNuA1HzYQIN48jjdjvLu0dkhvUlZZ35CVPkgnWqjxEtlqEDn7dUBQVVDOwrdU8OqSQZK6lgsfpS-44us__6lgtvs8KgkvqY5JKOGycSgjCtjrg2ofJxmp1SfxsvGH0bpW_RQceflsW_fbN2QRD0xYZuxKdt8q27m8TYNS8TKKRbg2FzifkLBygU4XOXOPUqC-Bye2hADR-HTzbug"/>
</div>
</div>
<div class="bg-surface-container-lowest p-10 rounded-xl">
<h3 class="font-headline text-3xl font-bold text-on-surface mb-8 text-center">{{ __('contact.faq_title') }}</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
<div>
<h4 class="font-headline font-bold text-primary mb-2">{{ __('contact.faq.q1') }}</h4>
<p class="text-on-surface-variant">{{ __('contact.faq.a1') }}</p>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-2">{{ __('contact.faq.q2') }}</h4>
<p class="text-on-surface-variant">{{ __('contact.faq.a2') }}</p>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-2">{{ __('contact.faq.q3') }}</h4>
<p class="text-on-surface-variant">{{ __('contact.faq.a3') }}</p>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-2">{{ __('contact.faq.q4') }}</h4>
<p class="text-on-surface-variant">{{ __('contact.faq.a4') }}</p>
</div>
</div>
</div>
</div>
</section>
</main>
@include('partials.site-footer')
@include('partials.whatsapp-float')
</body>
</html>
