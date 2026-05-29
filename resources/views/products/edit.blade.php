<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-8 bg-gray-50 min-h-screen">

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mt-4 mb-8 border-b border-gray-200/60 pb-6">
            <div class="flex items-center gap-3">
                <a href="{{ route('products.index') }}" class="text-gray-400 hover:text-[#0f4c3a] transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                </a>
                <div>
                    <h2 class="font-extrabold text-3xl tracking-tight text-gray-900">Edit Product</h2>
                    <p class="text-gray-500 text-sm mt-0.5">Modify information metrics or update the current stock snapshot image.</p>
                </div>
            </div>
            <div class="sm:pt-0 pt-2">
                @include('products.partials.delete-product')
            </div>
        </div>

        <div class="mt-4" x-data="{ imageUrl: '/storage/{{ $product->foto }}' }">
            <form enctype="multipart/form-data" method="POST" action="{{ route('products.update', $product) }}"
                class="flex flex-col lg:flex-row gap-8 items-start">
                @csrf
                @method('PUT')

                <div class="w-full lg:w-5/12 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm sticky top-24">
                    <p class="text-sm font-semibold text-gray-700 mb-3">Current Display Asset</p>
                    <div class="bg-gray-50 rounded-xl overflow-hidden min-h-[340px] flex items-center justify-center p-4 border border-gray-200">
                        <img :src="imageUrl" class="max-h-96 w-full object-contain rounded-lg" alt="Product Target Image" />
                    </div>
                </div>

                <div class="w-full lg:w-7/12 bg-white p-6 sm:p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                    <div>
                        <x-input-label for="foto" :value="__('Change Product Photo')" class="text-sm font-semibold text-gray-700" />
                        <div class="mt-1.5 relative">
                            <x-text-input accept="image/*" id="foto" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-[#0f4c3a]/10 file:text-[#0f4c3a] hover:file:bg-[#0f4c3a]/20 border border-gray-200 rounded-xl p-2 bg-gray-50/50"
                                type="file" name="foto" :value="$product->foto"
                                @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                        </div>
                        <x-input-error :messages="$errors->get('foto')" class="mt-1.5" />
                    </div>

                    <div>
                        <x-input-label for="nama" :value="__('Product Name')" class="text-sm font-semibold text-gray-700" />
                        <x-text-input id="nama" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="text" name="nama"
                            :value="$product->nama" required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-1.5" />
                    </div>

                    <div>
                        <x-input-label for="harga" :value="__('Price (IDR)')" class="text-sm font-semibold text-gray-700" />
                        <div class="mt-1.5 relative rounded-xl shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="text-gray-400 font-medium text-sm">Rp</span>
                            </div>
                            <x-text-input id="harga" class="block w-full pl-10 border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="text" name="harga"
                                :value="$product->harga" x-mask:dynamic="$money($input, ',')" required />
                        </div>
                        <x-input-error :messages="$errors->get('harga')" class="mt-1.5" />
                    </div>

                    <div>
                        <x-input-label for="deskripsi" :value="__('Detailed Description')" class="text-sm font-semibold text-gray-700" />
                        <x-text-area id="deskripsi" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30 min-h-[120px]" type="text"
                            name="deskripsi">{{ $product->deskripsi }}</x-text-area>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-1.5" />
                    </div>

                    <div class="pt-2">
                        <x-primary-button class="justify-center w-full bg-[#0f4c3a] hover:bg-[#0c3e2f] text-white font-bold py-3.5 rounded-xl transition-all shadow-sm shadow-[#0f4c3a]/20 tracking-wide text-sm cursor-pointer">
                            {{ __('Update Changes') }}
                        </x-primary-button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</x-app-layout>