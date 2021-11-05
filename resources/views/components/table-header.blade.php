<th wire:click="setOrderField('{{$name}}')">
    {{ $label }}
    @if($name === $field)
    {{_('true')}}
    @endif


</th>
