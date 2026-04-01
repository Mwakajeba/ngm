<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $job['title'] }} | {{ __('common.brand') }}</title>

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
@include('partials.site-header')

<main class="pt-28 pb-20">
    <section class="max-w-7xl mx-auto px-6 mb-12">
        <a href="{{ route('jobs.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-secondary hover:underline underline-offset-4">
            <span class="material-symbols-outlined text-base">arrow_back</span>
            {{ __('jobs.page.back') }}
        </a>

        <div class="mt-8 bg-surface-container-lowest border border-outline-variant/20 rounded-2xl p-10 shadow-sm">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-8">
                <div class="min-w-0">
                    <h1 class="font-headline text-4xl md:text-5xl font-extrabold text-primary tracking-tight">
                        {{ $job['title'] }}
                    </h1>
                    <p class="mt-4 text-on-surface-variant text-lg leading-relaxed max-w-3xl">
                        {{ $job['summary'] }}
                    </p>

                    <div class="mt-6 flex flex-wrap gap-3 text-xs font-bold uppercase tracking-wider">
                        <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant">{{ $job['department'] }}</span>
                        <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant">{{ $job['type'] }}</span>
                        <span class="px-3 py-1 rounded-full bg-surface-container-high text-on-surface-variant">{{ $job['location'] }}</span>
                        <span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container">{{ __('jobs.page.posted') }} {{ $job['posted_at'] }}</span>
                    </div>
                </div>

                <div class="w-full lg:w-[420px] shrink-0">
                    <div class="bg-primary rounded-2xl p-8 text-on-primary relative overflow-hidden">
                        <div class="absolute -top-6 -right-6 opacity-10">
                            <span class="material-symbols-outlined text-[120px]">work</span>
                        </div>
                        <h2 class="font-headline text-2xl font-extrabold mb-3 relative z-10">{{ __('jobs.page.apply_title') }}</h2>
                        <p class="text-primary-fixed leading-relaxed mb-6 relative z-10">{{ __('jobs.page.apply_sub') }}</p>

                        @if (session('application_submitted'))
                            <div class="relative z-10 mb-6 rounded-xl bg-white/10 border border-white/15 p-4">
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                                    <div>
                                        <p class="font-bold">{{ __('jobs.page.success_title') }}</p>
                                        <p class="text-sm text-primary-fixed mt-1">{{ __('jobs.page.success_body') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form class="relative z-10 space-y-4" method="post" action="{{ route('jobs.apply', ['slug' => $job['slug']]) }}" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <label class="block text-sm font-semibold mb-2" for="full_name">{{ __('jobs.page.full_name') }}</label>
                                <input id="full_name" name="full_name" value="{{ old('full_name') }}" class="w-full bg-white/10 border border-white/15 rounded-lg px-4 py-3 placeholder:text-white/60 focus:ring-0 focus:border-white/30" placeholder="{{ __('jobs.page.full_name_ph') }}" type="text" required/>
                                @error('full_name')
                                    <p class="mt-2 text-sm text-secondary-fixed">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold mb-2" for="email">{{ __('jobs.page.email') }}</label>
                                <input id="email" name="email" value="{{ old('email') }}" class="w-full bg-white/10 border border-white/15 rounded-lg px-4 py-3 placeholder:text-white/60 focus:ring-0 focus:border-white/30" placeholder="you@example.com" type="email" required/>
                                @error('email')
                                    <p class="mt-2 text-sm text-secondary-fixed">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold mb-2" for="phone">{{ __('jobs.page.phone') }}</label>
                                <input id="phone" name="phone" value="{{ old('phone') }}" class="w-full bg-white/10 border border-white/15 rounded-lg px-4 py-3 placeholder:text-white/60 focus:ring-0 focus:border-white/30" placeholder="+255..." type="text"/>
                                @error('phone')
                                    <p class="mt-2 text-sm text-secondary-fixed">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold mb-2" for="cv">{{ __('jobs.page.cv') }}</label>
                                <input id="cv" name="cv" class="w-full bg-white/10 border border-white/15 rounded-lg px-4 py-3 file:mr-3 file:rounded-lg file:border-0 file:bg-secondary file:text-on-secondary file:px-4 file:py-2 file:font-bold" type="file" accept="application/pdf" required/>
                                @error('cv')
                                    <p class="mt-2 text-sm text-secondary-fixed">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="w-full bg-secondary text-on-secondary py-4 rounded-lg font-headline font-bold text-lg hover:opacity-90 transition-all flex items-center justify-center gap-2">
                                {{ __('jobs.page.submit') }} <span class="material-symbols-outlined">arrow_forward</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div>
                    <h3 class="font-headline text-2xl font-extrabold text-primary mb-4">{{ __('jobs.page.role_overview') }}</h3>
                    <ul class="space-y-3">
                        @foreach ($job['description'] as $item)
                            <li class="flex items-start gap-3 text-on-surface-variant">
                                <span class="material-symbols-outlined text-secondary mt-0.5">check_circle</span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="font-headline text-2xl font-extrabold text-primary mb-4">{{ __('jobs.page.requirements') }}</h3>
                    <ul class="space-y-3">
                        @foreach ($job['requirements'] as $item)
                            <li class="flex items-start gap-3 text-on-surface-variant">
                                <span class="material-symbols-outlined text-secondary mt-0.5">task_alt</span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.site-footer')
@include('partials.whatsapp-float')
</body>
</html>
