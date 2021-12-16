<div>
    <x-button to="{{ __('/api/export/student/pdf/download?' . http_build_query(['q' => request()->get('q', null)])) }}" class="mx-1 btn-primary text-light" target="_blank" rel="noopener noreferrer">
        {{ __('PDF') }}
    </x-button>
    <x-button to="{{ __('/api/export/student/excel/download?' . http_build_query(['q' => request()->get('q', null)])) }}" class="mx-1 btn-primary text-light" target="_blank" rel="noopener noreferrer">
        {{ __('Excel') }}
    </x-button>
    <x-button to="{{ __('/api/export/student/word/download?' . http_build_query(['q' => request()->get('q', null)])) }}" class="mx-1 btn-primary text-light" target="_blank" rel="noopener noreferrer">
        {{ __('Word') }}
    </x-button>
    <x-button to="{{ __('/api/export/student/pdf/preview?' . http_build_query(['q' => request()->get('q', null)])) }}" class="mx-1 btn-primary text-light" target="_blank" rel="noopener noreferrer">
        {{ __('Preview') }}
    </x-button>
</div>
