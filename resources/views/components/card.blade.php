<div class="card">
    <div class="card-header">
        
        {{ $title }}

    </div>
    <div class="card-body">

        {{ $slot }}

        @if (isset($action))
            <div class="text-end">

                {{ $action }}

            </div>
        @endif
    </div>
</div>