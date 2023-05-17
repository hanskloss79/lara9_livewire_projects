<div class="p-5 d-flex justify-content-center gap-4 align-items-center">
    <button wire:click='increment' class="btn btn-danger btn-lg">+</button>
    <span>{{$count}}</span>
    <button wire:click='decrement' class="btn btn-primary btn-lg">-</button>
</div>
