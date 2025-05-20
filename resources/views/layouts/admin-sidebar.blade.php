<aside class="fixed top-0 left-0 h-full w-64 bg-white border-r border-gray-200 shadow-lg flex flex-col z-40">
    <div class="p-6 border-b">
        <a href="{{ route('dashboard') }}" class="text-xl font-bold text-gray-800">Admin Panel</a>
    </div>
    <nav class="flex-1 px-4 py-6">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.rooms.index') }}" class="block px-4 py-2 rounded hover:bg-gray-100 {{ request()->routeIs('admin.rooms.*') ? 'bg-gray-200 font-semibold' : '' }}">
                    Rooms
                </a>
            </li>
            {{-- <li>
                <a href="#" class="block px-4 py-2 rounded text-gray-400 cursor-not-allowed">
                    Tour Packages (coming soon)
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded text-gray-400 cursor-not-allowed">
                    Places to Visit (coming soon)
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded text-gray-400 cursor-not-allowed">
                    Gallery (coming soon)
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded text-gray-400 cursor-not-allowed">
                    Blog (coming soon)
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded text-gray-400 cursor-not-allowed">
                    Reviews (coming soon)
                </a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded text-gray-400 cursor-not-allowed">
                    Taldarpopup (coming soon)
                </a>
            </li> --}}
        </ul>
    </nav>
    <div class="p-4 border-t mt-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-gray-100 text-red-600">Logout</button>
        </form>
    </div>
</aside>
