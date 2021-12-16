<x-layouts.main title="Edit {{ $student->name }}">
    <x-container>
        <div class="col-md-8">
            <x-form method="POST">
                <x-card>
                    <x-slot name="title">
                        {{ __('Edit' . ' '. $student->name) }}
                    </x-slot>
        
                    <x-errors :errors="session()->getFlashData('errors', [])" />
        
                    <x-inputarea>
                        <x-input type="number" for="{{ __('NISN') }}" name="nisn" value="{{ $student->nisn }}" />
                    </x-inputarea>

                    <x-inputarea>
                        <x-input type="text" for="{{ __('Nama') }}" name="name" value="{{ $student->name }}" />
                    </x-inputarea>

                    <x-inputarea>
                        <x-input type="text" for="{{ __('Jurusan') }}" name="department" value="{{ $student->department }}" />
                    </x-inputarea>
                    
                    <x-inputarea>
                        <x-input type="text" for="{{ __('Alamat') }}" name="address" value="{{ $student->address }}" />
                    </x-inputarea>
        
                    <x-slot name="action">
                        <x-button class="btn-primary text-light">
                            {{ __('Update') }}
                        </x-button>
                    </x-slot>
                </x-card>
            </x-form>
        </div>
    </x-container>
</x-layouts.main>