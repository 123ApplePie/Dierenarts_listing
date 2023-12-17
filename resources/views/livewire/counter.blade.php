{{-- <div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
</div> --}}

<form wire:submit="save">
    <input type="text" wire:model.live.debounce.150ms="title">
 
    <input type="text" wire:model="content">
 
    <button type="submit">Save</button>
</form>
