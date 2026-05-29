<section class="space-y-6">
    <x-danger-button x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-delete-product')"
        class="bg-red-50 text-red-650 border border-red-100 hover:bg-red-600 hover:text-white px-5 py-2.5 rounded-xl text-sm font-semibold shadow-none transition-all flex items-center gap-2 cursor-pointer">
        {{ __('Delete Product') }}
    </x-danger-button>

    <x-modal name="confirm-delete-product" focusable>
        <form method="post" action="{{ route('products.destroy', $product) }}" class="p-8 bg-white rounded-3xl">
            @csrf
            @method('DELETE')

            <h2 class="text-xl font-bold text-gray-900 tracking-tight">
                {{ __('Are you sure you want to delete this product?') }}
            </h2>

            <p class="mt-2 text-sm text-gray-500 leading-relaxed">
                {{ __('Once this product item is deleted, all of its recorded catalog data, images, and resources will be permanently wiped out from the system. This process cannot be undone.') }}
            </p>

            <div class="mt-8 flex justify-end gap-3 border-t border-gray-100 pt-5">
                <x-secondary-button x-on:click="$dispatch('close')" class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium transition-all text-sm shadow-none">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="px-5 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-white font-semibold transition-all text-sm shadow-none">
                    {{ __('Permanently Delete') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>