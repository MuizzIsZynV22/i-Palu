@extends('layouts.layout')
@section('content')

<!-- Header Section -->
<header class="bg-orange-200 text-white text-center py-4 bg-cover bg-center h-60">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-whitegray- md:text-5xl lg:text-5xl">Sistem Inventori Kelab Kompang Irama</h1>
    <p class="mb-6 text-lg font-normal text-gray-200 lg:text-xl sm:px-16 xl:px-48">Untuk menguruskan inventori alat musik bagi Kelab Kompang Irama Kolej Vokasional Kuala Selangor. Klik butang di bawah untuk ke dashboard pengurusan</p>
    <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-blue-300">
        Lihat Peralatan
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</header>

@endsection