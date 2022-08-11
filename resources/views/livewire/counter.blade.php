<div class="text-center bg-light">
    <div class="h1 para-desc bg-dark text-light mb-5">Counter Application</div>

    <div class="h1 mb-5">{{$count}}</div>
    <div class="d-flex justify-content-around">

        <button class="btn btn-primary h1" wire:click="decrement">-</button>
        <button class="btn btn-secondary h1" wire:click="clear">Clear</button>
        <button class="btn btn-success h1" wire:click="increment">+</button>

    </div>
</div>