<div>


	<nav class="bg-white shadow-sm">
	  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
	    <div class="relative flex items-center justify-between h-16">

	      <div class="flex ">
	        <button  @click="navbarIsOpen = ! navbarIsOpen" 
	          class="text-primary hover:text-secondary focus:outline-none text-primary" 
	          >	          
	          <x-heroicon-o-menu class="h-6 w-6"/>
	        </button>

	      </div>

	      <div class="flex-1 flex items-center justify-center ">
	        <div class="flex-shrink-0 flex items-center">
	          	<a >
		          <img class="block h-8 w-auto" src="{{ url(asset('icon.png')) }}   " alt="{{ config('app.name') }}">
		      	</a>
	        </div>
	      </div>
	      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

	        <button class="bg-white p-1 rounded-full text-primary b-1 hover:text-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary">
	          <span class="sr-only">View notifications</span>
	          <!-- Heroicon name: outline/bell -->
				<x-heroicon-o-bell class="h-6 w-6 animate-pulse"/>
	        </button>
	     

	        <!-- Profile dropdown -->
	        <div class="ml-3 relative" x-data="{ userAvatarMenuIsOpen: false }">
	          <div>

	            <button type="button" class="flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary" id="userAvatar" 
	            @click="userAvatarMenuIsOpen = !userAvatarMenuIsOpen"
	            @click.away="userAvatarMenuIsOpen = false">
	              <span class="sr-only">Open user menu</span>
					<x-heroicon-o-user class="w-8 h-8 rounded-full text-primary"/>
	            </button>
	          </div>


	          <div x-show="userAvatarMenuIsOpen" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none " role="menu" aria-orientation="vertical" aria-labelledby="userAvatar" id="userAvatarMenu">
	            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
	            <a href="{{ route('logout') }}"
	                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
	                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a> 

	                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                    @csrf
	                </form>                        
	          </div>

	        </div>

	      </div>
	    </div>
	  </div>

	</nav>



</div>
