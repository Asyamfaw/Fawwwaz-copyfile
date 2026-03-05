@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="mb-5 bg-red-500/10 border border-red-500/20 rounded-xl px-4 py-3">
            <ul class="space-y-1">
                @foreach ($errors->all() as $item)
                    <li class="text-red-400 text-sm flex items-center gap-2">
                        <span class="w-1 h-1 bg-red-400 rounded-full inline-block"></span>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="min-h-[80vh] flex flex-col items-center justify-center">

        {{-- Header --}}
        <div class="mb-6 text-center">
            <h1 class="text-xl font-bold text-white">Edit Buku</h1>
            <p class="text-slate-400 text-sm mt-0.5">Ubah informasi buku yang sudah ada</p>
        </div>

        {{-- Card Form --}}
        <div class="bg-slate-900 border border-slate-700/50 rounded-2xl px-8 py-8 w-full max-w-2xl">
            <form action="{{ route('books.update', $books->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                {{-- Judul --}}
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Judul Buku</label>
                    <input type="text" name="judul" id="Judul" value="{{ $books->judul }}" required
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" />
                </div>

                {{-- Sinopsis --}}
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Sinopsis</label>
                    <input type="text" name="sinopsis" id="Sinopsis" value="{{ $books->sinopsis }}" required
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" />
                </div>

                {{-- Tahun Terbit --}}
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" id="TahunTerbit" value="{{ $books->tahun_terbit }}" required
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" />
                </div>

                {{-- Genre --}}
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Genre</label>
                    <select name="genre_id" id="genre"
                        class="w-full bg-slate-800 border border-slate-700 text-white rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition">
                        <option value="">-- Pilih Genre --</option>
                        @foreach ($genres as $item)
                            <option value="{{ $item->id }}" {{ $books->genre_id == $item->id ? 'selected' : '' }}>
                                {{ $item->name_genres }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Author --}}
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Author</label>
                    <select name="author_id" id="author"
                        class="w-full bg-slate-800 border border-slate-700 text-white rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition">
                        <option value="">-- Pilih Author --</option>
                        @foreach ($authors as $key)
                            <option value="{{ $key->id }}" {{ $books->author_id == $key->id ? 'selected' : '' }}>
                                {{ $key->name_author }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Book Cover --}}
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5">Cover Buku</label>
                    <input type="file" name="image" id="imgInput"
                        class="w-full bg-slate-800 border border-slate-700 text-slate-400 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-medium file:bg-emerald-500/20 file:text-emerald-400 hover:file:bg-emerald-500/30" />
                    <img src="" id="previewImg" alt="Preview" class="mt-3 w-32 h-44 object-cover rounded-xl border border-slate-700 hidden" />
                </div>

                {{-- Buttons --}}
                <div class="flex items-center gap-3 pt-2">
                    <button type="submit" class="bg-emerald-500 hover:bg-emerald-400 text-white font-semibold text-sm px-5 py-2.5 rounded-xl transition">
                        Simpan Perubahan
                    </button>
                    <a href="{{ route('books.index') }}" class="text-sm text-slate-400 hover:text-white transition px-5 py-2.5 rounded-xl hover:bg-slate-800">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('imgInput').addEventListener('change', function (event) {
            const preview = document.getElementById('previewImg');
            const file = event.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        });
    </script>

@endsection