<x-guest-layout>
    <div class="mb-5 text-center">
        <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">Forgot Password</h2>
    </div>

    <div class="mb-5 text-sm text-gray-500 leading-relaxed bg-gray-50 p-4 rounded-2xl border border-gray-100">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <x-auth-session-status class="mb-4" :status=\"session('status')\" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-sm font-semibold text-gray-700" />
            <x-text-input id="email" class="block mt-1.5 w-full border border-gray-200 rounded-xl focus:border-[#0f4c3a] focus:ring focus:ring-[#0f4c3a]/10 transition-all bg-gray-50/30" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <div class="flex items-center justify-between pt-2">
            <a class="text-sm font-semibold text-gray-500 hover:text-gray-700 transition-colors rounded-md focus:outline-none" href="{{ route('login') }}">
                {{ __('Back to login') }}
            </a>

            <x-primary-button class="bg-[#0f4c3a] hover:bg-[#0c3e2f] text-white font-bold px-5 py-3 rounded-xl transition-all shadow-sm shadow-[#0f4c3a]/20 text-sm cursor-pointer">
                {{ __('Email Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>