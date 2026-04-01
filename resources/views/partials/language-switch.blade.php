@php
    $path = request()->path();
    $segments = explode('/', trim($path, '/'));
    if (isset($segments[0]) && in_array($segments[0], ['en', 'sw'], true)) {
        $enSegments = $segments;
        $enSegments[0] = 'en';
        $swSegments = $segments;
        $swSegments[0] = 'sw';
        $enUrl = url(implode('/', $enSegments));
        $swUrl = url(implode('/', $swSegments));
    } else {
        $enUrl = url('en');
        $swUrl = url('sw');
    }
    $loc = app()->getLocale();
@endphp
<div class="flex items-center gap-2 rounded-lg border border-slate-200/80 bg-white/60 px-1.5 py-1 text-xs font-headline font-bold uppercase tracking-wide dark:border-slate-700 dark:bg-slate-800/60" role="navigation" aria-label="{{ __('common.lang.switch') }}">
    <a href="{{ $enUrl }}" class="rounded px-2 py-0.5 transition-colors {{ $loc === 'en' ? 'bg-primary text-on-primary' : 'text-slate-600 hover:text-primary dark:text-slate-400' }}">EN</a>
    <span class="text-slate-300 dark:text-slate-600" aria-hidden="true">|</span>
    <a href="{{ $swUrl }}" class="rounded px-2 py-0.5 transition-colors {{ $loc === 'sw' ? 'bg-primary text-on-primary' : 'text-slate-600 hover:text-primary dark:text-slate-400' }}">SW</a>
</div>
