<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? config('app')->name }}</title>
    <link rel="stylesheet" href="{{ assets('/css/bootstrap.min.css') }}" />
</head>

<body>

    <x-navbar />

    {{ $slot }}

    <div class="text-center my-5">
        {{ __('Build with') }} <span class="text-primary fw-bold"><x-logo /></span>
    </div>

    <script src="{{ assets('/js/bootstrap.min.js') }}"></script>
</body>

</html>