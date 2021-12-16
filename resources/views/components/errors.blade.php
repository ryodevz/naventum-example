@if (count($errors))
    <div class="mb-2">
        @foreach ($errors as $error)
            <div class="text-danger">{{ $error }}</div>
        @endforeach
    </div>
@endif