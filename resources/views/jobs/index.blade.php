<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ __('common.meta.jobs_index_title') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body selection:bg-secondary-container selection:text-on-secondary-container">
@include('partials.site-header')

<main class="pt-28 pb-20">
    <section class="relative min-h-[505px] flex items-center overflow-hidden mb-20">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" alt="" src="https://images.pexels.com/photos/3184296/pexels-photo-3184296.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=2070"/>
            <div class="absolute inset-0 bg-primary/40 backdrop-saturate-50"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-on-primary pt-4 md:pt-6">
                <h1 class="font-headline text-5xl md:text-7xl font-extrabold leading-[1.1] tracking-tight mb-6">
                    {{ __('jobs.page.hero_title') }}
                </h1>
                <p class="text-lg md:text-xl text-primary-fixed mb-10 max-w-xl font-light leading-relaxed">
                    {{ __('jobs.page.hero_sub') }}
                </p>
                <div class="flex flex-wrap gap-4 pb-6">
                    <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-on-primary text-sm font-semibold">
                        <span class="material-symbols-outlined text-secondary-fixed">verified</span>
                        {{ __('jobs.page.badge_hiring') }}
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-on-primary text-sm font-semibold">
                        <span class="material-symbols-outlined text-secondary-fixed">groups</span>
                        {{ __('jobs.page.badge_team') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6">
        <div class="flex items-end justify-between gap-6 mb-10">
            <div>
                <h2 class="font-headline text-3xl md:text-4xl font-extrabold text-primary mb-2">{{ __('jobs.page.open_positions') }}</h2>
                <p class="text-on-surface-variant">{{ __('jobs.page.open_hint') }}</p>
            </div>
            <div class="hidden md:flex items-center gap-2 text-on-surface-variant text-sm">
                <span class="material-symbols-outlined text-secondary">schedule</span>
                {{ __('jobs.page.updated') }}
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($jobs as $job)
                <a href="{{ route('jobs.show', ['slug' => $job['slug']]) }}" class="group bg-surface-container-lowest border border-outline-variant/20 rounded-xl p-8 shadow-sm hover:bg-surface-container-highest transition-all duration-300">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h3 class="font-headline text-xl font-extrabold text-primary mb-2 group-hover:underline underline-offset-4">
                                {{ $job['title'] }}
                            </h3>
                            <p class="text-on-surface-variant leading-relaxed">{{ $job['summary'] }}</p>
                        </div>
                        <span class="material-symbols-outlined text-secondary">arrow_forward</span>
                    </div>

                    <div class="mt-6 flex flex-wrap gap-3 text-xs font-bold uppercase tracking-wider">
                        <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant">{{ $job['department'] }}</span>
                        <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant">{{ $job['type'] }}</span>
                        <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant">{{ $job['location'] }}</span>
                        <span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container">{{ __('jobs.page.posted') }} {{ $job['posted_at'] }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</main>

@include('partials.site-footer')
@include('partials.whatsapp-float')
</body>
</html>
