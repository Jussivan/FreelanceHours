<div x-data="{ showModal: @entangle('modal') }" x-show="showModal">
    <div x-ref="modal"
        class="
            fixed inset-0 rounded-lg w-full max-w-md
            bg-[#181826] shadow-lg text-white
            border-[#1E1E2C] border p-8
            flex flex-col gap-6 z-50
        " 
        @keydown.escape.window="showModal = false"> <!-- Fechar com ESC -->
        
        <div>
            <button class="bg-[#1E1E2C] hover:bg-[#313145] transition duration-300 ease-in-out p-[8px] rounded-md"
                wire:click="$set('modal', false)">
                <x-ui.icons.x class="w-[32px] h-[32px] text-white" />
            </button>
        </div>
        <div class="flex flex-col gap-6">
            {{ $slot }}
        </div>
    </div>
    
    <!-- Background Blur Overlay -->
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm" @click="showModal = false"></div>
</div>