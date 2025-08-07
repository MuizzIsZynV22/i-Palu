@extends('layouts.layout')
@section('content')

{{-- Header Section --}}
<header class="bg-orange-200 text-orange-900 text-center py-4">
    <h1 class="text-xl font-bold">Detail Item</h1>
</header>

{{-- Detail Card Section --}}
<section class="bg-orange-100 text-orange-900 py-8">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            {{-- Card Header --}}
            <div class="bg-orange-200 px-6 py-4 border-b border-orange-200">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold">
                        <span class="font-normal">Nombor Siri:</span> {{ $inventory->serial_number }}
                    </h2>
                    <span class="bg-orange-200 text-orange-800 text-m font-semibold px-2.5 py-0.5 rounded">Keadaan: {{ ucfirst($inventory->condition) }}</span>
                </div>
            </div>

            {{-- Card Body --}}
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-6">
                    {{-- Left Column --}}
                    <div>
                        <div class="mb-4">
                            <h3 class="text-sm font-semibold text-gray-500">Kategori</h3>
                            <p class="mt-1 text-lg font-medium">{{ ucfirst($inventory->category) }}</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="text-sm font-semibold text-gray-500">Tarikh Diperolehi</h3>
                            <p class="mt-1 text-lg font-medium">{{ $inventory->date_obtained->format('d/m/Y') }}</p>
                        </div>
                    </div>

                    {{-- Right Column --}}
                    <div>
                        <div class="mb-4">
                            <h3 class="text-sm font-semibold text-gray-500">Catatan</h3>
                            <p class="mt-1 text-gray-700 whitespace-pre-line">{{ $inventory->notes ?? 'Tiada catatan' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Footer --}}
            <div class="bg-orange-100 px-6 py-3 flex justify-end space-x-3">
                <a href="{{ route('inventory.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-gray-100 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                    Kembali
                </a>
                <a href="{{ route('inventory.edit', $inventory->serial_number) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-orange-400 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                    Edit
                </a>
            </div>
        </div>
    </div>
</section>

@endsection