@php

use Naventum\Framework\Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

@endphp
<x-layouts.main title="Students">
    <x-welcome>
        <x-slot name="links">
            <x-button to="/student/create" class="btn-primary text-light mb-4">{{ __('Tambah data') }}</x-button>
        </x-slot>

        <x-slot name="search">
            <x-form method="GET">
                <x-input name="q" placeholder="Cari . . ." value="{{ request()->get('q', null) }}" />
            </x-form>
        </x-slot>
        
        <x-slot name="export">
            <x-student.exportlinks />
        </x-slot>
    
        <x-card>
            <x-slot name="title">
                {{ __('Students') }}
            </x-slot>
    
            <x-success />
    
            <x-table>
                <x-slot name="header">
                    <tr>
                        <th>{{ __('#') }}</th>
                        <th>{{ __('NISN') }}</th>
                        <th>{{ __('Nama') }}</th>
                        <th>{{ __('Jurusan') }}</th>
                        <th>{{ __('Alamat') }}</th>
                        <th>{{ __('Aksi') }}</th>
                    </tr>
                </x-slot>
    
                @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nisn }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->department }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a class="text-primary" href="/student/{{ $student->id }}/edit">Edit</a>
                        <a class="text-danger" href="/student/{{ $student->id }}/delete">Hapus</a>
                    </td>
                </tr>
                @endforeach
    
            </x-table>
        </x-card>
    </x-welcome>
</x-layouts.main>