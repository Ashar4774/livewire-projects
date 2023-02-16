<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="text" wire:model='list_input'>
            <button wire:click='' class="bg-indigo-600 px-4 py-2 hover:bg-indigo-600 rounded text-white">Add</button>
            <p class="3xl">{{ $list_input }}</p>
        </div>
    </div>
</div>
