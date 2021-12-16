@if (isset($for))
    <label class="form-label">{{ $for }}</label>
@endif
<input class="form-control" {{ $attributes }} />