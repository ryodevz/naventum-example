<x-layouts.main title="Create">
    <x-container>
        <div class="col-md-8">
            <x-form method="POST">
                <x-card>
                    <x-slot name="title">
                        {{ __('Tambah data') }}
                    </x-slot>
        
                    <x-errors :errors="session()->getFlashData('errors', [])" />
        
                    <x-inputarea>
                        <x-input type="number" for="{{ __('NISN') }}" name="nisn" />
                    </x-inputarea>

                    <x-inputarea>
                        <x-input type="text" for="{{ __('Nama') }}" name="name" />
                    </x-inputarea>

                    <x-inputarea>
                        <x-input type="text" for="{{ __('Jurusan') }}" name="department" />
                    </x-inputarea>
                    
                    <x-inputarea>
                        <x-input type="text" for="{{ __('Alamat') }}" name="address" />
                    </x-inputarea>
        
                    <x-slot name="action">
                        <x-button class="btn-primary text-light">
                            {{ __('Create') }}
                        </x-button>
                    </x-slot>
                </x-card>
            </x-form>
        </div>
    </x-container>
</x-layouts.main>