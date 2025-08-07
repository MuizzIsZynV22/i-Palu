@extends('layouts.layout')
@section('content')

{{-- Header Section --}}
<header class="bg-orange-100 text-orange-900 text-center py-4">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-whitegray- md:text-5xl lg:text-5xl">Senarai Peralatan</h1>
    <a href="{{ route('inventory.create') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-orange-500 rounded-lg hover:bg-orange-800 focus:ring-4 focus:ring-blue-300 my-4">
        Tambah Item
        <svg class="w-6 h-6 text-white-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
        </svg>
    </a>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</header>

{{-- Items Table --}}
<section class="py-8 flex justify-center">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-orange-200">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombor Siri
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keadaan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tarikh Peroleh
                    </th>
                    <th colspan="3" scope="col" class="px-6 py-3">
                        -- Tindakan --
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">{{ $item->serial_number }}</th>
                    <td class="text-center">{{ ucfirst($item->category) }}</td>
                    <td class="text-center">{{ ucfirst($item->condition) }}</td>
                    <td class="text-center">{{ $item->date_obtained->format('d/m/Y') }}</td>
                    <td class="text-center">
                        <a href="{{ route('inventory.show', $item->serial_number) }}">View</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('inventory.edit', $item->serial_number) }}">Edit</a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('inventory.destroy', $item->serial_number) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Adakah anda pasti?')">Padam</button>
                        </form>
                    </td class="text-center">
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
