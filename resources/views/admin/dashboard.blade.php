<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>NextGeneration Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4 { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="bg-background text-on-background antialiased">
<!-- SideNavBar -->
<aside class="h-screen w-64 fixed left-0 top-0 bg-slate-50 dark:bg-slate-900 antialiased tracking-tight flex flex-col py-6 z-50">
    <div class="px-6 mb-10 flex items-center gap-3">
        <img src="{{ asset('logo.jpg') }}" alt="NextGeneration Microfinance" class="h-10 w-10 rounded-lg object-contain shrink-0 border border-slate-200 dark:border-slate-700 bg-white"/>
        <div class="min-w-0">
            <h1 class="text-xl font-bold text-primary dark:text-primary-fixed leading-tight">NextGeneration</h1>
            <p class="text-xs text-slate-500 font-semibold tracking-wider">Admin Portal</p>
        </div>
    </div>
    <nav class="flex-1 space-y-1">
        <a class="flex items-center gap-3 px-4 py-3 text-primary dark:text-secondary font-bold border-r-4 border-primary dark:border-secondary bg-white dark:bg-slate-800 transition-colors duration-200" href="{{ route('admin.dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Overview</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary-fixed hover:bg-primary/10 dark:hover:bg-primary/20 transition-colors duration-200" href="#">
            <span class="material-symbols-outlined">description</span>
            <span>Loan Applications</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary-fixed hover:bg-primary/10 dark:hover:bg-primary/20 transition-colors duration-200" href="#">
            <span class="material-symbols-outlined">group</span>
            <span>Client Management</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary-fixed hover:bg-primary/10 dark:hover:bg-primary/20 transition-colors duration-200" href="#">
            <span class="material-symbols-outlined">assessment</span>
            <span>Reports</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary-fixed hover:bg-primary/10 dark:hover:bg-primary/20 transition-colors duration-200" href="#">
            <span class="material-symbols-outlined">settings</span>
            <span>Settings</span>
        </a>
    </nav>
    <div class="px-4 mt-auto">
        <button class="w-full py-3 px-4 bg-primary text-on-primary rounded-lg font-bold text-sm shadow-md hover:opacity-90 transition-all duration-300 active:scale-95">
            New Loan Application
        </button>
        <div class="mt-6 flex items-center gap-3 px-2">
            <img
                alt="Admin User Profile"
                class="w-10 h-10 rounded-full bg-surface-container-highest border border-slate-100"
                src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=14532d&color=ffffff&bold=true&size=128"
            />
            <div class="overflow-hidden">
                <p class="text-sm font-bold truncate text-primary dark:text-primary-fixed">{{ auth()->user()->name ?? 'Admin' }}</p>
                <p class="text-xs text-slate-500 truncate">{{ auth()->user()->role ?? 'Admin' }}</p>
            </div>
        </div>
    </div>
</aside>

<!-- TopAppBar -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] h-16 z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-100 dark:border-slate-800 shadow-sm dark:shadow-none flex justify-between items-center px-8">
    <div class="flex items-center gap-4">
        <span class="text-lg font-black text-primary dark:text-primary-fixed">NextGeneration</span>
    </div>
    <div class="flex items-center gap-6">
        <div class="relative hidden lg:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
            <input class="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-lg text-sm w-64 focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search accounts..." type="text"/>
        </div>
        <div class="flex items-center gap-4 text-slate-400">
            <button class="hover:text-secondary dark:hover:text-primary-fixed transition-all duration-300">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="hover:text-secondary dark:hover:text-primary-fixed transition-all duration-300">
                <span class="material-symbols-outlined">help_outline</span>
            </button>
            <div class="h-8 w-[1px] bg-slate-200 dark:bg-slate-700 mx-2"></div>
            <img
                alt="Admin Avatar"
                class="w-8 h-8 rounded-full border border-slate-100"
                src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=14532d&color=ffffff&bold=true&size=128"
            />
            <form method="post" action="{{ route('admin.logout') }}">
                @csrf
                <button class="flex items-center gap-2 text-slate-500 hover:text-secondary font-bold text-sm">
                    <span class="material-symbols-outlined text-base">logout</span>
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
    <!-- Hero Header -->
    <header class="mb-10">
        <h2 class="text-3xl font-extrabold tracking-tight text-on-surface font-headline mb-2">Portfolio Overview</h2>
        <p class="text-on-surface-variant max-w-2xl">Manage your microfinance operations with precision. Monitoring Tanzanian SME growth and regional loan distribution in real-time.</p>
    </header>

    <!-- KPI Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-none relative overflow-hidden group">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <p class="text-sm font-medium text-on-surface-variant mb-1">Total Active Loans</p>
                    <h3 class="text-2xl font-black font-headline text-primary">1,248</h3>
                </div>
                <div class="bg-primary-fixed p-2 rounded-lg text-on-primary-fixed-variant">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-1 relative z-10">
                <span class="text-secondary font-bold text-xs flex items-center">
                    <span class="material-symbols-outlined text-xs">trending_up</span>
                    12%
                </span>
                <span class="text-xs text-on-surface-variant">vs last month</span>
            </div>
        </div>

        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-none relative overflow-hidden group">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <p class="text-sm font-medium text-on-surface-variant mb-1">Pending Applications</p>
                    <h3 class="text-2xl font-black font-headline text-tertiary-container">84</h3>
                </div>
                <div class="bg-tertiary-fixed p-2 rounded-lg text-on-tertiary-fixed-variant">
                    <span class="material-symbols-outlined">pending_actions</span>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-1 relative z-10">
                <span class="text-error font-bold text-xs flex items-center">
                    <span class="material-symbols-outlined text-xs">priority_high</span>
                    5 urgent
                </span>
                <span class="text-xs text-on-surface-variant">requires review</span>
            </div>
        </div>

        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-none relative overflow-hidden group">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <p class="text-sm font-medium text-on-surface-variant mb-1">Total Disbursed</p>
                    <h3 class="text-2xl font-black font-headline text-secondary">TSh 420M</h3>
                </div>
                <div class="bg-secondary-fixed p-2 rounded-lg text-on-secondary-fixed-variant">
                    <span class="material-symbols-outlined">payments</span>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-1 relative z-10">
                <span class="text-secondary font-bold text-xs flex items-center">
                    <span class="material-symbols-outlined text-xs">expand_less</span>
                    8%
                </span>
                <span class="text-xs text-on-surface-variant">growth this quarter</span>
            </div>
        </div>

        <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border-none relative overflow-hidden group">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <p class="text-sm font-medium text-on-surface-variant mb-1">Client Satisfaction</p>
                    <h3 class="text-2xl font-black font-headline text-on-surface">98.4%</h3>
                </div>
                <div class="bg-surface-container-high p-2 rounded-lg text-on-surface-variant">
                    <span class="material-symbols-outlined">verified</span>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-1 relative z-10">
                <div class="flex -space-x-2">
                    <div class="w-6 h-6 rounded-full border-2 border-white bg-primary-fixed text-primary flex items-center justify-center text-[10px] font-black">JM</div>
                    <div class="w-6 h-6 rounded-full border-2 border-white bg-secondary-container text-on-secondary-container flex items-center justify-center text-[10px] font-black">AK</div>
                    <div class="w-6 h-6 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-[8px] font-bold">+12</div>
                </div>
                <span class="text-xs text-on-surface-variant ml-2">New positive reviews</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-sm p-8">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-lg font-bold font-headline text-on-surface">Loan Disbursements</h3>
                    <p class="text-sm text-on-surface-variant">Monthly volume in Tanzanian Shillings</p>
                </div>
                <select class="bg-surface-container text-xs font-bold border-none rounded-lg py-1 px-3 focus:ring-0">
                    <option>Last 6 Months</option>
                    <option>Year to Date</option>
                </select>
            </div>
            <div class="h-64 flex items-end gap-3 px-2">
                <div class="flex-1 bg-surface-container-low rounded-t-lg relative group transition-all duration-300 hover:bg-primary/10" style="height: 40%;">
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">45M</div>
                </div>
                <div class="flex-1 bg-surface-container-low rounded-t-lg relative group transition-all duration-300 hover:bg-primary/10" style="height: 65%;">
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">68M</div>
                </div>
                <div class="flex-1 bg-surface-container-low rounded-t-lg relative group transition-all duration-300 hover:bg-primary/10" style="height: 55%;">
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">52M</div>
                </div>
                <div class="flex-1 bg-primary rounded-t-lg relative group transition-all duration-300 hover:opacity-90" style="height: 85%;">
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">92M</div>
                    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 text-on-primary font-bold text-[10px]">CURRENT</div>
                </div>
                <div class="flex-1 bg-surface-container-low rounded-t-lg relative group transition-all duration-300 hover:bg-primary/10" style="height: 70%;">
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">74M</div>
                </div>
                <div class="flex-1 bg-surface-container-low rounded-t-lg relative group transition-all duration-300 hover:bg-primary/10" style="height: 60%;">
                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">63M</div>
                </div>
            </div>
            <div class="flex justify-between mt-4 text-[10px] font-bold text-on-surface-variant uppercase tracking-widest px-2">
                <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-4 flex flex-col gap-6">
            <div class="bg-primary text-on-primary p-8 rounded-xl shadow-lg relative overflow-hidden flex-1 flex flex-col justify-between">
                <div class="relative z-10">
                    <h3 class="text-xl font-black font-headline mb-2">Quick Actions</h3>
                    <p class="text-primary-fixed-dim text-sm">Commonly performed administrator tasks.</p>
                </div>
                <div class="space-y-3 relative z-10">
                    <button class="w-full bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/10 text-white py-3 px-4 rounded-lg flex items-center justify-between transition-all group">
                        <span class="flex items-center gap-3 font-semibold">
                            <span class="material-symbols-outlined">add_circle</span>
                            New Loan Application
                        </span>
                        <span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all">chevron_right</span>
                    </button>
                    <button class="w-full bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/10 text-white py-3 px-4 rounded-lg flex items-center justify-between transition-all group">
                        <span class="flex items-center gap-3 font-semibold">
                            <span class="material-symbols-outlined">summarize</span>
                            Generate Report
                        </span>
                        <span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all">chevron_right</span>
                    </button>
                    <button class="w-full bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/10 text-white py-3 px-4 rounded-lg flex items-center justify-between transition-all group">
                        <span class="flex items-center gap-3 font-semibold">
                            <span class="material-symbols-outlined">person_search</span>
                            Search Client
                        </span>
                        <span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100 -translate-x-2 group-hover:translate-x-0 transition-all">chevron_right</span>
                    </button>
                </div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-secondary rounded-full blur-3xl opacity-30"></div>
            </div>
        </div>

        <div class="col-span-12 bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
            <div class="p-8 flex justify-between items-center border-b border-surface-container">
                <div>
                    <h3 class="text-lg font-bold font-headline text-on-surface">Recent Loan Applications</h3>
                    <p class="text-sm text-on-surface-variant">Review and manage recent requests</p>
                </div>
                <button class="text-primary text-sm font-bold flex items-center gap-2 hover:underline">
                    View All Applications
                    <span class="material-symbols-outlined text-sm">open_in_new</span>
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                    <tr class="bg-surface-container-low/50 text-on-surface-variant text-[10px] uppercase tracking-widest font-bold">
                        <th class="px-8 py-4">Client Name</th>
                        <th class="px-8 py-4">Loan Type</th>
                        <th class="px-8 py-4">Amount</th>
                        <th class="px-8 py-4">Date Submitted</th>
                        <th class="px-8 py-4">Status</th>
                        <th class="px-8 py-4 text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container">
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs">JM</div>
                                <div>
                                    <p class="font-bold text-on-surface text-sm">Josephine Mbeki</p>
                                    <p class="text-xs text-on-surface-variant">ID: #49281</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-on-surface">Small Business Growth</td>
                        <td class="px-8 py-5 text-sm font-bold text-on-surface">TSh 2,500,000</td>
                        <td class="px-8 py-5 text-sm text-on-surface-variant">Oct 24, 2023</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-secondary-container text-on-secondary-container text-[10px] font-black rounded-full uppercase">Approved</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button class="p-2 hover:bg-surface-container-high rounded-full transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-tertiary-fixed text-tertiary flex items-center justify-center font-bold text-xs">BK</div>
                                <div>
                                    <p class="font-bold text-on-surface text-sm">Bakari Khalfani</p>
                                    <p class="text-xs text-on-surface-variant">ID: #49302</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-on-surface">Agricultural Equipment</td>
                        <td class="px-8 py-5 text-sm font-bold text-on-surface">TSh 8,200,000</td>
                        <td class="px-8 py-5 text-sm text-on-surface-variant">Oct 23, 2023</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-surface-container-high text-on-surface-variant text-[10px] font-black rounded-full uppercase">Pending</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button class="p-2 hover:bg-surface-container-high rounded-full transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-surface-container-low transition-colors group">
                        <td class="px-8 py-5">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-error-container text-error flex items-center justify-center font-bold text-xs">LS</div>
                                <div>
                                    <p class="font-bold text-on-surface text-sm">Lulu Saidi</p>
                                    <p class="text-xs text-on-surface-variant">ID: #49315</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 text-sm text-on-surface">Retail Expansion</td>
                        <td class="px-8 py-5 text-sm font-bold text-on-surface">TSh 1,500,000</td>
                        <td class="px-8 py-5 text-sm text-on-surface-variant">Oct 22, 2023</td>
                        <td class="px-8 py-5">
                            <span class="px-3 py-1 bg-error-container text-on-error-container text-[10px] font-black rounded-full uppercase">Rejected</span>
                        </td>
                        <td class="px-8 py-5 text-right">
                            <button class="p-2 hover:bg-surface-container-high rounded-full transition-colors">
                                <span class="material-symbols-outlined text-on-surface-variant">more_vert</span>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <section class="col-span-12 mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-center bg-surface-container-low p-10 rounded-2xl">
            <div class="relative">
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-primary/5 rounded-full blur-3xl"></div>
                <h3 class="text-2xl font-black font-headline text-on-surface mb-4">Regional Impact Strategy</h3>
                <p class="text-on-surface-variant mb-6 leading-relaxed">Our commitment goes beyond financing. We are actively scaling support in the Arusha and Mwanza regions, prioritizing tech-enabled agriculture and female-led urban enterprises.</p>
                <div class="flex flex-wrap gap-4">
                    <div class="bg-surface-container-lowest px-4 py-3 rounded-xl flex items-center gap-3 border border-outline-variant/20 shadow-sm">
                        <span class="material-symbols-outlined text-secondary">location_on</span>
                        <div>
                            <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-tighter">Primary Hub</p>
                            <p class="font-bold text-on-surface">Dar es Salaam</p>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest px-4 py-3 rounded-xl flex items-center gap-3 border border-outline-variant/20 shadow-sm">
                        <span class="material-symbols-outlined text-primary">rocket_launch</span>
                        <div>
                            <p class="text-[10px] font-bold text-on-surface-variant uppercase tracking-tighter">Growth Focus</p>
                            <p class="font-bold text-on-surface">Arusha Region</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative h-64 lg:h-80 rounded-xl overflow-hidden shadow-xl">
                <img class="w-full h-full object-cover" alt="Stylized map of Tanzania showing regional loan distribution activity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAtvwdvhFaaNXox5gkXUQZjVZCe1hd5ubEexJt7ttqlhg432lrEnkPofkzXvnHRFqfIOxW7qutP1oouB7N8uVbjJMBNnfjqT6J6cRce5UKTzP8hnIcpInOhwiBqp3W_JkiBBms6mlu5PHssijmPLetXy4fNNX66RmL9Bn5OFFrLlPQt4m-Kybjr-47F4HFFjTgwZfim_07T-FUIwrERRdThsME-Sg1FQN2HWsOfUJp010v0pCk1Blm9YTgNZTF4hHa2Ji3UyfE5e8"/>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
                <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md p-3 rounded-lg flex items-center justify-between">
                    <span class="text-xs font-bold text-primary">Live Regional Activity</span>
                    <span class="flex items-center gap-1">
                        <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                        <span class="text-[10px] font-black uppercase text-secondary">Active Now</span>
                    </span>
                </div>
            </div>
        </section>
    </div>
</main>
</body>
</html>

