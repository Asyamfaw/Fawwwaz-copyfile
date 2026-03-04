<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Document</title>
  @vite('resources/css/app.css')
  <title>Document</title>
</head>

<body>
  @if (session('error'))
    <script>
      Swal.fire({
        title: "Errors",
        text: "{{ session('error') }}",
        icon: "error"
      });
    </script>
  @endif
    
 
  <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

  <x-navbar></x-navbar>

  @if (session('success'))
    <script>
      Swal.fire({
        title: "Success",
        text: "{{ session('success') }}",
        icon: "success"
      });
    </script>
  @endif

  <div class="container mx-auto p-6">
    <div class="grid md:grid-cols-3 gap-6">

      @foreach ($books as $book)

        <a href="#" class="block rounded-lg p-4 shadow-xs shadow-indigo-100">
          <img alt="" src="{{ asset('storage/' . $book->image) }}" class="h-100 w-full rounded-md object-cover">

          <div class="mt-2">
            <dl>
              <div>
                <dt class="sr-only">{{ $book->tahun_terbit }}</dt>

                <dd class="text-sm text-gray-500">Dirilis pada tahun: {{ $book->tahun_terbit }}</dd>
              </div>

              <div>

                <dd class="font-medium">{{ $book->judul }}</dd>
              </div>
            </dl>

            <div class="mt-6 flex items-center gap-8 text-xs">
              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="size-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Author</p>

                  <p class="font-medium">{{ $book->author->name_author }}</p>
                </div>
              </div>

              <div class="sm:inline-flex sm:shrink-0 sm:items-center sm:gap-2">
                <svg class="size-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                  </path>
                </svg>

                <div class="mt-1.5 sm:mt-0">
                  <p class="text-gray-500">Genre</p>

                  <p class="font-medium">{{ $book->genre->name_genres }}</p>
                </div>
              </div>

            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</body>

</html>