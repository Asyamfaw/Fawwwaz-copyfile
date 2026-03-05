<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body class="min-h-screen bg-slate-950 flex items-center justify-center px-4 py-12">

    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-teal-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative w-full max-w-md">
        <div class="bg-slate-900 border border-slate-700/50 rounded-2xl shadow-2xl px-8 py-10">

            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-14 h-14 bg-emerald-500/10 border border-emerald-500/20 rounded-xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white tracking-tight">E-Library</h1>
                <p class="text-slate-400 text-sm mt-1">Daftar dan mulai eksplorasi perpustakaan</p>
            </div>

            @if($errors->any())
                <div class="mb-5 bg-red-500/10 border border-red-500/20 rounded-xl px-4 py-3">
                    <ul class="space-y-1">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-400 text-sm flex items-center gap-2">
                                <span class="w-1 h-1 bg-red-400 rounded-full inline-block"></span>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('action.register') }}" method="POST" class="space-y-5">
                @csrf

                @if (session('error'))
                    <script>
                        Swal.fire({ title: "Errors", text: "{{ session('error') }}", icon: "error" });
                    </script>
                @endif

                <div>
                    <label for="username" class="block text-sm font-medium text-slate-300 mb-1.5">Username</label>
                    <input id="username" type="text" name="username" required autocomplete="username"
                        placeholder="username kamu"
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" />
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-1.5">Email</label>
                    <input id="email" type="email" name="email" required autocomplete="email"
                        placeholder="kamu@email.com"
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" />
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-sm font-medium text-slate-300">Password</label>
                        <a href="#" class="text-xs text-emerald-400 hover:text-emerald-300 transition">Lupa password?</a>
                    </div>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        placeholder="••••••••"
                        class="w-full bg-slate-800 border border-slate-700 text-white placeholder-slate-500 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 transition" />
                </div>

                <button type="submit"
                    class="w-full bg-emerald-500 hover:bg-emerald-400 text-white font-semibold rounded-xl py-2.5 text-sm transition duration-200 mt-2">
                    Daftar Sekarang
                </button>
            </form>

            <p class="text-center text-sm text-slate-500 mt-6">
                Sudah punya akun?
                <a href="{{ route('auth.actionLogin') }}" class="text-emerald-400 hover:text-emerald-300 font-medium transition">Login</a>
            </p>

        </div>
    </div>

</body>
</html>