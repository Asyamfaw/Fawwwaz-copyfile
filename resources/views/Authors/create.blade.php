@extends('layouts.app')

@section('content')

<div class="container mx-auto">
    <form action="{{ route("penulis.store") }}" method="POST">
        @csrf
        <div>
            <label for="">Name Author</label>
            <input type="text" name="name_author" class="border w-full p-2 rounded">
        </div>
        <div>
            <label for="">Age Author</label>
            <input type="number" name="age" class="border w-full p-2 rounded">
        </div>
        <div>
            <label for="">Adress</label>
            <input type="text" name="alamat" class="border w-full p-2 rounded">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-3">
            Simpan
        </button>
    </form>
</div>
@endsection