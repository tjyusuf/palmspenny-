<div class="mt-2 w-full md:w-auto" >

    <x-jet-button class="w-full md:w-auto">
    	Quick Save
    </x-jet-button>



    <x-jet-dialog-modal wire:model="quicksaveModal">
    	<x-slot name="title">
    		<h3 class="text-4xl text-primary mb-1" x-text="quicksave">  Quick Save</h3>
    		<h5 class="text-sm"> Enter an amount and a destination you are saving to</h5>
    	</x-slot>
    	<x-slot name="content">
            <x-jet-label for="amount" value="{{ __('Amount') }}" class="text-lg"/>
            <x-jet-input id="amount" class="block mt-1 mb-2 w-full" type="text" name="phone" :value="old('phone')" required placeholder="5,000"/>

            <x-jet-label for="destination" value="{{ __('Destination') }}" class="text-lg"/>
            <select class="w-full border border-gray-100 rounded active:outline-none focus:outline-none" id="destination">
            	<option>Izisave</option>
            	<option>Peersusu</option>
            	<option>Group</option>
            </select>


    	</x-slot>
    	<x-slot name="footer">
            <x-jet-button class="py-3 text-md w-full md:w-auto text-center">
            	Proceed
            </x-jet-button>
           
    	</x-slot>
    	

    </x-jet-dialog-modal>


</div>
