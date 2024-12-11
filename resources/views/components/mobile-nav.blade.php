<!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden lg:hidden" id="mobile-menu">
    @auth
      <div class="border-y bg-teal-600 border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <a href=""><img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""></a>
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white"><a href="#">{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}</a></div>
            <div class="text-sm font-medium text-gray-400"><a href="#">{{Auth::user()->role == 'staff' ? 'Staff' : 'User'}}</a></div>
          </div>
          <form action="/logout" method="POST" class="relative ml-auto flex">
            @csrf
            <button type="submit" class="self-end shrink-0 rounded-lg bg-teal-800 p-1 text-gray-400 hover:text-white hover:bg-teal-500">
              Sign out
            </button>
          </form>
        </div>
    </div>
    @endauth
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3 bg-teal-100 border-b border-gray-700">
        <!-- Current: "bg-teal-900 text-teal-100", Default: "text-teal-300 hover:bg-teal-400 hover:text-teal-100" -->
        <x-mobile-navlink href="/browse" ref="browse">Browse</x-mobile-navlink>
        <x-mobile-navlink href="/guidelines" ref="guidelines">Guidelines</x-mobile-navlink>
        @auth <x-mobile-navlink href="/items" ref="items">Items</x-mobile-navlink> @endauth
        <x-mobile-navlink href="/contact" ref="contact">Contact Us</x-mobile-navlink>
      </div>
      

</div>