<section>
    <header class="mb-6">
        <h2 class="text-xl font-bold text-gray-900 tracking-tight">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500 leading-relaxed">
            {{ __('Ensure your account is using a long, random password to keep your administrator access secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-5">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="current_password" name="current_password" type="password" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-1.5" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="password" name="password" type="password" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-1.5" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm New Password')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-1.5" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <x-primary-button class="bg-[#0f4c3a] hover:bg-[#0c3e2f] text-white font-bold px-6 py-3 rounded-xl transition-all shadow-sm shadow-[#0f4c3a]/20 text-sm cursor-pointer">
                {{ __('Update Password') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-xs font-semibold text-green-600 flex items-center gap-1"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    {{ __('Password updated successfully.') }}
                </p>
            @endif
        </div>
    </form>
</section>