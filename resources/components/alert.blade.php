<!-- resources/views/components/alert.blade.php -->
<div class="alert alert-{{ $type }} alert-dismissible fade show animate__animated {{ $animateEnter }}"
    role="alert"
    style="position: fixed; z-index: {{ $zIndex }}; top: {{ $offset['y'] }}px; right: {{ $offset['x'] }}px;"
    data-delay="{{ $delay }}"
    data-timer="{{ $timer }}"
    data-animate-exit="{{ $animateExit }}">
    {{ $slot }}
    @if($allowDismiss)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
