<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-Library</title>
</head>
<body>

<nav class="bg-slate-900 border-b border-slate-700/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-emerald-500/10 border border-emerald-500/20 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
                <span class="text-white font-bold text-lg">E-Library</span>
            </div>

            {{-- Nav Links --}}
            <div class="hidden sm:flex items-center gap-2">
                <a href="{{ route('dashboard') }}" class="text-sm text-slate-300 hover:text-white px-3 py-2 rounded-lg hover:bg-slate-800 transition">
                    Dashboard
                </a>
            </div>

            {{-- Auth Buttons --}}
            <div class="flex items-center">
                @guest
                    <a href="{{ route('login') }}" class="flex items-center gap-2 text-sm font-medium text-white bg-emerald-500 hover:bg-emerald-400 px-4 py-2 rounded-xl transition">
                        Login
                    </a>
                @endguest

                @auth
                    <a href="{{ route('logout') }}" class="flex items-center gap-2 text-sm font-medium text-red-400 hover:text-red-300 bg-red-500/10 hover:bg-red-500/20 border border-red-500/20 px-4 py-2 rounded-xl transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </a>
                @endauth
            </div>

        </div>
    </div>
</nav>

</body>
</html>