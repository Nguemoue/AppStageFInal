@props(["icon","value","link"])
<a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ $link??'#!' }}">
    <span class="mdi {{ $icon }}"></span>
    {{ $value??$slot }}
</a>
