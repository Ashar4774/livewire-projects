<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="text" wire:model='input_field'>
            <button wire:click='get_form_data' class="bg-indigo-600 px-4 py-2 hover:bg-indigo-600 rounded text-white">Show</button>
            <p class="3xl">{{ $display }}</p>
        </div>
    </div>
</div>
