@extends('layouts.layout')
@section('content')

{{-- Header Section --}}
<header class="bg-orange-200 text-orange-900 text-center py-4">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-whitegray- md:text-5xl lg:text-5xl">Sistem Inventori Kelab Kompang Irama</h1>
    <p class="mb-6 text-lg font-normal text-orange-700 lg:text-xl sm:px-16 xl:px-48">Untuk menguruskan inventori alat musik bagi Kelab Kompang Irama Kolej Vokasional Kuala Selangor. Klik butang di bawah untuk ke dashboard pengurusan</p>
    <a href="{{ route('inventory.index') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-blue-300">
        Lihat Peralatan
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</header>

{{-- Cards Collection --}}
<section class="py-8 flex justify-center flex-col md:flex-row">
    <div class="flex flex-col m-4 p-2 items-center bg-orange-300 border border-red-400 rounded-lg shadow-sm md:max-w-xl">
        <img class="object-cover w-full h-40 rounded-lg border-white" src="{{ asset('images/kompang-1.jpg') }}" alt="Tools">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Semak keadaan peralatan</h5>
            <p class="mb-3 font-normal text-gray-800">Pengurusan peralatan muzik merangkumi proses penyimpanan, penyelenggaraan, dan pemantauan penggunaan alat-alat muzik bagi memastikan ia sentiasa berada dalam keadaan baik dan bersedia untuk digunakan semasa latihan atau persembahan.</p>
        </div>
        <a href="{{ route('inventory.index') }}" class="inline-flex items-center justify-center mt-auto px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-blue-300">
            Semak Peralatan
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
    <div class="flex flex-col m-4 p-2 items-center bg-orange-300 border border-red-400 rounded-lg shadow-sm md:max-w-xl">
        <img class="object-cover w-full h-40 rounded-lg border-white" src="{{ asset('images/kostum-1.jpeg') }}" alt="Tools">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Semak keadaan pakaian</h5>
            <p class="mb-3 font-normal text-gray-800">Pengurusan pakaian bagi memastikan ia sentiasa berada dalam keadaan baik dan bersedia untuk digunakan semasa latihan atau persembahan.</p>
        </div>
        <a href="{{ route('inventory.index') }}" class="inline-flex items-center justify-center mt-auto px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-blue-300">
            Semak Pakaian
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</section>
@endsection