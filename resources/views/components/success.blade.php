@if (session()->getFlashData('success', null))
<div class="mb-4">
    <div class="alert alert-success">
        {{ session()->getFlashData('success') }}
    </div>
</div>
@endif