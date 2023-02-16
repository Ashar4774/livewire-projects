<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model='number1' placeholder="Number 1" >
            <select id="" wire:model='operators' class="w-24">
                <option value="" disabled>Select Operand</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" wire:model='number2' placeholder="Number 2" >
            <button wire:click='calculate' class="bg-indigo-600 px-4 py-2 hover:bg-indigo-600 rounded text-white" {{ $disabled ? 'disabled' : '' }}>=</button>

            <p class="3xl">{{ $result }}</p>
        </div>
    </div>
</div>
