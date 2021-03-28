<div class="mt-2 w-full md:w-auto" >

    <x-jet-dialog-modal x-show="quicksaveSecondModal">
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
