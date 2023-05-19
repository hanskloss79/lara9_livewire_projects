<div class="d-flex flex-column align-items-center">
    <div class="d-flex p-5 mx-auto justify-content-center align-items-center gap-3">
        <input type="number" wire:model="number1" placeholder="Pierwsza liczba"
            class="form-control rounded-0">
        <select class="form-select rounded-0 w-6r" wire:model="action">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="number" wire:model="number2" placeholder="Druga liczba"
            class="form-control rounded-0">
        <button wire:click='calculate' class="btn btn-primary" {{ $disabled ? 'disabled': ''}}>=
        </button>
    </div>
    <p class="text-3xl">{{$result}}</p>
</div>
