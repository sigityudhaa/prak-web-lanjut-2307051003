@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<div class="max-w-4xl mx-auto mt-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Daftar Mahasiswa</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">NPM</th>
                    <th class="py-3 px-4 text-left">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-4">{{ $user['id'] }}</td>
                    <td class="py-3 px-4">{{ $user['nama'] }}</td>
                    <td class="py-3 px-4">{{ $user['npm'] }}</td>
                    <td class="py-3 px-4">{{ $user['nama_kelas'] }}</td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
