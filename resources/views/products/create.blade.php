<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4 py-8 bg-gray-50 min-h-screen">

        <div class="flex items-center gap-3 mt-4 mb-8">
            <a href="{{ route('products.index') }}" class="text-gray-400 hover:text-[#0f4c3a] transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            </a>
            <div>
                <h2 class="font-extrabold text-3xl tracking-tight text-gray-900">Add Product</h2>
                <p class="text-gray-500 text-sm mt-0.5">Fill in the technical details and media information to publish a new electronic device.</p>
            </div>
        </div>

        <div class="mt-4" x-data="{ imageUrl: '/storage/noimage.png' }">
            <form enctype="multipart/form-data" method="POST" action="{{ route('products.store') }}" class="flex flex-col lg:flex-row gap-8 items-start">
                @csrf

                <div class="w-full lg:w-5/12 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm sticky top-24">
                    <p class="text-sm font-semibold text-gray-700 mb-3">Media Showcase Image</p>
                    <div class="bg-gray-50 rounded-xl overflow-hidden min-h-[340px] flex items-center justify-center p-4 border border-dashed border-gray-200">
                        <img :src="imageUrl" class="max-h-96 w-full object-contain rounded-lg" alt="Product Showcase Preview" />
                    </div>
                </div>

                <div class="w-full lg:w-7/12 bg-white p-6 sm:p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                    <div>
                        <x-input-label for="foto" :value="__('Upload Photo')" class="text-sm font-semibold text-gray-700" />
                        <div class="mt-1.5 relative">
                            <x-text-input accept="image/*" id="foto" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-[#0f4c3a]/10 file:text-[#0f4c3a] hover:file:bg-[#0f4c3a]/20 border border-gray-200 rounded-xl p-2 bg-gray-50/50"
                                type="file" name="foto" :value="old('foto')" required
                                @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                        </div>
                        <x-input-error :messages="$errors->get('foto')" class="mt-1.5" />
                    </div>

                    <div>
                        <x-input-label for="nama" :value="__('Product Name')" class="text-sm font-semibold text-gray-700" />
                        <x-text-input id="nama" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="text" name="nama"
                            :value="old('nama')" required placeholder="e.g. ProBook Ultrathin 14" />
                        <x-input-error :messages="$errors->get('nama')" class="mt-1.5" />
                    </div>

                    <div>
                        <x-input-label for="harga" :value="__('Price (IDR)')" class="text-sm font-semibold text-gray-700" />
                        <div class="mt-1.5 relative rounded-xl shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="text-gray-400 font-medium text-sm">Rp</span>
                            </div>
                            <x-text-input id="harga" class="block w-full pl-10 border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="text" name="harga"
                                :value="old('harga')" x-mask:dynamic="$money($input, ',')" required placeholder="12.500.000" />
                        </div>
                        <x-input-error :messages="$errors->get('harga')" class="mt-1.5" />
                    </div>

                    <div>
                        <x-input-label for="deskripsi" :value="__('Detailed Description')" class="text-sm font-semibold text-gray-700" />
                        <x-text-area id="deskripsi" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30 min-h-[120px]" type="text"
                            name="deskripsi" placeholder="Write full specifications here...">{{ old('deskripsi') }}</x-text-area>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-1.5" />
                    </div>

                    <div class="pt-2">
                        <x-primary-button class="justify-center w-full bg-[#0f4c3a] hover:bg-[#0c3e2f] text-white font-bold py-3.5 rounded-xl transition-all shadow-sm shadow-[#0f4c3a]/20 tracking-wide text-sm cursor-pointer">
                            {{ __('Publish Product') }}
                        </x-primary-button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</x-app-layout>