<div class="p-16 flex justify-center gap-6 item-center">
    <button class="bg-indigo-600 px-4 py-2 hover:bg-indigo-600 rounded text-white" wire:click="decrement">-</button>
    <span>{{ $count }}</span>
    <button class="bg-indigo-600 px-4 py-2 hover:bg-indigo-600 rounded text-white" wire:click="increment">+</button>
</div>
