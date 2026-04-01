<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ __('common.meta.about_title') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body selection:bg-secondary-container selection:text-on-secondary-container">
@include('partials.site-header', ['active' => 'about'])
<main class="pt-28">
<!-- Hero Section -->
<section class="relative h-[614px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="" class="w-full h-full object-cover grayscale opacity-20" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDMxtrse48DzhRXBL9WBKREGEu2lEW_BgQ_l_z7qvwPZOBNz8Nxp0GCqGiFLErTKQCGR7k-yxztrskdqPx48H3qCOh2EgFX3ilXBtHl6KlJTv5f7ne2AiZkl61LM7O4PgTyBdzNZuPsEOKOqPNTk-1HLb3vfJweqnebME2qCemI6McMRCHWHfwZTnPPlaERr87gTHULOxdw2_K7ta6DmDVeXBAU6ALFf6HDHdbins5oIFglnRbLzCqqPMXHeEuTwJ6KGk3N9ItAOA"/>
<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
<div class="max-w-2xl">
<h1 class="text-5xl md:text-7xl font-headline font-extrabold text-on-primary tracking-tighter leading-[0.9] mb-6">
                        {{ __('about.hero_line1') }} <br/><span class="text-secondary-fixed">{{ __('about.hero_line2') }}</span> {{ __('about.hero_line3') }}
                    </h1>
<p class="text-xl text-primary-fixed leading-relaxed font-light">
                        {{ __('about.hero_sub') }}
                    </p>
</div>
</div>
</section>
<!-- Mission & Vision: Asymmetric Bento Grid -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
<div class="md:col-span-7 bg-surface-container-lowest p-12 rounded-xl flex flex-col justify-center border-l-8 border-primary">
<span class="text-primary font-headline font-bold uppercase tracking-widest text-sm mb-4">{{ __('about.mission_label') }}</span>
<h2 class="text-4xl font-headline font-bold text-on-surface mb-6 leading-tight">{{ __('about.mission_title') }}</h2>
<p class="text-on-surface-variant text-lg leading-relaxed">
                            {{ __('about.mission_body') }}
                        </p>
</div>
<div class="md:col-span-5 relative overflow-hidden rounded-xl min-h-[300px]">
<img alt="" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDmUFM8D2o5047bz5_xwRwLTq8-ozuMen9oYlqum22VPuJxMhZG_SreyFcT87wVqvX6L3f6SvkNCbGIoEqxqfuiPkNoOyyBWUOdynCnDHPj726tEE0gajWwq-WHQMCs9BnAfxOYnPKlhzUAPnFw-fqe8ZRqI591pd5MDoskUoFDW1fO7F3LrTnix7oJvcLx3S2cckpSpSSNcusWEUVJ1BLhTFTP6PcHTXbRKSEJy0oKWpgmlNUDqN84o8STaUs6y6NCLiA_2iXji4"/>
</div>
<div class="md:col-span-5 relative overflow-hidden rounded-xl min-h-[300px]">
<img alt="" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8CFVdu92SEpf4wo735wXMdpuAXqzR-iRVpwftdFFmHhrwOIubYwVkkI-WIp0wfNZsrzcE9LTB7jPT2KoMmtVvn2d_oYLXDd7IBaExIRCEwuWymVO4g_YxBNQ3k05SCCXvhPN9tgQQb0gLRD4FFqZkIUbazGZqVijpahBSwjhI9ntx8vwPfZQBHT2FCZTl590w5ZWasCLQpksPeuG8JYl8AJOWc7zEw1z0haCN8g3tldBBdpOE8qu06HfP_KLerBdcDddmyZwszr8"/>
</div>
<div class="md:col-span-7 bg-primary p-12 rounded-xl flex flex-col justify-center text-on-primary">
<span class="text-secondary-fixed font-headline font-bold uppercase tracking-widest text-sm mb-4">{{ __('about.vision_label') }}</span>
<h2 class="text-4xl font-headline font-bold mb-6 leading-tight">{{ __('about.vision_title') }}</h2>
<p class="text-primary-fixed text-lg leading-relaxed">
                            {{ __('about.vision_body') }}
                        </p>
</div>
</div>
</div>
</section>
<!-- Why Choose Us: Clean List without borders -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-16">
<h2 class="text-4xl md:text-5xl font-headline font-extrabold text-primary mb-4 tracking-tighter">{{ __('about.edge_title') }}</h2>
<p class="text-on-surface-variant max-w-xl mx-auto">{{ __('about.edge_sub') }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="p-8 hover:bg-surface-container-highest transition-all rounded-xl">
<div class="w-16 h-16 bg-secondary-container flex items-center justify-center rounded-lg mb-6">
<span class="material-symbols-outlined text-on-secondary-container text-[32px]">speed</span>
</div>
<h3 class="text-xl font-headline font-bold text-on-surface mb-3">{{ __('about.edge.fast_title') }}</h3>
<p class="text-on-surface-variant leading-relaxed">{{ __('about.edge.fast_body') }}</p>
</div>
<div class="p-8 hover:bg-surface-container-highest transition-all rounded-xl">
<div class="w-16 h-16 bg-primary-container flex items-center justify-center rounded-lg mb-6">
<span class="material-symbols-outlined text-on-primary-container text-[32px]">account_balance_wallet</span>
</div>
<h3 class="text-xl font-headline font-bold text-on-surface mb-3">{{ __('about.edge.rates_title') }}</h3>
<p class="text-on-surface-variant leading-relaxed">{{ __('about.edge.rates_body') }}</p>
</div>
<div class="p-8 hover:bg-surface-container-highest transition-all rounded-xl">
<div class="w-16 h-16 bg-tertiary-container flex items-center justify-center rounded-lg mb-6">
<span class="material-symbols-outlined text-on-tertiary-container text-[32px]">verified_user</span>
</div>
<h3 class="text-xl font-headline font-bold text-on-surface mb-3">{{ __('about.edge.trans_title') }}</h3>
<p class="text-on-surface-variant leading-relaxed">{{ __('about.edge.trans_body') }}</p>
</div>
</div>
</div>
</section>
<!-- Target Clients: Segment Highlight -->
<section class="py-24 bg-surface-container">
<div class="max-w-7xl mx-auto px-6">
<h2 class="text-4xl font-headline font-extrabold text-on-surface mb-12 text-center tracking-tight">{{ __('about.serve_title') }}</h2>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<div class="group relative h-[450px] overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-xl transition-shadow">
<img alt="" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtXMZraxaQBnybAQrG8FyHzfprMeTO_um5MwzvSU6tJN6kvqJdeRaUCrwUucc0Pp-uTAC_R5Cs8l7iOmBW8UAVX4SDUp8i3yNaCfkUIZuNTAR3V53qbHah_6IuwmNZAAbqb_g2u6NDWpj1vPlmQbh0RbRtX8Qt9Ou0dsWQJ7oTqMwB9IFIHEEGhidDgIMocJLhF-Saa5ZqUD8ojYKra6FSreSaLU8C9v7D2HEA3fmnmQE9npwOeqF02M9fdDDnZ3eZ4_cnjzOQ54Y"/>
<div class="absolute inset-0 bg-gradient-to-t from-on-background to-transparent opacity-80"></div>
<div class="absolute bottom-0 p-8">
<h4 class="text-2xl font-headline font-bold text-white mb-2">{{ __('about.serve.sme_title') }}</h4>
<p class="text-white/80 text-sm">{{ __('about.serve.sme_body') }}</p>
</div>
</div>
<div class="group relative h-[450px] overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-xl transition-shadow">
<img alt="" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0Pg9RiY3e9QhEhs7FRZRcbQNCabLytaCY49DCunhS1zaIcswy5TLyBJ4t6xzyqe4vhOekltEEFCiP0S5WB002WJ70atsmwXLv6bnzuyDbIarJnjQ1y0NxI8JfDRalJSIlA_9uwIsRn73tDXSXdthLHWhuUKmob4mHvamdtH1QZFIrsyqUja7oU-taVAeP2X6Zir8-yfmG3aBpS_9GH2TeZajWgmFTBMiqRR6QQ_fftCXaZtk0xeSu-72PhQ3WkLwhyYlFuUeiazI"/>
<div class="absolute inset-0 bg-gradient-to-t from-on-background to-transparent opacity-80"></div>
<div class="absolute bottom-0 p-8">
<h4 class="text-2xl font-headline font-bold text-white mb-2">{{ __('about.serve.mod_title') }}</h4>
<p class="text-white/80 text-sm">{{ __('about.serve.mod_body') }}</p>
</div>
</div>
<div class="group relative h-[450px] overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-xl transition-shadow">
<img alt="" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQcYeiuVYwNQ5ma4FkxkSzXY8urlvxFfkjhtMA-J5Fp5TaUE8Io-wriOQE_El0uP5U3ECkGy0IJ7sjh_ShXLDLasE0ld_KX2v48yWDP13fYI4FBXVCccokypi_jU5ejy8I3KkXnVE5Ibyli-gd9ATiFPyc7moAkwEnNxUhU5Qg1hNf7vGfatcKVE-h79VOpzfktQUaujnJ2NeIBFgOF_-fQC6HNLn9CX7Utic42a9ZesU85YpqUedxupBBkBFa_kQGvcqsKh11opA"/>
<div class="absolute inset-0 bg-gradient-to-t from-on-background to-transparent opacity-80"></div>
<div class="absolute bottom-0 p-8">
<h4 class="text-2xl font-headline font-bold text-white mb-2">{{ __('about.serve.sector_title') }}</h4>
<p class="text-white/80 text-sm">{{ __('about.serve.sector_body') }}</p>
</div>
</div>
</div>
</div>
</section>
<!-- Our Commitment: Large Scale Image & Text -->
<section class="py-24 bg-white">
<div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-16">
<div class="w-full md:w-1/2">
<img alt="" class="rounded-xl shadow-2xl w-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-LXEgWuONHqQ48w2BbUsj7AHsBv1SQG-VtKqs07Vmyio4D6vwMDqh2Oiwh1TK_jtLhk17gzfY6Dhkb9QaEzhK27n6zfXwgvsJos_wBAjJXq8CEWIOEwfMehubPAWFPZxHDtYN_J6GSH6AwvT0C34QhKxPBRsUshpxJOq1DRREmuKiWTv4z3g4p3w_kXwytghgSweeMEq-kHGgrsFshRH7W25kMVLxnev6iXLif8gjR8FpA1tqwyqiNxHmgYfucYqsyRTTO81lkuk"/>
</div>
<div class="w-full md:w-1/2">
<h2 class="text-4xl font-headline font-extrabold text-primary mb-6 leading-tight">{{ __('about.commit_title') }}</h2>
<p class="text-on-surface-variant text-lg leading-relaxed mb-8">
                        {{ __('about.commit_body') }}
                    </p>
<div class="grid grid-cols-2 gap-8 border-t border-outline-variant/20 pt-8">
<div>
<span class="block text-3xl font-headline font-extrabold text-secondary">10k+</span>
<span class="text-xs uppercase tracking-widest font-bold text-on-surface-variant">{{ __('about.stat_biz') }}</span>
</div>
<div>
<span class="block text-3xl font-headline font-extrabold text-secondary">98%</span>
<span class="text-xs uppercase tracking-widest font-bold text-on-surface-variant">{{ __('about.stat_retention') }}</span>
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
