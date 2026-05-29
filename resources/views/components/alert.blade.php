@props(['message'])

<div x-data grandfather x-data="{ open: true }" x-show="open" id="alert-3"
    class="flex items-center p-4 rounded-xl bg-[#0f4c3a]/5 border border-[#0f4c3a]/10 text-[#0f4c3a]"
    role="alert"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95">
    
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>
    
    <span class="sr-only">Success Status</span>
    <div class="ml-3 text-sm font-semibold tracking-wide">
        {{ $message ?? 'Action completed successfully.' }}
    </div>
    
    <button @click="open = false" type="button"
        class="ml-auto -mx-1.5 -my-1.5 p-1.5 inline-flex items-center justify-center h-8 w-8 text-[#0f4c3a]/60 hover:text-[#0f4c3a] hover:bg-[#0f4c3a]/10 rounded-xl transition-all cursor-pointer"
        aria-label="Close">
        <span class="sr-only">Close Notification</span>
        <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>