<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

  @if(session('success'))
      <script>
      Swal.fire({
        title: "Success",
        text: "{{ session('success') }}",
        icon: "success"
      });
    </script>
  @endif
  
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-900 text-white p-5">
            <h1 class="text-xl font-bold mb-6">Dashbord</h1>
            <ul class="space-y-3">
                <li><a href="/" class="block text-white ">Home</a></li>
                <li><a href="{{ route('genre.index') }}" class="block text-white ">Genre</a></li>
                <li><a href="{{ route('penulis.index') }}" class="block text-white ">Author</a></li>
                <li><a href="{{ route('books.index') }}" class="block text-white ">Book</a></li>
            </ul>
        </aside>
        <div class="flex-1 flex flex-col">
            <nav class="bg-white shadow p-4 justify-between flex">
                <p>welcome, <span>{{ Auth::user()->name }}</span></p>
                <a href="{{ route('logout') }}" class="text-red-500">Logout</a>
            </nav>
        

        <main class="p-6">
            @yield('content')
        </main>
    </div>
    </div>
    
</body>
</html>