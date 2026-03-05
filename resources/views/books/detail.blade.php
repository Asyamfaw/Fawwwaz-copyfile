@extends('layouts.app')

@section('content')

    <div class="max-w-5xl mx-auto">

        {{-- Breadcrumb --}}
        <div class="mb-6 text-sm text-slate-500 flex items-center gap-2">
            <a href="{{ route('home') }}" class="hover:text-slate-300 transition">Home</a>
            <span>/</span>
            <a href="{{ route('books.index') }}" class="hover:text-slate-300 transition">Books</a>
            <span>/</span>
            <span class="text-slate-300 font-medium">{{ $detail->judul }}</span>
        </div>

        {{-- Main Card --}}
        <div class="bg-slate-900 border border-slate-700/50 rounded-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row">

                {{-- Left: Cover --}}
                <div class="md:w-2/5 bg-slate-800/50 p-8 flex items-center justify-center border-b md:border-b-0 md:border-r border-slate-700/50">
                    <div class="relative w-full max-w-xs">
                        <img
                            src="{{ asset('storage/'.$detail->image) }}"
                            alt="Sampul Buku"
                            class="w-full h-auto rounded-xl shadow-2xl border border-slate-700"
                        >
                        <span class="absolute top-3 right-3 bg-emerald-500/90 text-white text-xs font-semibold px-3 py-1 rounded-lg">
                            {{ $detail->genre->name_genres }}
                        </span>
                    </div>
                </div>

                {{-- Right: Details --}}
                <div class="md:w-3/5 p-8 flex flex-col">

                    {{-- Title & Author --}}
                    <div class="mb-5">
                        <h1 class="text-2xl font-bold text-white leading-snug">{{ $detail->judul }}</h1>
                        <p class="text-slate-400 mt-1 text-sm">
                            by <span class="text-emerald-400 font-semibold">{{ $detail->author->name_author }}</span>
                        </p>
                    </div>

                    {{-- Badges --}}
                    <div class="flex items-center gap-3 mb-6">
                        <span class="bg-slate-800 border border-slate-700 text-slate-300 text-xs font-medium px-3 py-1 rounded-lg">
                            {{ $detail->tahun_terbit }}
                        </span>
                        <span class="text-slate-600">•</span>
                        <span class="text-slate-400 text-xs">Age {{ $detail->author->age }} years</span>
                    </div>

                    {{-- Synopsis --}}
                    <div class="mb-6">
                        <h2 class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Sinopsis</h2>
                        <p class="text-slate-300 text-sm leading-relaxed">{{ $detail->sinopsis }}</p>
                    </div>

                    {{-- Author Info --}}
                    <div class="border-t border-slate-700/50 pt-5 mb-6">
                        <h2 class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-3">About the Author</h2>
                        <div class="bg-slate-800 border border-slate-700/50 rounded-xl p-4 space-y-1.5">
                            <p class="text-white text-sm font-medium">
                                {{ $detail->author->name_author }}
                                <span class="text-slate-400 font-normal">({{ $detail->author->age }} years old)</span>
                            </p>
                            <p class="text-slate-400 text-sm">
                                <span class="text-slate-500 w-16 inline-block">Address:</span>
                                {{ $detail->author->alamat }}
                            </p>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex gap-3 mt-auto">
                        <a href="https://youtu.be/Aq5WXmQQooo?si=oJFJKOBhi7cl8hDO" class="flex-1 bg-emerald-500 hover:bg-emerald-400 text-white font-semibold text-sm py-2.5 px-4 rounded-xl text-center transition">
                            Borrow Book
                        </a>
                        <a href="{{ route('home') }}" class="flex-1 bg-slate-800 hover:bg-slate-700 border border-slate-700 text-slate-300 hover:text-white font-semibold text-sm py-2.5 px-4 rounded-xl text-center transition">
                            Kembali
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection