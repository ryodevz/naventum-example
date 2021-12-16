<x-container>
    <div class="col-md-10">
        
        {{ $links }}

        <div class="row">
            
            <div class="col-md-6 mb-4">
                
                {{ $search }}

            </div>
    
            <div class="col-md-6 mb-4">

                {{ $export }}

            </div>

        </div>

        {{ $slot }}
    </div>
</x-container>