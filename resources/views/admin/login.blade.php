<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>NextGeneration Admin - Secure Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-mesh {
            background-color: #f8f9fa;
            background-image:
                radial-gradient(at 0% 0%, rgba(13, 71, 161, 0.06) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(0, 107, 95, 0.06) 0px, transparent 50%),
                radial-gradient(at 50% 100%, rgba(0, 49, 120, 0.05) 0px, transparent 55%);
        }
        .editorial-shadow {
            box-shadow: 0 32px 64px -12px rgba(25, 28, 29, 0.08);
        }
    </style>
</head>
<body class="font-body bg-mesh text-on-surface min-h-screen flex items-center justify-center p-6">
<main class="w-full max-w-md">
    <div class="flex flex-col items-center mb-12">
        <div class="w-20 h-20 rounded-xl flex items-center justify-center mb-6 editorial-shadow bg-surface-container-lowest p-2 border border-outline-variant/20">
            <img src="{{ asset('logo.jpg') }}" alt="NextGeneration Microfinance" class="max-w-full max-h-full w-auto h-auto object-contain"/>
        </div>
        <h1 class="font-headline text-3xl font-extrabold tracking-tight text-primary">NextGeneration Admin</h1>
        <p class="text-on-surface-variant font-medium mt-2">Microfinance Management Portal</p>
    </div>

    <div class="bg-surface-container-lowest rounded-xl p-10 editorial-shadow border border-outline-variant/20">
        <div class="mb-8">
            <h2 class="font-headline text-xl font-bold text-on-surface">Secure Sign In</h2>
            <p class="text-sm text-on-surface-variant mt-1">Enter your credentials to access the portal</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-xl bg-error-container text-on-error-container p-4">
                <p class="font-bold">Login failed</p>
                <ul class="mt-2 text-sm list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" class="space-y-6" method="POST">
            @csrf

            <div class="space-y-2">
                <label class="text-sm font-semibold text-on-surface-variant block ml-1" for="login">Phone/Email</label>
                <div class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-outline text-xl">alternate_email</span>
                    </div>
                    <input
                        class="block w-full pl-11 pr-4 py-3 bg-surface-container-high border-none rounded-lg text-on-surface placeholder:text-outline/60 focus:ring-0 focus:bg-surface-container-highest transition-all duration-200"
                        id="login"
                        name="login"
                        value="{{ old('login') }}"
                        placeholder="jmwakajeba@ngml.co.tz or 0655577803"
                        type="text"
                        required
                    />
                    <div class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-focus-within:scale-x-100 transition-transform duration-300"></div>
                </div>
            </div>

            <div class="space-y-2">
                <div class="flex justify-between items-center ml-1">
                    <label class="text-sm font-semibold text-on-surface-variant block" for="password">Password</label>
                    <span class="text-xs font-bold text-outline">Admin Access</span>
                </div>
                <div class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-outline text-xl">lock</span>
                    </div>
                    <input
                        class="block w-full pl-11 pr-4 py-3 bg-surface-container-high border-none rounded-lg text-on-surface placeholder:text-outline/60 focus:ring-0 focus:bg-surface-container-highest transition-all duration-200"
                        id="password"
                        name="password"
                        placeholder="••••••••••••"
                        type="password"
                        required
                    />
                    <div class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-focus-within:scale-x-100 transition-transform duration-300"></div>
                </div>
            </div>

            <div class="flex items-center space-x-3 ml-1">
                <input class="w-5 h-5 rounded border-none bg-surface-container-high text-secondary focus:ring-0 focus:ring-offset-0" id="remember" name="remember" value="1" type="checkbox"/>
                <label class="text-sm text-on-surface-variant font-medium cursor-pointer" for="remember">Stay signed in</label>
            </div>

            <button class="w-full py-4 bg-gradient-to-r from-primary to-primary-container text-white font-bold rounded-lg editorial-shadow hover:opacity-95 active:scale-[0.98] transition-all duration-200 flex items-center justify-center gap-2" type="submit">
                <span>Sign In</span>
                <span class="material-symbols-outlined text-lg">arrow_forward</span>
            </button>
        </form>
    </div>

    <footer class="mt-12 text-center">
        <div class="flex items-center justify-center gap-6 mb-4">
            <div class="flex items-center gap-2 text-on-surface-variant/60 text-xs font-semibold tracking-wider uppercase">
                <span class="material-symbols-outlined text-sm">verified_user</span>
                <span>Bank-Grade Encryption</span>
            </div>
            <div class="flex items-center gap-2 text-on-surface-variant/60 text-xs font-semibold tracking-wider uppercase">
                <span class="material-symbols-outlined text-sm">support_agent</span>
                <span>Admin Support</span>
            </div>
        </div>
        <p class="text-xs text-outline/60">© {{ date('Y') }} NextGeneration Microfinance. All rights reserved.</p>
    </footer>
</main>

<div class="fixed top-20 -right-20 w-96 h-96 bg-secondary-container/20 rounded-full blur-3xl -z-10"></div>
<div class="fixed -bottom-20 -left-20 w-96 h-96 bg-primary-container/10 rounded-full blur-3xl -z-10"></div>
</body>
</html>

