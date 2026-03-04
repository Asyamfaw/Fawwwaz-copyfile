@extends('layouts.app')

@section('content')
    <h1 class="mb-6">Selamat datang di halaman Tambah Buku Baru</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>

    @endif
    <div class="min-h-screen bg-gray-100 flex items-center justify-center py-10">
        <div class="w-full max-w-3xl bg-white shadow-xl rounded-2xl p-8">
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label for="" class="block mb-2 font-semibold text-gray-700">
                        Judul Buku
                    </label>
                    <input type="text" id="Judul" name="judul"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none p-3">
                </div>
                <div>
                    <label for="" class="block mb-2 font-semibold text-gray-700">
                        Sinopsis
                    </label>
                    <input type="text" id="Sinopsis" name="sinopsis"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none p-3">
                </div>
                <div>
                    <label for="" class="block mb-2 font-semibold text-gray-700">
                        Tahun Terbit
                    </label>
                    <input type="number" id="TahunTerbit" name="tahun_terbit"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none p-3">
                </div>
                <div>
                    <label for="" class="block mb-2 font-semibold text-gray-700">
                        Genre
                    </label>
                    <select type="number" id="genre" name="genre_id"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none p-3">
                        <option value="">-----Genre-----</option>
                        @foreach ($genres as $item)
                            <option value="{{ $item->id }}">{{ $item->name_genres }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="" class="block mb-2 font-semibold text-gray-700">
                        Author
                    </label>
                    <select type="number" id="author" name="author_id"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none p-3">
                        <option value="">----Author-----</option>
                        @foreach ($authors as $key)
                            <option value="{{ $key->id }}">{{ $key->name_author }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="" class="block mb-2 font-semibold text-gray-700">
                        book cover
                    </label>
                    <input type="file" id="imgInput" name="image"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 outline-none p-3">
                    <img src="" class="mt-4 w-40 rouded-lg shadow hidden" id="previewImg" alt="">
                </div>
                <button type="submit"
                    class="bg-blue-500 mt-6 text-white hover:bg-blue-300 transition px-6 py-2 rounded-lg">Save buku</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('imgInput').addEventListener('change',
            function (event) {
                const preview = document.getElementById('previewImg');
                const file = event.target.files[0];

                if (file) {
                    preview.src = URL.createObjectURL(file);
                    preview.classList.remove('hidden');
                }
            }
        )
    </script>
@endsection