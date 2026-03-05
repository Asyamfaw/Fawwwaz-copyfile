@extends('layouts.app')

@section('content')

    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <div class="min-h-[80vh] flex flex-col items-center justify-center">

        {{-- Header --}}
        <div class="mb-6 text-center">
            <h1 class="text-xl font-bold text-white">Tambah Author</h1>
            <p class="text-slate-400 text-sm mt-0.5">Tambahkan penulis buku baru</p>
        </div>

        {{-- Card Form --}}
        <div class="bg-slate-900 border border-slate-700/50 rounded-2xl px-8 py-8 w-full max-w-md">
            <form action="{{ route('penulis.store') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Nama Author</label>
                    <input
                        type="text"
                        name="name_author"
                        required
                        placeholder="Nama lengkap penulis"
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Umur</label>
                    <input
                        type="number"
                        name="age"
                        required
                        placeholder="contoh: 35"
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Alamat</label>
                    <input
                        type="text"
                        name="alamat"
                        required
                        placeholder="Alamat penulis"
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition"
                    />
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <button type="submit" class="bg-emerald-500 hover:bg-emerald-400 text-white font-semibold text-sm px-5 py-2.5 rounded-xl transition">
                        Simpan
                    </button>
                    <a href="{{ route('penulis.index') }}" class="text-sm text-slate-400 hover:text-white transition px-5 py-2.5 rounded-xl hover:bg-slate-800">
                        Batal
                    </a>
                </div>
            </form>
        </div>

    </div>

@endsection