<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">Reset Password</h2>
        <p class="text-sm text-gray-500 mt-1">Set a secure new password for your account</p>
    </div>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="email" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="password" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm New Password')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="password_confirmation" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
        </div>

        <div class="pt-2">
            <x-primary-button class="justify-center w-full bg-[#0f4c3a] hover:bg-[#0c3e2f] text-white font-bold py-3 rounded-xl transition-all shadow-sm shadow-[#0f4c3a]/20 text-sm cursor-pointer">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>