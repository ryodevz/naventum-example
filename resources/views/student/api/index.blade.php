<style>* {font-family: sans-serif}table>thead>tr>th{padding:10px;}table>tbody>tr>td{padding:10px;}</style>

<h1>Daftar siswa</h1>

<table border="1" style="border-collapse:  collapse;">
    <thead>
        <tr>
            <th>{{ __('#') }}</th>
            <th>{{ __('NISN') }}</th>
            <th>{{ __('Nama') }}</th>
            <th>{{ __('Jurusan') }}</th>
            <th>{{ __('Alamat') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->nisn }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->department }}</td>
            <td>{{ $student->address }}</td>
        </tr>
        @endforeach
    </tbody>
</table>