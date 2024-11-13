<nav x-data="{ open: false }" class="bg-[#FCF8F3] border-b p-4 ">
    <div class="max-w-7xl mx-auto flex justify-between  items-center">
        <div class="flex items-center gap-8 text-[#3e3121] font-bold">
             <!-- Logo -->
        <a href="{{ route('home') }}" class="text-xl font-bold text-[#f56839] ">
            <img src="{{ asset('storage/images/products/logo.png') }}" class="w-32 h-12" alt="logo"> 
             
           </a>
           <a href="{{ route('users') }}" class="pt-2">Users  </a>
           <a href="{{ route('products') }}" class="pt-2">Products </a>
        </div>
       

   <div>
          <!-- Auth Links or User Dropdown -->
          <div class="flex items-center space-x-4">
            @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 focus:outline-none">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-1 w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">

                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            @else
                <a href="{{ route('login') }}" class="text-[#3e3121] ">Log in</a>
                <a href="{{ route('register') }}" class="text-[#3e3121] border-2 border-[#3e3121] rounded-lg px-3 py-2">Register</a>
            @endauth
        </div>
   </div>
  
    </div>
</nav>
