<!DOCTYPE html>
<html lang="en" data-theme="silk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    
    {{-- Dynamic title --}}
    <title>{{ isset($title) ? $title . ' - Tweety' : 'Tweety' }}</title>
    
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    <nav class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="/">Tweets</a></li>
                    <li><a href="/tweets/create">Create</a></li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost text-xl">Tweety</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-md">
                <li><a href="/">Tweets</a></li>
                <li><a href="/tweets/create">Create</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-2">
            @auth
                <span class="text-sm hidden sm:inline">{{ auth()->user()->name }}</span>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="py-4 btn btn-ghost btn-sm">Logout</button>
                </form>
            @else
                <a href="/login" class="py-4 btn btn-ghost btn-sm">Log In</a>
                <a href="/register" class="py-4 btn btn-primary btn-sm">Register</a>
            @endauth
        </div>
    </nav>

    {{-- Success Toast --}}
    @if (session('success'))
        <div class="toast toast-top toast-center z-50">
            <div class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="footer footer-center bg-base-300 text-base-content p-4 mt-8">
        <aside>
            <p>Copyright © {{ date('Y') }} Tweety. All rights reserved.</p>
        </aside>
    </footer>
</body>
</html>