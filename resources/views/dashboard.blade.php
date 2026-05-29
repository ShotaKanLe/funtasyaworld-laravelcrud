<x-app-layout>
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-3xl border border-gray-100">
                <div class="p-8 sm:p-12 bg-gradient-to-br from-[#0f4c3a]/5 via-transparent to-transparent flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div class="space-y-2">
                        <p class="text-xs font-semibold text-[#0f4c3a] uppercase tracking-widest">Admin Dashboard</p>
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                            Welcome Back to <span class="text-[#0f4c3a]">ElectroShop</span>
                        </h1>
                        <p class="text-gray-500 text-sm max-w-md">
                            {{ __("You're successfully logged in! Manage your store products, monitor inventory, and update catalog status seamlessly from here.") }}
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('products.index') }}" class="inline-block bg-[#0f4c3a] text-white font-medium px-6 py-3 rounded-xl hover:bg-[#0c3e2f] transition-all shadow-sm shadow-[#0f4c3a]/20 text-sm">
                            Manage Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>