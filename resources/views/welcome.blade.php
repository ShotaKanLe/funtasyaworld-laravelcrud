<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElectroShop - Modern Electronics Store</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,800&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">

    <div class="bg-[#0f4c3a] text-white text-xs sm:text-sm py-2 px-4">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                <span>0834 213 8123</span>
            </div>
            <div class="font-medium tracking-wide text-center">
                Get Buy 1 Get 1 Free Promo &bull; Discount up to 50% Today
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span>Padang, Indonesia</span>
            </div>
        </div>
    </div>

    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center gap-8">
                    <a href="#" class="flex items-center gap-2 text-2xl font-bold text-gray-900 tracking-tight">
                        <span>Electro<span class="text-[#0f4c3a]">Shop</span></span>
                    </a>
                    <div class="hidden md:flex items-center gap-6 font-medium text-gray-600">
                        <a href="#" class="text-[#0f4c3a] transition-colors">Home</a>
                        <div class="relative" x-data="{ open: false }" @click.away="open = false">
                            <button @click="open = !open" class="flex items-center gap-1 hover:text-[#0f4c3a] transition-colors focus:outline-none cursor-pointer">
                                Categories
                                <svg class="w-4 h-4 transition-transform" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="open" x-transition class="absolute top-full left-0 mt-2 w-48 bg-white border border-gray-100 rounded-xl shadow-xl py-2 z-50">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-50 transition-colors">Smartphone</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-50 transition-colors">Laptop & PC</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-50 transition-colors">Audio & Smart TV</a>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-50 transition-colors">Accessories</a>
                            </div>
                        </div>
                        <a href="#" class="hover:text-[#0f4c3a] transition-colors">Promo</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 rounded-xl bg-[#0f4c3a] text-white font-medium hover:bg-[#0c3e2f] transition-all shadow-sm">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-xl text-gray-700 font-medium hover:bg-gray-50 border border-gray-200 transition-all">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-xl bg-[#0f4c3a] text-white font-medium hover:bg-[#0c3e2f] transition-all shadow-sm shadow-[#0f4c3a]/20">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenuOpen"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenuOpen" x-cloak><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t border-gray-100 bg-white px-4 pt-2 pb-6 space-y-3 shadow-inner">
            <a href="#" class="block py-2 font-medium text-[#0f4c3a]">Home</a>
            <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex justify-between items-center py-2 font-medium text-gray-600">
                    <span>Categories</span>
                    <svg class="w-4 h-4 transition-transform" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" class="pl-4 space-y-2 mt-1 border-l-2 border-gray-100">
                    <a href="#" class="block py-1.5 text-gray-500 text-sm">Smartphone</a>
                    <a href="#" class="block py-1.5 text-gray-500 text-sm">Laptop & PC</a>
                    <a href="#" class="block py-1.5 text-gray-500 text-sm">Audio & Smart TV</a>
                    <a href="#" class="block py-1.5 text-gray-500 text-sm">Accessories</a>
                </div>
            </div>
            <a href="#" class="block py-2 font-medium text-gray-600">Promo</a>
            <div class="pt-4 grid grid-cols-2 gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="col-span-2 text-center py-2.5 rounded-xl bg-[#0f4c3a] text-white font-medium">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="block text-center py-2.5 rounded-xl border border-gray-200 font-medium text-gray-700">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block text-center py-2.5 rounded-xl bg-[#0f4c3a] text-white font-medium">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <header class="bg-[#e4c4b2] relative overflow-hidden my-6 mx-4 sm:mx-6 lg:mx-8 rounded-3xl min-h-[440px] flex items-center">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-12 grid md:grid-cols-2 gap-8 items-center w-full relative z-10">
            <div class="space-y-6">
                <p class="text-sm sm:text-base font-semibold text-amber-950/80 uppercase tracking-widest">30% Discount Today</p>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-[#0f4c3a] tracking-tight leading-none">
                    Promo 2026 <br>Gadget Collection
                </h1>
                <p class="text-amber-950/70 max-w-md text-sm sm:text-base">
                    Upgrade your productivity with this year's best flagship gadget lineup. Limited offer with 0% installment.
                </p>
                <div>
                    <a href="#" class="inline-block bg-white text-gray-900 font-semibold px-8 py-3.5 rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-0.5">Shop Now</a>
                </div>
            </div>
            <div class="flex justify-center md:justify-end">
                <div class="w-72 h-72 sm:w-96 sm:h-96 relative flex items-center justify-center">
                    <img src="{{ asset('assets/hero-gadget.png') }}" alt="Gadget Promo" class="w-full h-full object-contain transform group-hover:scale-105 transition-transform">
                </div>
            </div>
        </div>
        <div class="absolute inset-0 bg-radial-gradient from-transparent to-black/5 pointer-events-none"></div>
    </header>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-2">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">Most Popular Categories</h2>
                <p class="text-gray-500 mt-1">Choose an instant category to ease your search needs.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-[#eedcd2] p-8 rounded-2xl flex flex-col justify-between min-h-[220px] group relative overflow-hidden shadow-sm hover:shadow-md transition-all">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-amber-900/70">10% Discount</p>
                    <h3 class="text-2xl font-bold text-gray-900">Smartphone</h3>
                </div>
                <div>
                    <a href="#" class="inline-block bg-white text-gray-900 font-medium px-5 py-2 rounded-xl text-sm shadow-sm group-hover:bg-gray-50 transition-colors">Shop Now</a>
                </div>
                <img src="{{ asset('assets/cat-smartphone.png') }}" alt="Smartphone" class="absolute -bottom-4 -right-4 w-48 h-48 object-contain opacity-85 group-hover:scale-110 transition-transform">
            </div>

            <div class="bg-[#e2e8f0] p-8 rounded-2xl flex flex-col justify-between min-h-[220px] group relative overflow-hidden shadow-sm hover:shadow-md transition-all">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-slate-700/70">15% Discount</p>
                    <h3 class="text-2xl font-bold text-gray-900">Laptop & PC</h3>
                </div>
                <div>
                    <a href="#" class="inline-block bg-white text-gray-900 font-medium px-5 py-2 rounded-xl text-sm shadow-sm group-hover:bg-gray-50 transition-colors">Shop Now</a>
                </div>
                <img src="{{ asset('assets/cat-laptop.png') }}" alt="Laptop & PC" class="absolute -bottom-4 -right-4 w-48 h-48 object-contain opacity-85 group-hover:scale-110 transition-transform">
            </div>

            <div class="bg-[#0f4c3a] p-8 rounded-2xl flex flex-col justify-between min-h-[220px] group relative overflow-hidden shadow-sm hover:shadow-md transition-all sm:col-span-2 lg:col-span-1">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-white/70">20% Discount</p>
                    <h3 class="text-2xl font-bold text-white">Audio & Smart TV</h3>
                </div>
                <div>
                    <a href="#" class="inline-block bg-white text-gray-900 font-medium px-5 py-2 rounded-xl text-sm shadow-sm group-hover:bg-gray-50 transition-colors">Shop Now</a>
                </div>
                <img src="{{ asset('assets/cat-audio.png') }}" alt="Audio & Smart TV" class="absolute -bottom-4 -right-4 w-52 h-52 object-contain opacity-80 group-hover:scale-110 transition-transform">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-8">
            <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">Recommended Products</h2>
            <p class="text-gray-500 mt-1">The best line of electronic products with official quality and warranty.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                <div class="bg-gray-50 p-6 relative flex items-center justify-center min-h-[200px]">
                    <span class="absolute top-3 left-3 bg-[#0f4c3a] text-white text-xs font-bold px-2.5 py-1 rounded-md z-10">PROMO</span>
                    <img src="{{ asset('assets/prod-phone-x5.png') }}" alt="Poco Phone X5" class="w-36 h-36 object-contain group-hover:scale-105 transition-transform">
                </div>
                <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">Smartphone</p>
                        <h4 class="font-bold text-gray-900 text-base mt-1 line-clamp-1">Poco Phone X5</h4>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="text-[#0f4c3a] font-bold">Rp 12.499.000</span>
                            <span class="text-xs text-gray-400 line-through">Rp 14.999.000</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-50 text-gray-880 font-medium py-2.5 rounded-xl text-sm border border-gray-100 hover:bg-[#0f4c3a] hover:text-white hover:border-[#0f4c3a] transition-all cursor-pointer">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                <div class="bg-gray-50 p-6 relative flex items-center justify-center min-h-[200px]">
                    <img src="{{ asset('assets/prod-probook.png') }}" alt="ProBook Ultrathin 14" class="w-36 h-36 object-contain group-hover:scale-105 transition-transform">
                </div>
                <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">Laptop</p>
                        <h4 class="font-bold text-gray-900 text-base mt-1 line-clamp-1">ProBook Ultrathin 14"</h4>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="text-[#0f4c3a] font-bold">Rp 9.850.000</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-50 text-gray-880 font-medium py-2.5 rounded-xl text-sm border border-gray-100 hover:bg-[#0f4c3a] hover:text-white hover:border-[#0f4c3a] transition-all cursor-pointer">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                <div class="bg-gray-50 p-6 relative flex items-center justify-center min-h-[200px]">
                    <span class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2.5 py-1 rounded-md z-10">HOT</span>
                    <img src="{{ asset('assets/prod-headphone.png') }}" alt="Wireless Headphone" class="w-36 h-36 object-contain group-hover:scale-105 transition-transform">
                </div>
                <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">Audio</p>
                        <h4 class="font-bold text-gray-900 text-base mt-1 line-clamp-1">Wireless Noise Cancelling Headphone</h4>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="text-[#0f4c3a] font-bold">Rp 3.199.000</span>
                            <span class="text-xs text-gray-400 line-through">Rp 3.999.000</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-50 text-gray-880 font-medium py-2.5 rounded-xl text-sm border border-gray-100 hover:bg-[#0f4c3a] hover:text-white hover:border-[#0f4c3a] transition-all cursor-pointer">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                <div class="bg-gray-50 p-6 relative flex items-center justify-center min-h-[200px]">
                    <img src="{{ asset('assets/prod-watch.png') }}" alt="Active Smartwatch v3" class="w-36 h-36 object-contain group-hover:scale-105 transition-transform">
                </div>
                <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
                    <div>
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">Smartwatch</p>
                        <h4 class="font-bold text-gray-900 text-base mt-1 line-clamp-1">Active Smartwatch v3</h4>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="text-[#0f4c3a] font-bold">Rp 1.750.000</span>
                        </div>
                    </div>
                    <button class="w-full bg-gray-50 text-gray-880 font-medium py-2.5 rounded-xl text-sm border border-gray-100 hover:bg-[#0f4c3a] hover:text-white hover:border-[#0f4c3a] transition-all cursor-pointer">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16 px-4 sm:px-6 lg:px-8 border-t border-b border-gray-200/60">
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-tight">Let's Keep in Touch</h2>
            <p class="text-gray-500 max-w-xl mx-auto text-sm sm:text-base">Subscribe to our newsletter to receive information on the latest product releases, exclusive offers, and special discounts directly to your inbox.</p>
            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto pt-2" @submit.prevent>
                <input type="email" placeholder="Enter Your Email.." required class="px-5 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0f4c3a] focus:border-transparent flex-1 bg-white text-sm">
                <button type="submit" class="bg-black text-white px-8 py-3 rounded-xl font-medium hover:bg-gray-900 transition-colors shadow-md text-sm">Subscribe</button>
            </form>
        </div>
    </section>

    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16" x-data="{ activeFaq: null }">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight">Frequently Asked Questions (FAQ)</h2>
            <p class="text-gray-500 mt-2">Need quick help? Find answers to the most frequently asked questions.</p>
        </div>
        <div class="grid sm:grid-cols-2 gap-4">
            <div class="space-y-4">
                <div class="bg-white border border-gray-200/80 rounded-xl overflow-hidden shadow-sm transition-all">
                    <button @click="activeFaq === 1 ? activeFaq = null : activeFaq = 1" class="w-full flex justify-between items-center p-5 text-left font-medium text-gray-900 hover:bg-gray-50/50 transition-colors focus:outline-none text-sm sm:text-base">
                        <span>How Do I Order?</span>
                        <svg class="w-4 h-4 transition-transform text-gray-500" :class="{'rotate-180': activeFaq === 1}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 1" x-transition class="p-5 border-t border-gray-100 bg-gray-50/50 text-gray-600 text-sm leading-relaxed">
                        Select the electronic product you want, click the "Add to Cart" button, then follow the checkout guide to fill in the shipping data and complete the payment securely.
                    </div>
                </div>

                <div class="bg-white border border-gray-200/80 rounded-xl overflow-hidden shadow-sm transition-all">
                    <button @click="activeFaq === 2 ? activeFaq = null : activeFaq = 2" class="w-full flex justify-between items-center p-5 text-left font-medium text-gray-900 hover:bg-gray-50/50 transition-colors focus:outline-none text-sm sm:text-base">
                        <span>How Do I Return Goods?</span>
                        <svg class="w-4 h-4 transition-transform text-gray-500" :class="{'rotate-180': activeFaq === 2}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 2" x-transition class="p-5 border-t border-gray-100 bg-gray-50/50 text-gray-600 text-sm leading-relaxed">
                        If the received goods have a manufacturing defect or do not match, you can apply for a return within 7x24 hours after the goods are received through the complaint page in your account by attaching an unboxing video.
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="bg-white border border-gray-200/80 rounded-xl overflow-hidden shadow-sm transition-all">
                    <button @click="activeFaq === 3 ? activeFaq = null : activeFaq = 3" class="w-full flex justify-between items-center p-5 text-left font-medium text-gray-900 hover:bg-gray-50/50 transition-colors focus:outline-none text-sm sm:text-base">
                        <span>How Much is the Shipping Fee?</span>
                        <svg class="w-4 h-4 transition-transform text-gray-500" :class="{'rotate-180': activeFaq === 3}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 3" x-transition class="p-5 border-t border-gray-100 bg-gray-50/50 text-gray-600 text-sm leading-relaxed">
                        Shipping costs are calculated automatically at checkout based on the total weight of the package, dimensions, and the shipping location distance from our warehouse in Padang.
                    </div>
                </div>

                <div class="bg-white border border-gray-200/80 rounded-xl overflow-hidden shadow-sm transition-all">
                    <button @click="activeFaq === 4 ? activeFaq = null : activeFaq = 4" class="w-full flex justify-between items-center p-5 text-left font-medium text-gray-900 hover:bg-gray-50/50 transition-colors focus:outline-none text-sm sm:text-base">
                        <span>How Do I Use a Discount?</span>
                        <svg class="w-4 h-4 transition-transform text-gray-500" :class="{'rotate-180': activeFaq === 4}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="activeFaq === 4" x-transition class="p-5 border-t border-gray-100 bg-gray-50/50 text-gray-600 text-sm leading-relaxed">
                        Enter your promo code in the "Discount Code/Voucher" column available on the shopping cart summary page before making the final payment process.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#0f4c3a] text-white pt-16 pb-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
            <div class="space-y-4">
                <a href="#" class="flex items-center gap-2 text-2xl font-bold tracking-tight text-white">
                    <span>Electro<span class="text-amber-200">Shop</span></span>
                </a>
                <p class="text-gray-300 text-sm leading-relaxed">Jalan Limau Manis<br>Padang City, West Sumatra</p>
                <div class="flex items-center gap-4 pt-2">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .77.1v-3.5a6.44 6.44 0 0 0-3.08-.08 6.35 6.35 0 0 0-3.23 11.06 6.34 6.34 0 0 0 10.84-4.57V6.92a8.17 8.17 0 0 0 4.81 1.57v-1.8z"/></svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold text-base mb-4 tracking-wide text-amber-200">Services</h4>
                <ul class="space-y-2.5 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition-colors">Customer Help</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Payment Methods</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Track Shipment</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Official Warranty</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-base mb-4 tracking-wide text-amber-200">Company</h4>
                <ul class="space-y-2.5 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Terms & Conditions</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-base mb-4 tracking-wide text-amber-200">Operating Hours</h4>
                <ul class="space-y-2.5 text-sm text-gray-300">
                    <li>Monday - Friday: 09:00 - 21:00 WIB</li>
                    <li>Saturday: 10:00 - 18:00 WIB</li>
                    <li>Sunday / National Holiday: Closed</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white/10 pt-8 text-center text-xs text-white">
            &copy; 2026 ElectroShop. All rights reserved. Built with Tailwind CSS and Alpine.js.
        </div>
    </footer>

</body>
</html>