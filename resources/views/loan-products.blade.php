<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Loan Products | NextGeneration Microfinance</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.icon-fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body selection:bg-secondary-container selection:text-on-secondary-container">
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto w-full">
<div class="text-xl font-extrabold tracking-tighter text-blue-900 dark:text-white font-headline">
                NextGeneration Microfinance
            </div>
<div class="hidden md:flex items-center space-x-8">
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ url('/') }}">Home</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-blue-700 dark:text-blue-400 border-b-2 border-blue-700 dark:border-blue-400 pb-1" href="{{ route('loan-products') }}">Loan Products</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('about') }}">About Us</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('contact') }}">Contact</a>
</div>
<button type="button" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-headline font-bold text-sm uppercase scale-95 active:scale-90 transition-transform hover:bg-primary-container">
                Apply Now
            </button>
</div>
</nav>
<main class="pt-20 pb-20">
<!-- Hero Section (full-bleed, matches home) -->
<section class="relative min-h-[535px] flex items-center overflow-hidden mb-20">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" alt="Vibrant local market with vendors, fresh produce, and everyday commerce" src="https://images.pexels.com/photos/30179958/pexels-photo-30179958.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=2070"/>
<div class="absolute inset-0 bg-primary/40 backdrop-saturate-50"></div>
<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-6 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="text-on-primary pt-4 md:pt-6">
<h1 class="font-headline text-5xl md:text-7xl font-extrabold leading-[1.1] tracking-tight mb-6">
                        Empowering Your <span class="text-secondary-fixed">Financial Future</span>
                    </h1>
<p class="text-lg md:text-xl text-primary-fixed mb-10 max-w-xl font-light leading-relaxed">
                        Tailored financial solutions designed for Tanzanian entrepreneurs, public servants, and everyday professionals. Discover the bridge to your aspirations.
                    </p>
<div class="flex flex-wrap gap-4 pb-6">
<div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-on-primary text-sm font-semibold">
<span class="material-symbols-outlined icon-fill text-secondary-fixed">verified</span>
                            Licensed Microfinance
                        </div>
<div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-on-primary text-sm font-semibold">
<span class="material-symbols-outlined icon-fill text-secondary-fixed">speed</span>
                            24h Approval
                        </div>
</div>
</div>
</div>
</section>
<!-- Loan Products Bento Grid -->
<section class="max-w-7xl mx-auto px-6 mb-32">
<div class="mb-12">
<h2 class="font-headline text-3xl font-extrabold text-primary mb-2">Our Loan Portfolios</h2>
<div class="w-20 h-1.5 bg-secondary rounded-full"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Business Loans - Large Bento Piece -->
<div class="md:col-span-8 bg-surface-container-low rounded-xl overflow-hidden flex flex-col md:flex-row group transition-all duration-300">
<div class="md:w-1/2 p-8 flex flex-col justify-between">
<div>
<span class="text-secondary font-headline font-bold text-xs uppercase tracking-widest mb-4 block">Entrepreneurship</span>
<h3 class="text-3xl font-headline font-bold text-primary mb-4">Business Loans</h3>
<p class="text-on-surface-variant leading-relaxed mb-6">Fuel your growth. From inventory stock to capital expansion, we provide the liquidity your business needs to thrive in the competitive Tanzanian market.</p>
<ul class="space-y-3 mb-8">
<li class="flex items-center gap-3 text-sm text-on-surface font-medium">
<span class="material-symbols-outlined text-secondary">check_circle</span>
                                    Inventory &amp; Stock Financing
                                </li>
<li class="flex items-center gap-3 text-sm text-on-surface font-medium">
<span class="material-symbols-outlined text-secondary">check_circle</span>
                                    Operational Cash Flow Support
                                </li>
</ul>
</div>
<button type="button" class="w-fit bg-primary text-on-primary px-8 py-3 rounded-lg font-bold transition-all hover:bg-primary-container active:scale-95">Apply for Growth</button>
</div>
<div class="md:w-1/2 min-h-[300px] relative">
<img class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" alt="Close-up of a smiling Tanzanian small business owner in a vibrant textile shop arranging colorful fabrics" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfH-z4zEnvsSFo86mdUgpAyLCr525mnz_lRu7OM4N45pwS9eUgTKM0qsi-hwai79Q1ZOteydQYsiOGjvSspIVGp9xfBoFKXsHJEYc_mw04AWZoM_nBsHOL709V53XEZLgFlEEePFqVoL_ZN6kgJLiU3kMfXXZdb5xyOQa1cxR-EDdbeK1POr6zn2J21gArnLCpdzSe5EhO5xJryakIr90ZuQhQwmgGGTprU-KhxpjXnJzmz4Urnnqg9AyIzovA7xLcwP0xg3bZ3PI"/>
</div>
</div>
<!-- Emergency Loans - Accent Piece -->
<div class="md:col-span-4 bg-tertiary-fixed rounded-xl p-8 flex flex-col justify-between border-b-4 border-tertiary shadow-xl relative overflow-hidden group">
<div class="absolute -right-4 -top-4 opacity-10">
<span class="material-symbols-outlined text-9xl">bolt</span>
</div>
<div>
<div class="w-12 h-12 rounded-full bg-tertiary-container flex items-center justify-center mb-6">
<span class="material-symbols-outlined icon-fill text-on-tertiary-container">bolt</span>
</div>
<h3 class="text-2xl font-headline font-bold text-tertiary mb-3">Emergency Loans</h3>
<p class="text-on-tertiary-fixed-variant leading-relaxed mb-6">Life is unpredictable. Get instant financial relief for medical bills, urgent repairs, or school fees within hours, not days.</p>
</div>
<button type="button" class="w-full bg-tertiary text-on-tertiary py-4 rounded-lg font-bold flex items-center justify-center gap-2 transition-all hover:opacity-90">
                        Request Urgent Funds
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
<!-- Public Servant Loans -->
<div class="md:col-span-6 bg-surface-container-high rounded-xl overflow-hidden group">
<div class="h-48 relative">
<img class="w-full h-full object-cover" alt="Confident professional Tanzanian woman in a government office setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbhl9dgCwQ9i2x3_bVbFWrPBcu1cWKcodaWZBQW4GEqKU4xxtPzlDqOTVGNqy2H1CjmUKGgbBDV_cXOYe2HtG-v-hfoSL4-Xs6f9CsqAyr7rIC4VoBQi_e6ohPuKwVDtTZkegVrQAPAfQpuRYP69Hk-zUCUGU-MUlf386j4YSD-kX_2qddPjjlhDVsicc3WWFXeLZYJQPRtYidFpGUDiSGeaExMe630fnJ0c-OznBz-F_Kj7zxfxBrI1e_kgOySgeN28RR0n4lFa4"/>
<div class="absolute inset-0 bg-primary/20"></div>
</div>
<div class="p-8">
<h3 class="text-2xl font-headline font-bold text-primary mb-3">Public Servant Loans</h3>
<p class="text-on-surface-variant mb-6">Dedicated financial packages for government employees. Benefit from streamlined salary-based deductions and the lowest interest rates in the market.</p>
<div class="flex items-center justify-between">
<span class="text-xs font-bold text-outline uppercase tracking-tighter">Fixed Interest Rates</span>
<a class="text-primary font-bold flex items-center gap-1 hover:underline underline-offset-4" href="#">
                                Learn More
                                <span class="material-symbols-outlined text-sm">open_in_new</span>
</a>
</div>
</div>
</div>
<!-- Private Sector Loans -->
<div class="md:col-span-6 bg-surface-container-high rounded-xl overflow-hidden group">
<div class="h-48 relative">
<img class="w-full h-full object-cover" alt="Two professional men in business attire discussing in a modern boardroom with large windows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIfprq4tWyOD748MrN0gJPr20Cu-Cy6KaUUje0QcEWc8Kxd5LDWpXkqMkfZXJcJxZg0C0UrTeVcdLP4iv7V0Y4xLiMkYC3j4GlGeAWdqeX2GKI3rZMJ7KWxW4FvhcRw6H6cK813ZU8z8GnrXL_AM2E_VAacmFNabcHVR6H9X9YfPuGD7N1hXqlhJZtwBZisLvt7wAce577G-1rWGI-csyiOAr_VWnQPG5iza3shkSj8A1AC6jkJxP9o2egMeJKmef3Vy84dJvzTtA"/>
<div class="absolute inset-0 bg-secondary/20"></div>
</div>
<div class="p-8">
<h3 class="text-2xl font-headline font-bold text-primary mb-3">Private Sector Employees</h3>
<p class="text-on-surface-variant mb-6">Flexible financing for corporate professionals. We offer convenient repayment schedules that align perfectly with your monthly payroll cycles.</p>
<div class="flex items-center justify-between">
<span class="text-xs font-bold text-outline uppercase tracking-tighter">Flexible Terms</span>
<a class="text-primary font-bold flex items-center gap-1 hover:underline underline-offset-4" href="#">
                                Learn More
                                <span class="material-symbols-outlined text-sm">open_in_new</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Trust Section - Tonal Shift -->
<section class="bg-surface-container-low py-24">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center max-w-3xl mx-auto mb-16">
<h2 class="text-4xl font-headline font-extrabold text-primary mb-6">Why Choose NextGeneration?</h2>
<p class="text-on-surface-variant text-lg leading-relaxed">We are more than a lender; we are your financial partner. Our processes are built on transparency and speed to ensure your success.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="text-center">
<div class="mb-6 inline-block p-4 rounded-full bg-surface-container-highest">
<span class="material-symbols-outlined text-primary text-4xl">security</span>
</div>
<h4 class="text-xl font-bold mb-3 text-primary font-headline">Secure &amp; Regulated</h4>
<p class="text-on-surface-variant text-sm">Fully compliant with the Tanzania Microfinance Act, ensuring your financial safety at every step.</p>
</div>
<div class="text-center">
<div class="mb-6 inline-block p-4 rounded-full bg-surface-container-highest">
<span class="material-symbols-outlined text-primary text-4xl">account_balance_wallet</span>
</div>
<h4 class="text-xl font-bold mb-3 text-primary font-headline">Transparent Fees</h4>
<p class="text-on-surface-variant text-sm">No hidden charges. What you see is what you pay, with clear repayment schedules provided upfront.</p>
</div>
<div class="text-center">
<div class="mb-6 inline-block p-4 rounded-full bg-surface-container-highest">
<span class="material-symbols-outlined text-primary text-4xl">support_agent</span>
</div>
<h4 class="text-xl font-bold mb-3 text-primary font-headline">Expert Support</h4>
<p class="text-on-surface-variant text-sm">Our financial advisors are available to guide you through the right product for your specific needs.</p>
</div>
</div>
</div>
</section>
<!-- Call to Action Section -->
<section class="max-w-7xl mx-auto px-6 -mt-16 relative z-20">
<div class="bg-primary-container p-10 md:p-16 rounded-xl shadow-2xl flex flex-col md:flex-row items-center justify-between gap-10">
<div class="max-w-lg">
<h2 class="text-on-primary font-headline text-3xl md:text-4xl font-bold mb-4">Ready to start your journey?</h2>
<p class="text-on-primary-container opacity-90 text-lg">Speak to our loan officers today or complete our online application form in under 5 minutes.</p>
</div>
<div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
<button type="button" class="bg-secondary text-on-secondary px-10 py-4 rounded-lg font-bold text-center hover:bg-on-secondary-container transition-colors">Start Application</button>
<button type="button" class="bg-white/10 backdrop-blur-md text-on-primary px-10 py-4 rounded-lg font-bold border border-white/20 text-center hover:bg-white/20 transition-colors">Book Consultation</button>
</div>
</div>
</section>
</main>
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
