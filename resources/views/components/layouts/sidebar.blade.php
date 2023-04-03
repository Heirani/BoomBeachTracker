<div x-data="{ open: true }">
    <div class="fixed">
        <button class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-indigo-800 focus:outline-none focus:bg-gray-100 focus:text-gray-500"

        x-on:click="open = ! open;window.livewire.emit('toggle_sidebarShow')"


        >
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex fill-indigo-600" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <div class="fixed bottom-0 top-[42px] w-60 text-gray-600 bg-white shadow-r- pt-3 shadow-[0_35px_60px_-15px_rgba(0,0,0,0.8)]" x-show="open" x-transition.duration.500ms x-transition.scale.origin.left>

        <x-layouts.sidebar-item active="{{ request()->routeIs('defenses.*') }}">
            <a href="{{ route('admin.defenses.index') }}" class="block w-full">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"  class="float-left"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><g><path d="M10.5,15H8v-3h2.5V9.5h3V12H16v3h-2.5v2.5h-3V15z M19,8v11c0,1.1-0.9,2-2,2H7c-1.1,0-2-0.9-2-2V8c0-1.1,0.9-2,2-2h10 C18.1,6,19,6.9,19,8z M17,8H7v11h10V8z M18,3H6v2h12V3z" class="{{ request()->routeIs('produits.*') ? 'fill-white' : 'fill-gray-500' }}"/></g></g></svg>
                <span class="ml-3">Défenses</span>
            </a>
        </x-layouts.sidebar-item>

        <x-layouts.sidebar-item active="{{ request()->routeIs('supports.*') }}">
            <a href="#" class="block w-full">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" class="float-left"><rect height="24" width="24" fill="none"/><g><path d="M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1C4.76,14.04,4.39,14,4,14 c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2 c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85C21.93,14.21,20.99,14,20,14 c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9 c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61C18,15.21,17.32,14.13,16.24,13.65z M8.07,16 c0.09-0.23,0.13-0.39,0.91-0.69c0.97-0.38,1.99-0.56,3.02-0.56s2.05,0.18,3.02,0.56c0.77,0.3,0.81,0.46,0.91,0.69H8.07z M12,8 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,8,12,8 M12,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3 C15,7.34,13.66,6,12,6L12,6z" class="bg-transparent {{ request()->routeIs('fournisseurs.*') ? 'fill-white' : 'fill-gray-500' }}" /></g></svg>
                <span class="ml-3">Support</span>
            </a>
        </x-layouts.sidebar-item>

        <x-layouts.sidebar-item active="{{ request()->routeIs('troops.*') }}">
            <a href="#" class="block w-full">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" class="float-left"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" class="{{ request()->routeIs('commandes.*') ? 'fill-white' : 'fill-gray-500' }}"/></svg>
                <span class="ml-3">Troupes</span>
            </a>
        </x-layouts.sidebar-item>

        <x-layouts.sidebar-item active="{{ request()->routeIs('heroes.*') }}">
            <a href="#" class="block w-full">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24" class="float-left"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" class="{{ request()->routeIs('receptions.*') ? 'fill-white' : 'fill-gray-500' }}"/></g></svg>
                <span class="ml-3">Héros</span>
            </a>
        </x-layouts.sidebar-item>
    </div>
</div>
