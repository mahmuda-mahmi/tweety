<!DOCTYPE html>
<html lang="en" data-theme="retro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Twitter - Works</title>

    {{-- daisyUI 5 + Tailwind CSS 4 via CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="h-dvh flex flex-col">
    <div>
        <div class="navbar bg-base-100 shadow-sm w-3/4 mx-auto rounded-b-lg mt-2">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg aria-label="Menu" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
                    </div>
                    <ul
                        tabindex="-1"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a>Tweets</a></li>
                        <li><a>Create</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">Tweety</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 text-md">
                    <li><a>Tweets</a></li>
                    <li><a>Create</a></li>
                </ul>
            </div>
            <div class="navbar-end gap-3">
                <a class="btn btn-success">Log In</a>
                <a class="btn btn-outline">Sign Up</a>
            </div>
        </div>
    </div>
    <main class="flex-1 w-full max-w-6xl mx-auto mt-2">
        {{ $slot }}
    </main>
    <footer class="footer sm:footer-horizontal footer-center bg-base-300 text-base-content p-4">
        <aside>
            <p>Copyright ©All right reserved by ACME Industries Ltd</p>
        </aside>
    </footer>
</body>
</html>