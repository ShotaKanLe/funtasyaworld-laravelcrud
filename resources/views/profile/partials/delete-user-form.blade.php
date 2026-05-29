<section class="space-y-6">
    <header>
        <h2 class="text-xl font-bold text-red-650 tracking-tight">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500 leading-relaxed">
            {{ __('Once your account is deleted, all of its dashboard resources and catalog data will be permanently deleted. Please back up any configurations before proceeding.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-50 text-red-600 border border-red-100 hover:bg-red-600 hover:text-white px-6 py-3 rounded-xl text-sm font-bold shadow-none transition-all cursor-pointer"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8 bg-white rounded-3xl">
            @csrf
            @method('delete')

            <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center text-red-500 mb-5">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>

            <h2 class="text-xl font-bold text-gray-900 tracking-tight">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-2 text-sm text-gray-500 leading-relaxed">
                {{ __('Once your account is deleted, all of its system metrics will be permanently cleared. Please enter your administrator password to confirm permanent deletion.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full sm:w-3/4 border border-gray-200 rounded-xl focus:border-red-500 focus:ring focus:ring-red-500/10 transition-all bg-gray-50/50"
                    placeholder="{{ __('Verify your account password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-1.5" />
            </div>

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