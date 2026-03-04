@extends('layouts.app')

@section('content')
    <h1 class="mb-6">Selamat datang di halaman Buku</h1>

    <a href="{{ route('books.create') }}" class="py-4 px-8 m-8 mb-9 bg-blue-500 text-white rounded-full
    hover:bg-blue-300 hover:text-gray-200 transition">Add Books</a>
    <div class="relative overflow-x-auto bg-gray-300 shadow-xs rounded-base mt-6 border border-default-medium">
        <table class="w-full text-sm text-left text-body">
            <thead class="text-sm">
                <tr>
                    <th class="px-6 py-3 font-medium">No</th>
                    <th class="px-6 py-3 font-medium">Gambar</th>
                    <th class="px-6 py-3 font-medium">Judul</th>
                    <th class="px-6 py-3 font-medium">Sinopsis</th>
                    <th class="px-6 py-3 font-medium">Tahun Terbit</th>
                    <th class="px-6 py-3 font-medium">Genre</th>
                    <th class="px-6 py-3 font-medium">Author</th>
                    <th class="px-6 py-3 font-medium">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book )
                <tr class="bg-gray-400 border-b boder-default">
                    
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4"><img src="{{ asset('storage/' . $book->image) }}" alt="" class="w-16 h-16 object-cover"></td>
                    <td class="px-6 py-4">{{ $book->judul }}</td>
                    <td class="px-6 py-4">{{ $book->sinopsis }}</td>
                    <td class="px-6 py-4">{{ $book->tahun_terbit }}</td>
                    <td class="px-6 py-4">{{ $book->genre->name_genres }}</td>
                    <td class="px-6 py-4">{{ $book->author->name_author }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('books.detail', $book->id) }}" class="px-3 py-1 bg-green-500 text-white rounded-lg">Detail</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="px-3 py-1 bg-blue-500 text-white rounded-lg">Edit</a>
                        <form action="{{ route('books.delete', $book->id) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-lg">Delete</button>
                    
                </tr>  
                @endforeach 
            </tbody>
        </table>
    </div>
@endsection