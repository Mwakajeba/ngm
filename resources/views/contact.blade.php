<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contact &amp; Apply | Next Generation Microfinance</title>

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
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto w-full">
<div class="text-xl font-extrabold tracking-tighter text-blue-900 dark:text-white font-headline">
                Next Generation Microfinance
            </div>
<div class="hidden md:flex items-center space-x-8">
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ url('/') }}">Home</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('loan-products') }}">Loan Products</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('about') }}">About Us</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-blue-700 dark:text-blue-400 border-b-2 border-blue-700 dark:border-blue-400 pb-1" href="{{ route('contact') }}">Contact</a>
</div>
<button type="button" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-headline font-bold text-sm uppercase scale-95 active:scale-90 transition-transform hover:bg-primary-container">
                Apply Now
            </button>
</div>
</nav>
<main class="pt-20 pb-8">
<!-- Hero Section: Editorial Style -->
<section class="relative h-[400px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" alt="Modern business district in Dar es Salaam with glass skyscrapers reflecting a clear blue sky at dawn" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA02jGDV0QduPQ6Ff19sW09ND6TaIWIEE-HY5RY2CwiymXkUVIuoyTlKPLMXR8xGf5s26fGG2ZHQD0kPuzZ3jp5d6WSPahvtzCTQQEQEqWpQd_2vY3bwOzKs3XTothDt4xrtHy76zgQxruGgrqctwa7r9ruEdHHYpJnDP9D8ntbMIsf1-xXJ3bruMjFPOLalGCw-jvZ56KrpyqJtQkYnPDNk0EqLm3hxAH0drC2NqO3YU2wGO8NwTtB_UqJNhLDr8rzD6MavqgUUN8"/>
<div class="absolute inset-0 bg-gradient-to-r from-primary/90 to-primary-container/80"></div>
</div>
<div class="relative z-10 text-center px-6 max-w-4xl">
<h1 class="font-headline text-5xl md:text-6xl font-extrabold text-on-primary tracking-tighter mb-4">
                    Get in Touch
                </h1>
<p class="font-body text-xl text-on-primary/90 max-w-2xl mx-auto">
                    Whether you're launching a business or expanding your farm, our team in Tanzania is here to support your growth.
                </p>
</div>
</section>
<!-- Main Content Grid: Tonal Separation -->
<section class="bg-surface py-20 px-6">
<div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Contact Information & Form -->
<div class="lg:col-span-7 space-y-12">
<div class="bg-surface-container-lowest p-10 rounded-xl shadow-sm">
<h2 class="font-headline text-3xl font-bold text-primary mb-8 tracking-tight">Send an Inquiry</h2>
<form class="space-y-6" action="#" method="get">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-name">Full Name</label>
<input id="contact-name" name="name" autocomplete="name" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="John Doe" type="text"/>
</div>
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-email">Email Address</label>
<input id="contact-email" name="email" autocomplete="email" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="john@example.com" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-phone">Phone Number</label>
<input id="contact-phone" name="phone" autocomplete="tel" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="+255 --- --- ---" type="tel"/>
</div>
<div class="space-y-2">
<label class="block font-label text-sm font-semibold text-on-surface-variant" for="contact-message">Message</label>
<textarea id="contact-message" name="message" class="w-full bg-surface-container-high border-none rounded-lg p-4 focus:ring-0 focus:bg-surface-container-highest transition-colors" placeholder="How can we help you today?" rows="4"></textarea>
</div>
<button type="button" class="w-full bg-primary text-on-primary py-4 rounded-lg font-headline font-bold text-lg hover:bg-primary-container transition-all">
                                Send Message
                            </button>
</form>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="material-symbols-outlined text-secondary text-3xl mb-3">call</span>
<h4 class="font-headline font-bold text-on-surface">Call Us</h4>
<p class="text-on-surface-variant text-sm mt-1">+255 22 211 0000</p>
</div>
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="material-symbols-outlined text-secondary text-3xl mb-3">mail</span>
<h4 class="font-headline font-bold text-on-surface">Email</h4>
<p class="text-on-surface-variant text-sm mt-1">info@nextgenmicro.co.tz</p>
</div>
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="material-symbols-outlined text-secondary text-3xl mb-3">location_on</span>
<h4 class="font-headline font-bold text-on-surface">Visit</h4>
<p class="text-on-surface-variant text-sm mt-1">Dar Free Market, Dar es Salaam</p>
</div>
</div>
</div>
<!-- Application Sidebar: Bento Style -->
<div class="lg:col-span-5 space-y-8">
<div class="bg-primary p-8 rounded-xl text-on-primary relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-10 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-9xl">trending_up</span>
</div>
<h2 class="font-headline text-3xl font-extrabold mb-4 relative z-10">Start Your Application</h2>
<p class="text-on-primary/80 mb-8 relative z-10 leading-relaxed">
                            Ready to take the next step? Our digital application takes less than 10 minutes. Secure, fast, and transparent.
                        </p>
<button type="button" class="w-full bg-secondary text-on-secondary py-4 rounded-lg font-headline font-bold text-lg hover:opacity-90 transition-all flex items-center justify-center gap-2 relative z-10">
                            Apply for a Loan <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<div class="bg-surface-container-high p-8 rounded-xl">
<h3 class="font-headline text-xl font-bold text-primary mb-6">What to Expect</h3>
<div class="space-y-6">
<div class="flex gap-4">
<div class="bg-primary-fixed w-8 h-8 rounded-full flex items-center justify-center shrink-0">
<span class="text-on-primary-fixed font-bold">1</span>
</div>
<div>
<h4 class="font-headline font-bold text-on-surface">Submit Documents</h4>
<p class="text-sm text-on-surface-variant">Provide ID and proof of business activity.</p>
</div>
</div>
<div class="flex gap-4">
<div class="bg-primary-fixed w-8 h-8 rounded-full flex items-center justify-center shrink-0">
<span class="text-on-primary-fixed font-bold">2</span>
</div>
<div>
<h4 class="font-headline font-bold text-on-surface">Verification</h4>
<p class="text-sm text-on-surface-variant">Our agents will contact you for a brief chat.</p>
</div>
</div>
<div class="flex gap-4">
<div class="bg-primary-fixed w-8 h-8 rounded-full flex items-center justify-center shrink-0">
<span class="text-on-primary-fixed font-bold">3</span>
</div>
<div>
<h4 class="font-headline font-bold text-on-surface">Fund Disbursement</h4>
<p class="text-sm text-on-surface-variant">Approval within 48 hours to your bank or mobile wallet.</p>
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
<h2 class="font-headline text-4xl font-extrabold text-primary mb-6 tracking-tight">Financial Inclusion Across Tanzania</h2>
<p class="text-lg text-on-surface-variant leading-relaxed mb-8">
                            Headquartered in Dar es Salaam, we serve clients in Arusha, Mwanza, and Dodoma. Our mission is to reach the underserved and provide the capital needed for community growth.
                        </p>
<div class="grid grid-cols-2 gap-4">
<div class="bg-surface p-4 rounded-lg shadow-sm">
<div class="text-2xl font-extrabold text-secondary">24/7</div>
<div class="text-xs font-bold text-on-surface-variant uppercase">Support Available</div>
</div>
<div class="bg-surface p-4 rounded-lg shadow-sm">
<div class="text-2xl font-extrabold text-secondary">48hr</div>
<div class="text-xs font-bold text-on-surface-variant uppercase">Decision Time</div>
</div>
</div>
</div>
<div class="rounded-xl overflow-hidden h-96 shadow-lg bg-surface-container-highest">
<img class="w-full h-full object-cover grayscale opacity-80" alt="Map and office locations representing Next Generation Microfinance service areas across Tanzania" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvEcTy1QSXMng6dPI1UA3AtatIU0wGCotFQhIAQXyVC8LKYwSBz1I2ilRBVm4pNuA1HzYQIN48jjdjvLu0dkhvUlZZ35CVPkgnWqjxEtlqEDn7dUBQVVDOwrdU8OqSQZK6lgsfpS-44us__6lgtvs8KgkvqY5JKOGycSgjCtjrg2ofJxmp1SfxsvGH0bpW_RQceflsW_fbN2QRD0xYZuxKdt8q27m8TYNS8TKKRbg2FzifkLBygU4XOXOPUqC-Bye2hADR-HTzbug"/>
</div>
</div>
<div class="bg-surface-container-lowest p-10 rounded-xl">
<h3 class="font-headline text-3xl font-bold text-on-surface mb-8 text-center">Frequently Asked Questions</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8">
<div>
<h4 class="font-headline font-bold text-primary mb-2">What documents are required?</h4>
<p class="text-on-surface-variant">For most loans, we require a valid NIDA ID, business license (if applicable), and 3 months of bank or mobile money statements.</p>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-2">How long is the loan term?</h4>
<p class="text-on-surface-variant">Terms vary from 3 to 24 months, designed to match your business's cash flow cycle and capacity to repay.</p>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-2">Do you require collateral?</h4>
<p class="text-on-surface-variant">We offer both secured and unsecured loan products depending on the amount requested and your credit history with us.</p>
</div>
<div>
<h4 class="font-headline font-bold text-primary mb-2">Are there any hidden fees?</h4>
<p class="text-on-surface-variant">Absolutely not. We pride ourselves on transparency; all interest rates and processing fees are clearly stated before you sign.</p>
</div>
</div>
</div>
</div>
</section>
</main>
<footer class="w-full border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 px-8 py-16 max-w-7xl mx-auto">
<div class="col-span-1 md:col-span-1">
<div class="text-lg font-bold text-blue-900 dark:text-slate-100 mb-6 font-headline">Next Generation Microfinance Ltd.</div>
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
<p class="text-slate-500 dark:text-slate-400 text-xs font-body">© {{ date('Y') }} Next Generation Microfinance Ltd. All rights reserved.</p>
<div class="flex gap-6">
<span class="material-symbols-outlined text-slate-400 hover:text-primary cursor-pointer transition-colors" role="img" aria-label="Social">social_leaderboard</span>
<span class="material-symbols-outlined text-slate-400 hover:text-primary cursor-pointer transition-colors" role="img" aria-label="Email">alternate_email</span>
<span class="material-symbols-outlined text-slate-400 hover:text-primary cursor-pointer transition-colors" role="img" aria-label="Phone">phone_iphone</span>
</div>
</div>
</footer>
</body>
</html>
