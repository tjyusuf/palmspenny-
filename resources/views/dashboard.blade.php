<x-app-layout>
    @livewire('page-header')


    <div class="container mx-auto p-5">

		<div class="flex gap-4 overflow-x-auto mb-2 md:mb-0">





		</div>

        <div>
        	<div class="flex flex-col md:flex-row gap-3 md:mb-2">
        		<div class="py-5 px-10 w-full md:w-2/5 rounded-md border border-secondary text-primary-dark m-2 md:m-0 bg-white">
        			<p class="text-4xl font-semibold">&#8358;</p>
        			<p class="break-words">Your money is your army and each Naira is a soldier, never semd it where it will be reduced to nothing. Put your money to work and earn 5-10% bonuses.</p>
        			<a href="/izisave">
        				<x-jet-button class="w-full mt-2 py-3 font-medium text-center">Start saving now</x-jet-button>
        			</a>
        		</div>
        		<div class="w-full md:w-3/5  mb-3 md:mb-0">

			        <table class="min-w-full bg-white rounded-md divide-y divide-primary-light shadow-sm">
			          <thead class="bg-">
			            <tr>
			              <th scope="col" class="p-3 text-left text-xs text-primary" colspan="3"> 
			              	Recent Transactions	
			              </th>
			            </tr>
			          </thead>
			          <tbody class="divide-y divide-gray-light">
			            <tr>
			              <td class="p-3 whitespace-nowrap">
			                <p class="text-sm text-gray">
			                	Quick save to izisave
			                	<span class="text-xs font-medium">12:58</span>
			                </p> 			                
			              </td>
			              <td class="font-medium text-success">
			                  <x-heroicon-o-trending-up class="h-4 w-auto"/>
			              </td>
			              <td class="p-3 whitespace-nowrap text-sm font-medium text-success">
				                &#8358;2,500
			              </td>
			            </tr>
			            <tr>
			              <td class="p-3 whitespace-nowrap">
			                <p class="text-sm text-gray">
			                	Wallet withrawal
			                	<span class="text-xs font-medium">Yesterday</span>
			                </p> 			                
			              </td>
			              <td class="font-medium text-danger">
			                  <x-heroicon-o-trending-down class="h-4 w-auto"/>
			              </td>
			              <td class="p-3 whitespace-nowrap text-sm font-medium text-danger">
				                 &#8358;10,500
			              </td>
			            </tr>
			            <tr>
			              <td class="p-3 whitespace-nowrap">
			                <p class="text-sm text-gray">
			                	Agent deposit
			                	<span class="text-xs font-medium">Thursday</span>
			                </p> 			                
			              </td>
			              <td class="font-medium text-success">
			                  <x-heroicon-o-trending-up class="h-4 w-auto"/>
			              </td>
			              <td class="p-3 whitespace-nowrap text-sm font-medium text-success">
				                 &#8358;15,000
			              </td>
			            </tr>

			            <tr>
			              <td class="px-6 py-2 text-primary-light text-center text sm" colspan="3">
			                View more activities
			              </td>
			            </tr>

			            <!-- More items... -->
			          </tbody>
			        </table>        			

        		</div>
			</div>        		

        	<div class="flex flex-col items-stretch md:flex-row gap-3">
        		<div class="flex-1">

					<div class="border border-gray-light rounded-md md:mt-0 w-full  bg-white shadow">
						<div class="p-5" >
							<h5 class="text-sm text-primary uppercase">Palmspenny Group Balance</h5>
							<h2 class="text-5xl text-gray">N0.00</h2>
						</div>
						<div class="flex border-t border-gray-light divide-x divide-gray-light text-primary">
							<a class="flex-1 text-center py-3 px-5 font-semibold">
								<x-heroicon-o-plus-circle class="w-5 h-5 mx-auto"/>
								Create Group
							</a>
							<a class="flex-1 text-center py-3 px-5 font-semibold">
								<x-heroicon-o-user-group class="w-5 h-5 mx-auto"/>
								Join Group
							</a>
						</div>								
					</div>
        			
        		</div>	
        		<div class="flex-1">

					<div class="border border-gray-light rounded-md md:mt-0 w-full  bg-white shadow">
						<div class="p-5 pb-2" >
							<h5 class="text-sm text-primary uppercase mb-2">Palmspenny Peersusu</h5>
							

							<div class="flex -space-x-1 overflow-hidden">
							  <img class="inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							  <img class="inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							  <img class="inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
							  <img class="inline-block h-4 w-4 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
							</div>
							<h5 class="text-xs text-gray-500">Members 4/5</h5>
							<h5 class="text-sm text-primary">
								<span>N10,000/Weekly</span>
								<span class="float-right">Target: N50,000</span>
								<p class="clear-both"></p>
							</h5>


						</div>
						<div class="flex border-t border-gray-50 divide-x divide-gray-100 text-primary">
							<a class="flex-1 text-center py-3 px-5 font-semibold">
								<x-heroicon-o-search-circle class="w-5 h-5 mx-auto"/>
								Explore
							</a>
							<a class="flex-1 text-center py-3 px-5 font-semibold">
								<x-heroicon-o-information-circle class="w-5 h-5 mx-auto"/>
								Join Peersusu
							</a>
						</div>								
					</div>
        			
        		</div>	
        		
        	</div>

	  	


        </div>
    </div>

</x-app-layout>
