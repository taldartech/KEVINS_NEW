<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div x-data="{ tab: 'welcome' }" class="flex min-h-screen">
        <aside class="w-64 bg-white border-r border-gray-200 shadow-lg flex flex-col h-full">
            <nav class="flex-1 px-4 py-6">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.taldarpopups.index') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 {{ request()->routeIs('admin.taldarpopups.*') ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 4h1v-4h1m-7 4H5v-4h1m12 4h1v-4h1" /></svg>
                            Ad-PopUp
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.rooms.index') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 {{ request()->routeIs('admin.rooms.*') ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10V6a2 2 0 012-2h12a2 2 0 012 2v4M4 10v10a2 2 0 002 2h12a2 2 0 002-2V10M4 10h16" /></svg>
                            Special Tour Packages
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.rooms.index') }}" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 {{ request()->routeIs('admin.rooms.*') ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10V6a2 2 0 012-2h12a2 2 0 012 2v4M4 10v10a2 2 0 002 2h12a2 2 0 002-2V10M4 10h16" /></svg>
                            Room Details & Information
                        </a>
                    </li>
                    <li>
                        <a href="#" @click.prevent="tab = 'tour'" :class="tab === 'tour' ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700'" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2h5" /></svg>
                            Tour Packages
                        </a>
                    </li>
                    <li>
                        <a href="#" @click.prevent="tab = 'places'" :class="tab === 'places' ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700'" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zm0 0v6m0 0l-3 3m3-3l3 3" /></svg>
                            Places to Visit
                        </a>
                    </li>
                    <li>
                        <a href="#" @click.prevent="tab = 'gallery'" :class="tab === 'gallery' ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700'" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7zm0 0l7 7 4-4 5 5" /></svg>
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="#" @click.prevent="tab = 'blog'" :class="tab === 'blog' ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700'" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z" /></svg>
                            Blog Section
                        </a>
                    </li>
                    <li>
                        <a href="#" @click.prevent="tab = 'reviews'" :class="tab === 'reviews' ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700'" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.036 6.29a1 1 0 00.95.69h6.631c.969 0 1.371 1.24.588 1.81l-5.37 3.905a1 1 0 00-.364 1.118l2.036 6.29c.3.921-.755 1.688-1.54 1.118l-5.37-3.905a1 1 0 00-1.175 0l-5.37 3.905c-.784.57-1.838-.197-1.54-1.118l2.036-6.29a1 1 0 00-.364-1.118L2.293 11.717c-.783-.57-.38-1.81.588-1.81h6.631a1 1 0 00.95-.69l2.036-6.29z" /></svg>
                            Reviews
                        </a>
                    </li>
                    <li>
                        <a href="#" @click.prevent="tab = 'popup'" :class="tab === 'popup' ? 'bg-blue-50 text-blue-700 font-bold' : 'text-gray-700'" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all hover:bg-blue-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 4h1v-4h1m-7 4H5v-4h1m12 4h1v-4h1" /></svg>
                            Advertisement Popup
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        @include('partials.sf_booking_form')
        <main class="flex-1 p-10">
            <template x-if="tab === 'welcome'">
                <div class="bg-white rounded shadow p-8">
                    <h3 class="text-2xl font-bold mb-4">Welcome, Admin!</h3>
                    <p class="mb-2">Use the sidebar to manage Room Details and information. Additional sections (Tour Packages, Places to Visit, Gallery, Blog, Reviews, Advertisement Popup) will be available soon.</p>
                </div>
            </template>
            <template x-if="tab === 'tour'">
                <div class="bg-white rounded shadow p-8">
                    <h3 class="text-xl font-bold mb-4">Tour Packages</h3>
                    <p>Manage and update tour packages here. (Feature coming soon)</p>
                </div>
            </template>
            <template x-if="tab === 'places'">
                <div class="bg-white rounded shadow p-8">
                    <h3 class="text-xl font-bold mb-4">Places to Visit</h3>
                    <p>Manage and update places to visit here. (Feature coming soon)</p>
                </div>
            </template>
            <template x-if="tab === 'gallery'">
                <div class="bg-white rounded shadow p-8">
                    <h3 class="text-xl font-bold mb-4">Gallery</h3>
                    <p>Manage and update gallery images here. (Feature coming soon)</p>
                </div>
            </template>
            <template x-if="tab === 'blog'">
                <div class="bg-white rounded shadow p-8">
                    <h3 class="text-xl font-bold mb-4">Blog Section</h3>
                    <p>Manage and update blog posts here. (Feature coming soon)</p>
                </div>
            </template>
            <template x-if="tab === 'reviews'">
                <div class="bg-white rounded shadow p-8">
                    <h3 class="text-xl font-bold mb-4">Reviews</h3>
                    <p>Manage and update reviews here. (Feature coming soon)</p>
                </div>
            </template>
            <template x-if="tab === 'popup'">
                <div class="bg-white rounded shadow p-8">
                    <h3 class="text-xl font-bold mb-4">Advertisement Popup</h3>
                    <p>Manage and update advertisement popups here. (Feature coming soon)</p>
                </div>
            </template>
        </main>
    </div>
</x-app-layout>
