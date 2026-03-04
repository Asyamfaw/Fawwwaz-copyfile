@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <!-- Breadcrumb (optional) -->
        <div class="mb-4 text-sm text-gray-500">
            <span>Home</span>
            <span class="mx-2">/</span>
            <span>Books</span>
            <span class="mx-2">/</span>
            <span class="text-gray-700 font-medium">{{ $detail->judul }}</span>
        </div>

        <!-- Main content with cover left, details right -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <!-- Left: Cover Image -->
                <div class="md:w-2/5 bg-gray-100 p-8 flex items-center justify-center">
                    <div class="relative max-w-sm w-full">
                        <img src="{{ asset('storage/'.$detail->image) }}" 
                             class="w-full h-auto rounded-lg shadow-2xl border border-gray-200" 
                             alt="Sampul Buku">
                        
                        <!-- Genre badge on image -->
                        <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-purple-700 text-xs font-semibold px-3 py-1.5 rounded-full shadow-md">
                            {{ $detail->genre->name_genres }}
                        </span>
                    </div>
                </div>

                <!-- Right: Book Details -->
                <div class="md:w-3/5 p-8">
                    <!-- Title -->
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $detail->judul }}</h1>
                    
                    <!-- Author -->
                    <p class="text-lg text-gray-600 mb-4">
                        by <span class="font-semibold text-indigo-600">{{ $detail->author->name_author }}</span>
                    </p>

                    <!-- Year & Badges -->
                    <div class="flex items-center gap-3 mb-6">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-50 text-indigo-700 text-sm font-medium">
                            {{ $detail->tahun_terbit }}
                        </span>
                        <span class="text-gray-400">•</span>
                        <span class="text-sm text-gray-500">Age {{ $detail->author->age }} years</span>
                    </div>

                    <!-- Synopsis -->
                    <div class="mb-6">
                        <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Sinopsis</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $detail->sinopsis }}</p>
                    </div>

                    <!-- Author Info -->
                    <div class="border-t border-gray-100 pt-6">
                        <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">About the Author</h2>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-700">
                                <span class="font-medium">{{ $detail->author->name_author }}</span> 
                                <span class="text-gray-500">({{ $detail->author->age }} years old)</span>
                            </p>
                            <p class="text-gray-600 text-sm mt-1">
                                <span class="inline-block w-16 text-gray-400">Address:</span> 
                                {{ $detail->author->alamat }}
                            </p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex gap-3">
                        <a href="https://youtu.be/Aq5WXmQQooo?si=oJFJKOBhi7cl8hDO" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-4 rounded-lg text-center transition-colors duration-200 shadow-md">
                            Borrow Book
                        </a>
                        <a href="{{ route('books.index') }}" class="flex-1 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium py-3 px-4 rounded-lg text-center transition-colors duration-200">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection