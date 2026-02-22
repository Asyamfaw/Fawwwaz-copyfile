@extends('layouts.app')

@section('content')
<h1 class="mb-5">Selamat datang dihalaman konten</h1>
<a href="{{ route('penulis.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Add Author</a>

 <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default mt-6">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="bg-neutral-secondary-soft border-b border-default justify-center text-center">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    No
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Author name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Age
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Address
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr class="justify-center text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $author->name_author }}</td>
                    <td>{{ $author->age }}</td>
                    <td>{{ $author->alamat }}</td>
                    <td>
                        <a href="{{ route('penulis.show', $author->id) }}">Detail</a>
                        <a href="">Edit</a>
                        <form action="{{ route('penulis.destroy', $author->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>


@endsection