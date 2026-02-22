@extends('layouts.app')

@section('content')
    <h1 class="mb-8">Welcome to Genres</h1>
    <a href="{{ route('genre.create') }}" class="py-4 px-8 bg-blue-500 text-white">Add Genre</a>
    <table class="min-w-full border border-blue-500 rounded-lg overflow-hidden mt-8">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold text-grey-700"></th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-grey-700">Nama Genre</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-grey-700">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-500">
            @foreach ($genres as $item)
            <tr class="hover:bg-gray-400">
                <td class="px-6 py-4 text-sm">{{  $no++ }}</td>
                <td class="px-6 py-4 text-sm">{{ $item->name_genres }}</td>
                <td class="px-6 py-4 text-sm flex flex-1"><a href="{{ route('genre.edit', $item->id) }}">edit</a>
                    <form action="{{ route('genre.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" onclick="confirm('yakin')" class="px-6 py-4 text-sm text-red-500">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
             @endforeach
        </tbody>
    </table>
    
@endsection