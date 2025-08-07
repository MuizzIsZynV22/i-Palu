@extends('layouts.layout')
@section('content')

{{-- Header Section --}}
<header class="bg-orange-200 text-orange-900 text-center py-4">
    <h1 class="text-xl font-bold">Edit Item</h1>
</header>

{{-- Edit Form Section --}}
<section class="bg-orange-50 text-orange-900 py-2">
    <div class="py-8 px-4 mx-auto max-w-2xl">
        <form action="{{ route('inventory.update', $inventory->serial_number) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                {{-- Serial Number --}}
                <div class="sm:col-span-2">
                    <label for="serial_number" class="block mb-2 text-sm font-medium text-gray-900">Nombor Siri</label>
                    <input type="text" name="serial_number" id="serial_number" 
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5" 
                           value="{{ old('serial_number', $inventory->serial_number) }}" required>
                    @error('serial_number')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Category --}}
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                    <select id="category" name="category" 
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ old('category', $inventory->category) == $category ? 'selected' : '' }}>
                                {{ ucfirst($category) }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Condition --}}
                <div>
                    <label for="condition" class="block mb-2 text-sm font-medium text-gray-900">Keadaan</label>
                    <select id="condition" name="condition"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5" required>
                        <option value="">-- Pilih Keadaan --</option>
                        @foreach($conditions as $condition)
                            <option value="{{ $condition }}" {{ old('condition', $inventory->condition) == $condition ? 'selected' : '' }}>
                                {{ ucfirst($condition) }}
                            </option>
                        @endforeach
                    </select>
                    @error('condition')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Date Obtained --}}
                <div class="sm:col-span-2">
                    <label for="date_obtained" class="block mb-2 text-sm font-medium text-gray-900">Tarikh Diperolehi (DD/MM/YYYY)</label>
                    <input type="text" name="date_obtained" id="date_obtained" 
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5" 
                           value="{{ old('date_obtained', $inventory->date_obtained->format('d/m/Y')) }}" required>
                    @error('date_obtained')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Notes --}}
                <div class="sm:col-span-2">
                    <label for="notes" class="block mb-2 text-sm font-medium text-gray-900">Catatan</label>
                    <textarea id="notes" name="notes" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500">{{ old('notes', $inventory->notes) }}</textarea>
                    @error('notes')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Form Buttons --}}
            <div class="flex justify-end mt-6 space-x-4">
                <a href="{{ route('inventory.index') }}" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200">
                    Batal
                </a>
                <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-orange-600 rounded-lg hover:bg-orange-700 focus:outline-none focus:ring-4 focus:ring-orange-300">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</section>

@endsection