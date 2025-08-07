@extends('layouts.layout')
@section('content')

{{-- Header Section --}}
<header class="bg-orange-200 text-orange-900 text-center py-4">
    <h1 class="text-xl font-bold">Tambah Item Inventori</h1>
</header>

{{-- Add Form Section --}}
<section class="bg-orange-100 text-orange-900 py-2">
    <div class="py-8 px-4 mx-auto max-w-2xl">
        <form action="{{ route('inventory.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="serial_number" class="block mb-2 text-sm font-medium text-gray-900">Nombor Siri</label>
                    <input type="text" name="serial_number" id="serial_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                        <option selected="">-- Pilih Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}">{{ ucfirst($category) }}</option>
                    @endforeach
                    </select>
                </div>
                <div>
                    <label for="condition" class="block mb-2 text-sm font-medium text-gray-900">Keadaaan</label>
                    <select id="condition" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                        <option selected="">-- Pilih Keadaan --</option>
                    @foreach($conditions as $condition)
                        <option value="{{ $condition }}">{{ ucfirst($condition) }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="sm:col-start-2">
                    <label for="date_obtained" class="block mb-2 text-sm font-medium text-gray-900">Tarikh Peroleh (DD/MM/YYYY)</label>
                    <input type="text" name="date_obtained" id="date_obtained" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="cth. 21/02/2024" required="">
                </div>
                <div class="sm:col-span-2">
                    <label for="notes" class="block mb-2 text-sm font-medium text-gray-900">Catatan</label>
                    <textarea id="notes" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="(opsional)"></textarea>
                </div>
            </div>

            {{-- Form Button --}}
            <div class="flex justify-end mt-6 space-x-4">
                <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-orange-600 rounded-lg hover:bg-orange-700 focus:outline-none focus:ring-4 focus:ring-orange-300">
                    Tambah
                </button>
                <a href="{{ route('inventory.index') }}" class="px-5 py-2.5 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200">Batal</a>
            </div>
        </form>
    </div>
</section>

@endsection