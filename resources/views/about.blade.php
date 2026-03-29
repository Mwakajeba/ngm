<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>About Us | NextGeneration Microfinance</title>

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
<!-- TopNavBar (same as home) -->
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto w-full">
<div class="text-xl font-extrabold tracking-tighter text-blue-900 dark:text-white font-headline">
                NextGeneration Microfinance
            </div>
<div class="hidden md:flex items-center space-x-8">
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ url('/') }}">Home</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('loan-products') }}">Loan Products</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-blue-700 dark:text-blue-400 border-b-2 border-blue-700 dark:border-blue-400 pb-1" href="{{ route('about') }}">About Us</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('contact') }}">Contact</a>
</div>
<button type="button" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-headline font-bold text-sm uppercase scale-95 active:scale-90 transition-transform hover:bg-primary-container">
                Apply Now
            </button>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative h-[614px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Modern high-rise office building in Dar es Salaam with glass reflection under a clear blue sky at midday" class="w-full h-full object-cover grayscale opacity-20" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDMxtrse48DzhRXBL9WBKREGEu2lEW_BgQ_l_z7qvwPZOBNz8Nxp0GCqGiFLErTKQCGR7k-yxztrskdqPx48H3qCOh2EgFX3ilXBtHl6KlJTv5f7ne2AiZkl61LM7O4PgTyBdzNZuPsEOKOqPNTk-1HLb3vfJweqnebME2qCemI6McMRCHWHfwZTnPPlaERr87gTHULOxdw2_K7ta6DmDVeXBAU6ALFf6HDHdbins5oIFglnRbLzCqqPMXHeEuTwJ6KGk3N9ItAOA"/>
<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/90 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
<div class="max-w-2xl">
<h1 class="text-5xl md:text-7xl font-headline font-extrabold text-on-primary tracking-tighter leading-[0.9] mb-6">
                        Empowering <br/><span class="text-secondary-fixed">Tanzanian</span> Ambition.
                    </h1>
<p class="text-xl text-primary-fixed leading-relaxed font-light">
                        NextGeneration Microfinance Ltd is more than a lender. We are the architectural anchor for the country's rising entrepreneurial class.
                    </p>
</div>
</div>
</section>
<!-- Mission & Vision: Asymmetric Bento Grid -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
<div class="md:col-span-7 bg-surface-container-lowest p-12 rounded-xl flex flex-col justify-center border-l-8 border-primary">
<span class="text-primary font-headline font-bold uppercase tracking-widest text-sm mb-4">Our Mission</span>
<h2 class="text-4xl font-headline font-bold text-on-surface mb-6 leading-tight">Driving Sustainable Growth Through Trust.</h2>
<p class="text-on-surface-variant text-lg leading-relaxed">
                            To provide accessible, ethical, and innovative financial solutions that catalyze the growth of Tanzanian businesses, fostering a culture of financial independence and long-term prosperity for all our clients.
                        </p>
</div>
<div class="md:col-span-5 relative overflow-hidden rounded-xl min-h-[300px]">
<img alt="Two Tanzanian professionals in formal attire shaking hands firmly in a sun-drenched modern glass boardroom" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDmUFM8D2o5047bz5_xwRwLTq8-ozuMen9oYlqum22VPuJxMhZG_SreyFcT87wVqvX6L3f6SvkNCbGIoEqxqfuiPkNoOyyBWUOdynCnDHPj726tEE0gajWwq-WHQMCs9BnAfxOYnPKlhzUAPnFw-fqe8ZRqI591pd5MDoskUoFDW1fO7F3LrTnix7oJvcLx3S2cckpSpSSNcusWEUVJ1BLhTFTP6PcHTXbRKSEJy0oKWpgmlNUDqN84o8STaUs6y6NCLiA_2iXji4"/>
</div>
<div class="md:col-span-5 relative overflow-hidden rounded-xl min-h-[300px]">
<img alt="Team of diverse African entrepreneurs working around a large wooden table with laptops and financial charts in a bright office" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8CFVdu92SEpf4wo735wXMdpuAXqzR-iRVpwftdFFmHhrwOIubYwVkkI-WIp0wfNZsrzcE9LTB7jPT2KoMmtVvn2d_oYLXDd7IBaExIRCEwuWymVO4g_YxBNQ3k05SCCXvhPN9tgQQb0gLRD4FFqZkIUbazGZqVijpahBSwjhI9ntx8vwPfZQBHT2FCZTl590w5ZWasCLQpksPeuG8JYl8AJOWc7zEw1z0haCN8g3tldBBdpOE8qu06HfP_KLerBdcDddmyZwszr8"/>
</div>
<div class="md:col-span-7 bg-primary p-12 rounded-xl flex flex-col justify-center text-on-primary">
<span class="text-secondary-fixed font-headline font-bold uppercase tracking-widest text-sm mb-4">Our Vision</span>
<h2 class="text-4xl font-headline font-bold mb-6 leading-tight">To be the Most Respected Financial Partner in East Africa.</h2>
<p class="text-primary-fixed text-lg leading-relaxed">
                            We envision a Tanzania where every ambitious individual and SME has the capital and guidance required to transform their vision into a sustainable reality, contributing to the nation's economic engine.
                        </p>
</div>
</div>
</div>
</section>
<!-- Why Choose Us: Clean List without borders -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-16">
<h2 class="text-4xl md:text-5xl font-headline font-extrabold text-primary mb-4 tracking-tighter">The Next Gen Edge</h2>
<p class="text-on-surface-variant max-w-xl mx-auto">Financial excellence defined by speed, transparency, and partnership.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="p-8 hover:bg-surface-container-highest transition-all rounded-xl">
<div class="w-16 h-16 bg-secondary-container flex items-center justify-center rounded-lg mb-6">
<span class="material-symbols-outlined text-on-secondary-container text-[32px]">speed</span>
</div>
<h3 class="text-xl font-headline font-bold text-on-surface mb-3">Fast Processing</h3>
<p class="text-on-surface-variant leading-relaxed">Time is money. Our digital-first appraisal system ensures loan approvals in record time without compromising due diligence.</p>
</div>
<div class="p-8 hover:bg-surface-container-highest transition-all rounded-xl">
<div class="w-16 h-16 bg-primary-container flex items-center justify-center rounded-lg mb-6">
<span class="material-symbols-outlined text-on-primary-container text-[32px]">account_balance_wallet</span>
</div>
<h3 class="text-xl font-headline font-bold text-on-surface mb-3">Affordable Rates</h3>
<p class="text-on-surface-variant leading-relaxed">We believe in growth, not debt traps. Our interest structures are designed to be competitive and sustainable for your business.</p>
</div>
<div class="p-8 hover:bg-surface-container-highest transition-all rounded-xl">
<div class="w-16 h-16 bg-tertiary-container flex items-center justify-center rounded-lg mb-6">
<span class="material-symbols-outlined text-on-tertiary-container text-[32px]">verified_user</span>
</div>
<h3 class="text-xl font-headline font-bold text-on-surface mb-3">Total Transparency</h3>
<p class="text-on-surface-variant leading-relaxed">No hidden fees. No fine-print surprises. Every condition of your facility is explained in plain language from day one.</p>
</div>
</div>
</div>
</section>
<!-- Target Clients: Segment Highlight -->
<section class="py-24 bg-surface-container">
<div class="max-w-7xl mx-auto px-6">
<h2 class="text-4xl font-headline font-extrabold text-on-surface mb-12 text-center tracking-tight">Who We Serve</h2>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<div class="group relative h-[450px] overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-xl transition-shadow">
<img alt="A busy street market in Tanzania with entrepreneurs displaying colorful textiles and local produce" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtXMZraxaQBnybAQrG8FyHzfprMeTO_um5MwzvSU6tJN6kvqJdeRaUCrwUucc0Pp-uTAC_R5Cs8l7iOmBW8UAVX4SDUp8i3yNaCfkUIZuNTAR3V53qbHah_6IuwmNZAAbqb_g2u6NDWpj1vPlmQbh0RbRtX8Qt9Ou0dsWQJ7oTqMwB9IFIHEEGhidDgIMocJLhF-Saa5ZqUD8ojYKra6FSreSaLU8C9v7D2HEA3fmnmQE9npwOeqF02M9fdDDnZ3eZ4_cnjzOQ54Y"/>
<div class="absolute inset-0 bg-gradient-to-t from-on-background to-transparent opacity-80"></div>
<div class="absolute bottom-0 p-8">
<h4 class="text-2xl font-headline font-bold text-white mb-2">SMEs &amp; Local Markets</h4>
<p class="text-white/80 text-sm">Providing the working capital needed to scale inventory and reach new markets.</p>
</div>
</div>
<div class="group relative h-[450px] overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-xl transition-shadow">
<img alt="Young Tanzanian tech entrepreneur working in a modern co-working space" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0Pg9RiY3e9QhEhs7FRZRcbQNCabLytaCY49DCunhS1zaIcswy5TLyBJ4t6xzyqe4vhOekltEEFCiP0S5WB002WJ70atsmwXLv6bnzuyDbIarJnjQ1y0NxI8JfDRalJSIlA_9uwIsRn73tDXSXdthLHWhuUKmob4mHvamdtH1QZFIrsyqUja7oU-taVAeP2X6Zir8-yfmG3aBpS_9GH2TeZajWgmFTBMiqRR6QQ_fftCXaZtk0xeSu-72PhQ3WkLwhyYlFuUeiazI"/>
<div class="absolute inset-0 bg-gradient-to-t from-on-background to-transparent opacity-80"></div>
<div class="absolute bottom-0 p-8">
<h4 class="text-2xl font-headline font-bold text-white mb-2">Modern Entrepreneurs</h4>
<p class="text-white/80 text-sm">Fueling innovative startups and service-based businesses with flexible financing.</p>
</div>
</div>
<div class="group relative h-[450px] overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-xl transition-shadow">
<img alt="Sleek corporate corridor in a luxury hotel or bank in Tanzania" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQcYeiuVYwNQ5ma4FkxkSzXY8urlvxFfkjhtMA-J5Fp5TaUE8Io-wriOQE_El0uP5U3ECkGy0IJ7sjh_ShXLDLasE0ld_KX2v48yWDP13fYI4FBXVCccokypi_jU5ejy8I3KkXnVE5Ibyli-gd9ATiFPyc7moAkwEnNxUhU5Qg1hNf7vGfatcKVE-h79VOpzfktQUaujnJ2NeIBFgOF_-fQC6HNLn9CX7Utic42a9ZesU85YpqUedxupBBkBFa_kQGvcqsKh11opA"/>
<div class="absolute inset-0 bg-gradient-to-t from-on-background to-transparent opacity-80"></div>
<div class="absolute bottom-0 p-8">
<h4 class="text-2xl font-headline font-bold text-white mb-2">Public &amp; Private Sector</h4>
<p class="text-white/80 text-sm">Tailored payroll loans and asset financing for the professional workforce.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Our Commitment: Large Scale Image & Text -->
<section class="py-24 bg-white">
<div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-16">
<div class="w-full md:w-1/2">
<img alt="Low angle shot of a modern glass office complex under construction in a developing urban district of Tanzania" class="rounded-xl shadow-2xl w-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-LXEgWuONHqQ48w2BbUsj7AHsBv1SQG-VtKqs07Vmyio4D6vwMDqh2Oiwh1TK_jtLhk17gzfY6Dhkb9QaEzhK27n6zfXwgvsJos_wBAjJXq8CEWIOEwfMehubPAWFPZxHDtYN_J6GSH6AwvT0C34QhKxPBRsUshpxJOq1DRREmuKiWTv4z3g4p3w_kXwytghgSweeMEq-kHGgrsFshRH7W25kMVLxnev6iXLif8gjR8FpA1tqwyqiNxHmgYfucYqsyRTTO81lkuk"/>
</div>
<div class="w-full md:w-1/2">
<h2 class="text-4xl font-headline font-extrabold text-primary mb-6 leading-tight">Our Commitment to Tanzania's Future</h2>
<p class="text-on-surface-variant text-lg leading-relaxed mb-8">
                        We don't just see balance sheets; we see the future of our nation. Every loan we facilitate is a brick in the wall of Tanzania's economic independence. From the bustling streets of Dar es Salaam to the growing centers of Arusha and Mwanza, we are invested in your success.
                    </p>
<div class="grid grid-cols-2 gap-8 border-t border-outline-variant/20 pt-8">
<div>
<span class="block text-3xl font-headline font-extrabold text-secondary">10k+</span>
<span class="text-xs uppercase tracking-widest font-bold text-on-surface-variant">Businesses Empowered</span>
</div>
<div>
<span class="block text-3xl font-headline font-extrabold text-secondary">98%</span>
<span class="text-xs uppercase tracking-widest font-bold text-on-surface-variant">Client Retention</span>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer (same as home) -->
<footer class="w-full border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 px-8 py-16 max-w-7xl mx-auto">
<div class="col-span-1 md:col-span-1">
<div class="text-lg font-bold text-blue-900 dark:text-slate-100 mb-6 font-headline">NextGeneration Microfinance Ltd.</div>
<p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed font-body">
                    Your trusted partner for financial growth in Tanzania. Regulated and committed to ethical lending practices.
                </p>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-6 text-sm uppercase tracking-widest">Solutions</h4>
<ul class="space-y-4">
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="{{ route('loan-products') }}">Business Growth</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Emergency Support</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Salary Advances</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Asset Financing</a></li>
</ul>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-6 text-sm uppercase tracking-widest">Company</h4>
<ul class="space-y-4">
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="{{ route('about') }}">About Us</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Careers</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Financial Disclosures</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Tanzania Microfinance Act</a></li>
</ul>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-6 text-sm uppercase tracking-widest">Support</h4>
<ul class="space-y-4">
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Privacy Policy</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="#">Terms of Service</a></li>
<li><a class="text-slate-500 dark:text-slate-400 text-sm font-body hover:text-blue-700 dark:hover:text-blue-400 underline-offset-4 transition-all duration-200" href="{{ route('contact') }}">Contact Us</a></li>
</ul>
</div>
</div>
<div class="max-w-7xl mx-auto px-8 py-8 border-t border-slate-200/50 dark:border-slate-800/50 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-slate-500 dark:text-slate-400 text-xs font-body">© {{ date('Y') }} NextGeneration Microfinance Ltd. All rights reserved.</p>
<div class="flex gap-6">
<span class="material-symbols-outlined text-slate-400 hover:text-primary cursor-pointer transition-colors" role="img" aria-label="Social">social_leaderboard</span>
<span class="material-symbols-outlined text-slate-400 hover:text-primary cursor-pointer transition-colors" role="img" aria-label="Email">alternate_email</span>
<span class="material-symbols-outlined text-slate-400 hover:text-primary cursor-pointer transition-colors" role="img" aria-label="Phone">phone_iphone</span>
</div>
</div>
</footer>
</body>
</html>
