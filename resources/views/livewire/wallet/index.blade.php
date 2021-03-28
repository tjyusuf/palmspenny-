<div>
	@livewire('wallet.page-header')

    <div class="container mx-auto p-5">

		<div class="flex flex-col gap-3">
			<div class="">

				<div class="border border-gray-light rounded-md md:mt-0 w-full  bg-white shadow">
					<div class="p-5" >
						<h5 class="text-sm text-primary uppercase">Balance</h5>
						<h2 class="text-5xl text-secondary-dark">N0.00</h2>
					</div>
					<div class="flex border-t border-gray-light divide-x divide-gray-light text-primary">
						<a class="flex-1 text-center py-3 px-5 font-semibold" wire:click="topupWallet"  wire:loading.class="border-gray-light">
							<x-heroicon-o-plus class="w-5 h-5 mx-auto"/>
							Topup
						</a>
						<a class="flex-1 text-center py-3 px-5 font-semibold">
							<x-heroicon-o-credit-card class="w-5 h-5 mx-auto"/>
							Withdraw
						</a>
					</div>								
				</div>
			</div>
    		<div class="">

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

    </div>
    <x-jet-dialog-modal wire:model="showTopupWalletModal">
    	<x-slot name="title">
    		<h3 class="text-4xl text-primary mb-1" x-text="quicksave"> Quick save</h3>
    		<h5 class="text-sm">Select payment method</h5>
    	</x-slot>
    	<x-slot name="content">
            <p class="flex py-3 px-5 border border-gray-100 rounded text-gray-500">
            	<x-heroicon-o-credit-card class="h-6 w-6 rounded-full"/>
            	<span class="font-medium ml-2">Pay with a new card</span>
            	<span class=""><x-heroicon-o-chevron-right class="h-6 w-6 rounded-full"/></span>
            	
            </p>

    	</x-slot>
    	<x-slot name="footer">
    	</x-slot>    	

    </x-jet-dialog-modal>


</div>
