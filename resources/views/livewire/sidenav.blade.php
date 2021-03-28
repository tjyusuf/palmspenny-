	<div class="flex-col w-64 h-screen p-5  bg-primary border-r border-gray-light" :class="{'block': navbarIsOpen, 'hidden': ! navbarIsOpen, 'fixed': navbarIsOpen}" >
        <img src="{{ url(asset('logo.png')) }}">
        <div class="flex flex-col justify-between flex-1 mt-2">
            <nav>
                <a class="flex items-center px-4 py-2 mt-5 text-secondary transition-colors duration-200 transform rounded-md hover:bg-primary-light focus:outline-none focus:ring-1 focus:ring-secondary {{ request()->routeIs('dashboard') ? 'bg-primary-light text-primary hover:text-gray-light' : '' }}" href="{{ route('dashboard') }}" >
					<x-heroicon-o-chart-bar class="w-5 h-5"/>
                    <span class="mx-4 font-medium">Dashboard</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-secondary transition-colors duration-200 transform rounded-md hover:bg-primary-light focus:outline-none focus:ring-1 focus:ring-secondary {{ request()->routeIs('izisave') ? 'bg-primary-light text-primary hover:text-gray-light' : '' }}" href="{{ route('izisave') }}" >
                    <span class="w-5 h-5">&#8358;</span>
                    <span class="mx-4 font-medium">Izisave</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-secondary transition-colors duration-200 transform rounded-md hover:bg-primary-light focus:outline-none focus:ring-1 focus:ring-secondary {{ request()->routeIs('peersusu') ? 'bg-primary-light text-primary hover:text-gray-light' : '' }}" href="{{ route('peersusu') }}" >
					<x-heroicon-o-users class="w-5 h-5"/>
                    <span class="mx-4 font-medium">Peersusu</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-secondary transition-colors duration-200 transform rounded-md hover:bg-primary-light focus:outline-none focus:ring-1 focus:ring-secondary {{ request()->routeIs('groups') ? 'bg-primary-light text-primary hover:text-gray-light' : '' }}" href="{{ route('groups') }}" >
					<x-heroicon-o-user-group class="w-5 h-5"/>
                    <span class="mx-4 font-medium">Groups</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-secondary transition-colors duration-200 transform rounded-md hover:bg-primary-light focus:outline-none focus:ring-1 focus:ring-secondary {{ request()->routeIs('wallet') ? 'bg-primary-light text-primary hover:text-gray-light' : '' }}" href="{{ route('wallet') }}" >
					<x-heroicon-o-cash class="w-5 h-5"/>
                    <span class="mx-4 font-medium">Wallet</span>
                </a>

                <hr class="my-5 border-primary-light" />              

                <a class="flex items-center px-4 py-2 mt-5 text-secondary transition-colors duration-200 transform rounded-md hover:bg-primary-light focus:outline-none focus:ring-1 focus:ring-secondary {{ request()->routeIs('account') ? 'bg-primary-light text-primary hover:text-gray-light' : '' }}" href="{{ route('account') }}" >
					<x-heroicon-o-user class="w-5 h-5"/>
                    <span class="mx-4 font-medium">Account</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-secondary transition-colors duration-200 transform rounded-md hover:bg-primary-light focus:outline-none focus:ring-1 focus:ring-secondary {{ request()->routeIs('faqs') ? 'bg-primary-light text-primary hover:text-gray-light' : '' }}" href="{{ route('faqs') }}" >
					<x-heroicon-o-information-circle class="w-5 h-5"/>
                    <span class="mx-4 font-lg">FAQs</span>
                </a>
            </nav>

        </div>
    </div>

