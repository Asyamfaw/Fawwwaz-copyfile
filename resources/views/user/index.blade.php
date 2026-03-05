<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title>E-Library</title>
</head>
<body class="bg-slate-950 min-h-screen">

    @if (session('error'))
        <script>
            Swal.fire({ title: "Errors", text: "{{ session('error') }}", icon: "error" });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({ title: "Success", text: "{{ session('success') }}", icon: "success" });
        </script>
    @endif

    <x-navbar></x-navbar>

    <div class="max-w-7xl mx-auto px-6 py-10">

        {{-- Page Header --}}
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-white">Koleksi Buku</h1>
            <p class="text-slate-400 text-sm mt-1">Temukan dan pinjam buku favoritmu</p>
        </div>

        {{-- Book Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($books as $book)
                <a href="{{ route('books.detail', $book->id) }}" class="group bg-slate-900 border border-slate-700/50 rounded-2xl overflow-hidden hover:border-emerald-500/30 hover:shadow-lg hover:shadow-emerald-500/5 transition duration-300 flex flex-col">

                    {{-- Cover --}}
                    <div class="relative h-56 bg-slate-800 overflow-hidden">
                        <img
                            src="{{ asset('storage/' . $book->image) }}"
                            alt="{{ $book->judul }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                        <span class="absolute top-3 right-3 bg-emerald-500/90 text-white text-xs font-semibold px-2.5 py-1 rounded-lg">
                            {{ $book->genre->name_genres }}
                        </span>
                        <span class="absolute bottom-3 left-3 text-slate-300 text-xs">
                            {{ $book->tahun_terbit }}
                        </span>
                    </div>

                    {{-- Info --}}
                    <div class="p-4 flex flex-col flex-1 space-y-2">

                        {{-- Judul --}}
                        <h2 class="text-white font-semibold text-sm leading-snug group-hover:text-emerald-400 transition">
                            {{ $book->judul }}
                        </h2>

                        {{-- Sinopsis --}}
                        <p class="text-slate-500 text-xs leading-relaxed line-clamp-3">
                            {{ $book->sinopsis }}
                        </p>

                        {{-- Author --}}
                        <div class="flex items-center gap-1.5 pt-1 flex-1 items-end">
                            <svg class="w-3.5 h-3.5 text-slate-500 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-slate-400 text-xs">{{ $book->author->name_author }}</span>
                        </div>

                        {{-- Footer --}}
                        <div class="pt-2 border-t border-slate-700/50">
                            <span class="text-emerald-400 text-xs font-medium group-hover:underline">Lihat Detail →</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</body>
</html>