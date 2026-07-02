<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="nativephp-safe-area min-h-screen bg-slate-950 text-slate-100 antialiased">
    <div class="relative isolate min-h-screen overflow-hidden">
        <div class="pointer-events-none absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,rgba(56,189,248,0.25),transparent_50%),radial-gradient(circle_at_bottom,rgba(251,146,60,0.2),transparent_45%)]"></div>

        <div class="mx-auto flex min-h-screen w-full max-w-md items-center px-4 py-10 sm:px-6">
            <div class="w-full rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl sm:p-8">
                <div class="mb-8 text-center">
                    <p class="mb-2 inline-flex items-center rounded-full border border-cyan-300/30 bg-cyan-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.16em] text-cyan-200">
                        Welcome Back
                    </p>
                    <h1 class="text-3xl font-black tracking-tight text-white sm:text-4xl">Sign in</h1>
                    <p class="mt-2 text-sm text-slate-300">Access your account and continue where you left off.</p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 rounded-2xl border border-rose-400/30 bg-rose-500/10 p-4 text-sm text-rose-100">
                        <p class="mb-2 font-semibold">Please fix the following:</p>
                        <ul class="list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="" class="space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-slate-200">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            class="w-full rounded-xl border border-white/15 bg-slate-900/70 px-4 py-3 text-sm text-slate-100 placeholder-slate-400 outline-none transition focus:border-cyan-300 focus:ring-2 focus:ring-cyan-300/40"
                            placeholder="you@example.com"
                        >
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-slate-200">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            autocomplete="current-password"
                            class="w-full rounded-xl border border-white/15 bg-slate-900/70 px-4 py-3 text-sm text-slate-100 placeholder-slate-400 outline-none transition focus:border-cyan-300 focus:ring-2 focus:ring-cyan-300/40"
                            placeholder="••••••••"
                        >
                    </div>

                    <button
                        type="submit"
                        class="group relative inline-flex w-full items-center justify-center overflow-hidden rounded-xl bg-linear-to-r from-cyan-400 to-orange-400 px-4 py-3 text-sm font-bold text-slate-900 transition hover:scale-[1.01] hover:shadow-lg hover:shadow-cyan-500/20 active:scale-[0.99]"
                    >
                        <span class="relative z-10">Login</span>
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-slate-300">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-semibold text-cyan-300 transition hover:text-cyan-200 hover:underline">
                        Register here
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
