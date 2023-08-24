<div>
    <h1>Counter Component</h1>
    <h3>{{$num}}</h3>
    <button wire:click="plus" >Plus</button>
    <button wire:click="minus" >Minus</button>
    <hr>
{{--    <input type="text" wire:model="name">--}}
{{--    <input type="text" wire:model.lazy="name">--}}
    <input type="text" wire:model.debounce.500ms="name">
    {{$name}}

</div>
