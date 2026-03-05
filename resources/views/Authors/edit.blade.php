@extends('layouts.app')

@section('content')

    <div class="min-h-[80vh] flex flex-col items-center justify-center">

        {{-- Header --}}
        <div class="mb-6 text-center">
            <h1 class="text-xl font-bold text-white">Edit Author</h1>
            <p class="text-slate-400 text-sm mt-0.5">Mengedit data {{ $edit->name_author }}</p>
        </div>

        {{-- Card Form --}}
        <div class="bg-slate-900 border border-slate-700/50 rounded-2xl px-8 py-8 w-full max-w-md">
            <form action="{{ route('penulis.update', $edit->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Nama Author</label>
                    <input
                        type="text"
                        name="name_author"
                        value="{{ $edit->name_author }}"
                        required
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Umur</label>
                    <input
                        type="number"
                        name="age"
                        value="{{ $edit->age }}"
                        required
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Alamat</label>
                    <input
                        type="text"
                        name="alamat"
                        value="{{ $edit->alamat }}"
                        required
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition"
                    />
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <button type="submit" class="bg-emerald-500 hover:bg-emerald-400 text-white font-semibold text-sm px-5 py-2.5 rounded-xl transition">
                        Simpan Perubahan
                    </button>
                    <a href="{{ route('penulis.index') }}" class="text-sm text-slate-400 hover:text-white transition px-5 py-2.5 rounded-xl hover:bg-slate-800">
                        Batal
                    </a>
                </div>
            </form>
        </div>

    </div>

@endsection