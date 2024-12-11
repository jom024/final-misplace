<nav class="flex items-center justify-between p-4 h-24 sticky top-0 z-50 shadow-md px-16 bg-green-100">
        <!-- Logo -->
        <div class="flex-shrink-0 w-36 h-36 sm:w-64 sm:h-64 overflow-hidden">
            <a href="/"><x-logo-svg class="w-full h-full object-top"/></a>
        </div>

        <ul class="flex-grow justify-center space-x-16 hidden lg:flex">
            <li><x-nav-link href="/browse" ref="browse">Browse</x-nav-link></li>
            <li><x-nav-link href="/guidelines" ref="guidelines">Guidelines</x-nav-link></li>
            <li class="relative group">
           @auth
           @if(Auth::user()->role == 'user')

            <x-nav-link href="#">Items</x-nav-link>
            
            <!-- Dropdown Menu -->
            <div class="absolute hidden group-hover:block bg-gray-100 p-2 text-gray-800 shadow-md mt-2 rounded-lg w-64 hover:rounded-lg">
                <ul>
                    <li><x-nav-link href="/items/create/lost" class="p-4 block hover:rounded-lg">Report Lost Item</x-nav-link></li>
                    <li><x-nav-link href="/items/create/found" class="p-4 block hover:rounded-lg">Report Found Item</x-nav-link></li>
                </ul>
            </div>
        </li>
            @endif
        @endauth

            <li><x-nav-link href="/contact" ref="contact">Contact Us</x-nav-link></li>
        </ul>
         <!-- Mobile menu, show/hide based on menu state. -->
         <div class="-mr-2 flex lg:hidden">
          <!-- Mobile menu button -->
          <button id="menu-toggle" type="button" class="relative inline-flex items-center justify-center rounded-md bg-teal-800 p-2 text-gray-400 hover:bg-green-700 hover:text-white">
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        @auth
            <!-- Profile or Right-aligned Item -->
            <div class="hidden lg:flex items-center space-x-4">
                <form action="/logout" method="POST">
                    @csrf
                    
                    <button type="submit">
                        <x-logout-icon class="w-6 h-6 pe-2"/>
                    </button>
                </form>
                <div class="flex flex-col justify-end items-end">
                    <span class="font-semibold"><a class="uppercase" href="">{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}</a></span>
                    <span class="text-xs font-thin text-gray-400"><a href="">{{ Auth::user()->role == 'staff' ? 'Staff' : 'User' }}</a></span>                </div>
                <a href=""><img src="https://www.w3schools.com/w3images/avatar2.png" alt="Profile Picture" class="w-10 h-10 rounded-full"></a>
            </div>
        @endauth
    </nav>

    <x-mobile-nav/>
