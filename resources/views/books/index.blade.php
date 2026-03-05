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

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-xl font-bold text-white">Buku</h1>
            <p class="text-slate-400 text-sm mt-0.5">Kelola semua koleksi buku</p>
        </div>
        <a href="{{ route('books.create') }}" class="flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-white text-sm font-medium px-4 py-2 rounded-xl transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Buku
        </a>
    </div>

    {{-- Grid Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        @foreach ($books as $book)
            <div class="bg-slate-900 border border-slate-700/50 rounded-2xl overflow-hidden hover:border-slate-600 transition group">

                {{-- Book Cover --}}
                <div class="relative h-48 bg-slate-800 overflow-hidden">
                    <img
                        src="{{ asset('storage/' . $book->image) }}"
                        alt="{{ $book->judul }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                    >
                    <div class="absolute top-3 right-3">
                        <span class="bg-emerald-500/90 text-white text-xs font-medium px-2.5 py-1 rounded-lg">
                            {{ $book->genre->name_genres }}
                        </span>
                    </div>
                </div>

                {{-- Book Info --}}
                <div class="p-4 space-y-3">
                    <div>
                        <h2 class="text-white font-semibold text-sm leading-snug">{{ $book->judul }}</h2>
                        <p class="text-slate-400 text-xs mt-0.5">{{ $book->author->name_author }} · {{ $book->tahun_terbit }}</p>
                    </div>
                    <p class="text-slate-500 text-xs leading-relaxed line-clamp-2">{{ $book->sinopsis }}</p>

                    {{-- Actions --}}
                    <div class="flex items-center gap-2 pt-1">
                        <a href="{{ route('books.detail', $book->id) }}" class="flex-1 text-center text-xs font-medium text-blue-400 hover:text-blue-300 bg-blue-500/10 hover:bg-blue-500/20 border border-blue-500/20 py-1.5 rounded-lg transition">
                            Detail
                        </a>
                        <a href="{{ route('books.edit', $book->id) }}" class="flex-1 text-center text-xs font-medium text-slate-300 hover:text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 py-1.5 rounded-lg transition">
                            Edit
                        </a>
                        <form action="{{ route('books.delete', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="tombol(this)" class="text-xs font-medium text-red-400 hover:text-red-300 bg-red-500/10 hover:bg-red-500/20 border border-red-500/20 px-3 py-1.5 rounded-lg transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function tombol(btn) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    btn.closest('form').submit();
                }
            });
        }
    </script>

@endsection