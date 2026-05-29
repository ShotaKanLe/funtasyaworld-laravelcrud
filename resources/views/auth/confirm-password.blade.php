<x-guest-layout>
    <div class="mb-5 text-center">
        <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">Confirm Password</h2>
    </div>

    <div class="mb-5 text-sm text-gray-500 leading-relaxed bg-gray-50 p-4 rounded-2xl border border-gray-100">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="password" :value="__('Password')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="password" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <div class="pt-2">
            <x-primary-button class="justify-center w-full bg-[#0f4c3a] hover:bg-[#0c3e2f] text-white font-bold py-3 rounded-xl transition-all shadow-sm shadow-[#0f4c3a]/20 text-sm cursor-pointer">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>