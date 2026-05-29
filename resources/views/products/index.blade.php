<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-8 bg-gray-50 min-h-screen">

        @if (session()->has('success'))
            <div class="mb-6">
                <x-alert message="{{ session('success') }}" />
            </div>
        @endif

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
            <div>
                <h2 class="font-extrabold text-3xl tracking-tight text-gray-900">List Products</h2>
                <p class="text-gray-550 mt-1 text-sm">Manage, edit, or add new items to the ElectroShop electronics catalog.</p>
            </div>
            <a href="{{ route('products.create') }}" class="inline-block">
                <button class="bg-[#0f4c3a] text-white font-semibold px-8 py-3 rounded-xl hover:bg-[#0c3e2f] transition-all shadow-sm shadow-[#0f4c3a]/20 text-sm flex items-center gap-2 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Add Product
                </button>
            </a>
        </div>

        @if($products->isEmpty())
            <div class="bg-white border border-gray-100 rounded-2xl p-12 text-center shadow-sm">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                <p class="text-gray-500 font-medium">No products found. Start by adding a new product!</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                        <div class="bg-gray-50 p-4 relative flex items-center justify-center min-h-[240px] max-h-[240px] overflow-hidden border-b border-gray-100/50">
                            <img src="{{ url('storage/' . $product->foto) }}" class="w-full h-full object-cover rounded-xl group-hover:scale-105 transition-transform duration-300" />
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between space-y-4">
                            <div>
                                <p class="text-xs text-gray-400 font-medium uppercase tracking-wider">ElectroShop Catalog</p>
                                <h4 class="font-bold text-gray-900 text-base mt-1 line-clamp-1">{{ $product->nama }}</h4>
                                <div class="mt-2">
                                    <span class="text-[#0f4c3a] font-bold text-lg">Rp. {{ number_format($product->harga) }}</span>
                                </div>
                                @if($product->deskripsi)
                                    <p class="text-xs text-gray-500 mt-2 line-clamp-2 leading-relaxed">{{ $product->deskripsi }}</p>
                                @endif
                            </div>
                            <a href="{{ route('products.edit', $product) }}" class="block w-full">
                                <button class="w-full bg-gray-50 text-gray-700 font-semibold py-2.5 rounded-xl text-sm border border-gray-100 hover:bg-[#0f4c3a] hover:text-white hover:border-[#0f4c3a] transition-all cursor-pointer flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    Edit Details
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 bg-white border border-gray-100 p-4 rounded-xl shadow-sm">
                {{ $products->links() }}
            </div>
        @endif

    </div>
</x-app-layout>