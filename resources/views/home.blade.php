<!DOCTYPE html>
<html class="light scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>NextGeneration Microfinance | Empowering Tanzanian Growth</title>

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
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto w-full">
<div class="text-xl font-extrabold tracking-tighter text-blue-900 dark:text-white font-headline">
                NextGeneration Microfinance
            </div>
<div class="hidden md:flex items-center space-x-8">
<a class="font-headline font-bold tracking-tight text-sm uppercase text-blue-700 dark:text-blue-400 border-b-2 border-blue-700 dark:border-blue-400 pb-1" href="{{ url('/') }}">Home</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('loan-products') }}">Loan Products</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('about') }}">About Us</a>
<a class="font-headline font-bold tracking-tight text-sm uppercase text-slate-600 dark:text-slate-400 hover:text-blue-900 dark:hover:text-white transition-colors" href="{{ route('contact') }}">Contact</a>
</div>
<button type="button" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-headline font-bold text-sm uppercase scale-95 active:scale-90 transition-transform hover:bg-primary-container">
                Apply Now
            </button>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative min-h-[870px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" alt="Modern high-rise office buildings in Dar es Salaam city center under a bright blue sky with tropical greenery in foreground" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFxCttbENPSMeGLkj_iozcIBt455OQe6WUhP00SFTRDSpz5k-UDZObY_PNo1r8V57AT4xWfKGmVHRtaXpIRi2MlMODYTGFX6KK-2Xnl5IO3KXBmq11igwGQCPiDI1w1vj7PwQuzMpMVZA8UHvsT2AlY6azhEWxx5pf0idOvJgX9XCp9gIw_zlWeXFPkbgSCuMyIMORFZYqJ4JDfkeHkfoSnvtXrI4OjrfrTsfNj-noDOZ43dLaHGnvh6U6tqppVzktd904cDGXKUg"/>
<div class="absolute inset-0 bg-primary/40 backdrop-saturate-50"></div>
<div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="text-on-primary">
<h1 class="font-headline text-5xl md:text-7xl font-extrabold leading-[1.1] tracking-tight mb-6">
                        Empowering Growth Through Accessible Financial Solutions
                    </h1>
<p class="text-lg md:text-xl text-primary-fixed mb-10 max-w-xl font-light leading-relaxed">
                        We bridge the gap between your aspirations and reality with ethical, flexible, and lightning-fast micro-funding tailored for the Tanzanian spirit.
                    </p>
<div class="flex flex-col sm:flex-row gap-4">
<button type="button" class="bg-secondary text-on-secondary px-8 py-4 rounded-lg font-headline font-bold text-lg hover:bg-on-secondary-container transition-all shadow-lg">
                            Explore Our Loans
                        </button>
<button type="button" class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-4 rounded-lg font-headline font-bold text-lg hover:bg-white/20 transition-all">
                            How it Works
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
<h3 class="font-headline text-xl font-bold text-primary mb-3">Fast Processing</h3>
<p class="text-on-surface-variant leading-relaxed">Approval within 24 hours. We value your time because business doesn't wait.</p>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20 group hover:bg-surface-container-highest transition-all duration-300">
<div class="w-14 h-14 bg-primary-fixed text-on-primary-fixed rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl">account_balance_wallet</span>
</div>
<h3 class="font-headline text-xl font-bold text-primary mb-3">Flexible Plans</h3>
<p class="text-on-surface-variant leading-relaxed">Customized repayment schedules that align with your unique cash flow cycles.</p>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20 group hover:bg-surface-container-highest transition-all duration-300">
<div class="w-14 h-14 bg-tertiary-fixed text-on-tertiary-fixed rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-3xl">trending_down</span>
</div>
<h3 class="font-headline text-xl font-bold text-primary mb-3">Affordable Interest</h3>
<p class="text-on-surface-variant leading-relaxed">Competitive rates designed to help your enterprise thrive, not just survive.</p>
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
<img class="w-full aspect-[4/3] object-cover" alt="Professional Tanzanian man in a clean office environment smiling warmly while looking at a tablet" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBEU02zSwIMjxjyIX_Fi9pbV5YOsm5O35O6yppMMDqTJVKMu6pxgU7Ol8qUL4Gp7Dsxuuybgq5-fVteTMxM8wGm-yZNoKfVs_KBaGErIdTAsZEBelMSPgWDghiKIGzwHlq4_iN28W_2Bc59s19n6pUeDBgayedrJd-oAKVU4aL6LqYX66DNJVOpQQFWEUyqe4T78n3ifNvoLarKb88KMwlniFWkvQioDbjF6lWVoJeRI3d18hT2RQiMBIoh2K1SijEq0X3JzATsP4"/>
</div>
<div class="absolute -bottom-8 -right-8 w-64 h-64 bg-secondary/10 rounded-full blur-3xl -z-10"></div>
<div class="absolute -top-12 -left-12 px-6 py-4 bg-white shadow-xl rounded-lg z-20 hidden md:block">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary text-4xl">verified</span>
<div>
<p class="font-headline font-bold text-primary">Regulated Entity</p>
<p class="text-xs text-on-surface-variant">Tanzania Microfinance Act Compliant</p>
</div>
</div>
</div>
</div>
<div class="w-full lg:w-1/2">
<span class="text-secondary font-headline font-bold tracking-widest uppercase text-sm mb-4 block">Our Story</span>
<h2 class="font-headline text-4xl md:text-5xl font-extrabold text-primary leading-tight mb-8">
                            Nurturing Ambition Across Tanzania.
                        </h2>
<p class="text-on-surface-variant text-lg leading-relaxed mb-6">
                            NextGeneration Microfinance Ltd is more than a lender; we are your strategic partner in growth. Founded with the vision of financial inclusion, we provide the capital necessary for individuals and small businesses to reach their full potential.
                        </p>
<p class="text-on-surface-variant text-lg leading-relaxed mb-10">
                            Our team of local experts understands the Tanzanian market dynamics, allowing us to offer solutions that traditional banks often overlook.
                        </p>
<div class="grid grid-cols-2 gap-8">
<div>
<h4 class="font-headline text-3xl font-extrabold text-secondary">10k+</h4>
<p class="text-sm text-on-surface-variant">Clients Served</p>
</div>
<div>
<h4 class="font-headline text-3xl font-extrabold text-secondary">98%</h4>
<p class="text-sm text-on-surface-variant">Success Rate</p>
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
<h2 class="font-headline text-4xl md:text-5xl font-extrabold text-primary mb-4">Tailored Funding Solutions</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto">Select the product that best aligns with your current financial needs and future goals.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Business Loan -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-primary mb-6">storefront</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">Business Loan</h3>
<p class="text-on-surface-variant text-sm mb-8">Scale your enterprise with inventory financing or equipment upgrades.</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                Details <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Emergency Loan -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-tertiary mb-6">emergency</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">Emergency Loan</h3>
<p class="text-on-surface-variant text-sm mb-8">Quick relief for unforeseen circumstances. Fast-track approval process.</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                Details <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Public Sector -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-secondary mb-6">account_balance</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">Public Sector</h3>
<p class="text-on-surface-variant text-sm mb-8">Dedicated packages for government employees with streamlined deductions.</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                Details <span class="material-symbols-outlined ml-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Private Sector -->
<div class="group relative overflow-hidden rounded-xl bg-surface-container-low p-1 transition-all hover:bg-primary duration-500">
<div class="bg-white p-8 h-full rounded-lg transition-transform duration-500">
<span class="material-symbols-outlined text-4xl text-outline mb-6">work</span>
<h3 class="font-headline text-xl font-extrabold text-primary mb-4 group-hover:text-primary transition-colors">Private Sector</h3>
<p class="text-on-surface-variant text-sm mb-8">Personal loans and salary advances for employees in the private sector.</p>
<a class="inline-flex items-center text-secondary font-bold text-sm uppercase tracking-wider group-hover:translate-x-2 transition-transform" href="#">
                                Details <span class="material-symbols-outlined ml-2">arrow_forward</span>
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
<h2 class="font-headline text-4xl md:text-5xl font-extrabold text-white mb-8 leading-tight">Ready to take the next step?</h2>
<p class="text-primary-fixed text-xl mb-12 max-w-2xl mx-auto">Join thousands of Tanzanians who have transformed their lives with our support. Application takes less than 10 minutes.</p>
<div class="flex flex-col sm:flex-row justify-center gap-6">
<button type="button" class="bg-white text-primary px-10 py-4 rounded-lg font-headline font-bold text-lg hover:bg-surface-container-highest transition-all shadow-xl">
                                Apply For A Loan
                            </button>
<button type="button" class="border-2 border-white/30 text-white px-10 py-4 rounded-lg font-headline font-bold text-lg hover:bg-white/10 transition-all">
                                Contact an Agent
                            </button>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
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
