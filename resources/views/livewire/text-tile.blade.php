<x-dashboard-tile :position="$position">
    @if (! empty($title))
    <p class="headline">{{ $title }}</p>
    @endif
    <p>{{ $text }}</p>
</x-dashboard-tile>
