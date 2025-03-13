@props(['label' => 'uri' , "uri" => "#"])
<li>
    <a wire:current="bg-base-200" wire:navigate.hover href="{{ $uri }}">{{ $label }}</a>
</li>
