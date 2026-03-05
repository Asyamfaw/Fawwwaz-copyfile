@extends('layouts.app')

@section('content')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    @if (session('success'))
        <script>
            Swal.fire({ title: "Success", text: "{{ session('success') }}", icon: "success" });
        </script>
    @endif

    <div class="min-h-[80vh] flex flex-col items-center justify-center">

        {{-- Header --}}
        <div class="mb-6 text-center">
            <h1 class="text-xl font-bold text-white">Detail Author</h1>
            <p class="text-slate-400 text-sm mt-0.5">Informasi lengkap penulis</p>
        </div>

        {{-- Card --}}
        <div class="bg-slate-900 border border-slate-700/50 rounded-2xl px-8 py-8 w-full max-w-md space-y-5">

            {{-- Avatar --}}
            <div class="flex items-center gap-4 pb-5 border-b border-slate-700/50">
                <div class="w-14 h-14 bg-emerald-500/10 border border-emerald-500/20 rounded-xl flex items-center justify-center text-emerald-400 text-xl font-bold">
                    {{ strtoupper(substr($penulis->name_author, 0, 1)) }}
                </div>
                <div>
                    <p class="text-white font-semibold text-lg">{{ $penulis->name_author }}</p>
                    <p class="text-slate-400 text-sm">Penulis</p>
                </div>
            </div>

            {{-- Detail rows --}}
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-slate-400 text-sm">Nama Penulis</span>
                    <span class="text-white text-sm font-medium">{{ $penulis->name_author }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-slate-400 text-sm">Umur</span>
                    <span class="text-white text-sm font-medium">{{ $penulis->age }} tahun</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-slate-400 text-sm">Alamat</span>
                    <span class="text-white text-sm font-medium">{{ $penulis->alamat }}</span>
                </div>
            </div>

            {{-- Back button --}}
            <div class="pt-4 border-t border-slate-700/50">
                <a href="{{ route('penulis.index') }}" class="flex items-center gap-2 text-sm text-slate-400 hover:text-white transition px-4 py-2.5 rounded-xl hover:bg-slate-800 w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali
                </a>
            </div>

        </div>
    </div>

@endsection