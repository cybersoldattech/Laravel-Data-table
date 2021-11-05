<th wire:click="setOrderField('{{$name}}')">
    {{ $label }}
    @if($name === $field)
    @endif
</th>
