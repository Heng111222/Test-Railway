<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ប្រព័ន្ធគ្រប់គ្រងព័ត៌មានសិស្ស')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Heroicons via CDN -->
    <script src="https://unpkg.com/heroicons@2.1.1/24/outline/index.js" type="module"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Battambang:wght@300;400;500;700&family=Kantumruy+Pro:wght@400;600;700&display=swap');

        :root {
            --kh-blue: #032ea1;
            --kh-blue-deep: #021c6b;
            --kh-red: #1ed211;
            --ink: #1c2230;
            --paper: #ffffff;
            --canvas: #f2f4f8;
        }

        body {
            font-family: "Siemreap", system-ui;
            background: var(--canvas);
            color: var(--ink);
        }

        .font-head {
            font-family: "Siemreap", system-ui;
        }

        /* three-stripe flag accent, the page's one signature element */
        .flag-rule {
            height: 4px;
            background: linear-gradient(to right,
                    var(--kh-blue) 0 33.3%,
                    var(--kh-red) 33.3% 66.6%,
                    var(--kh-blue) 66.6% 100%);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <!-- Navbar (card/white background) -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-[color:var(--paper)] text-[color:var(--ink)] shadow border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center gap-4">

            <div class="flex items-center gap-3">
                <div
                    class="h-10 w-10 shrink-0 rounded-full bg-[color:var(--kh-blue-deep)] flex items-center justify-center text-white font-bold">
                    ក
                </div>
                <h1 class="font-head font-semibold text-lg text-[color:var(--ink)]">
                    គ្រប់គ្រងព័ត៌មានសិស្ស
                </h1>
            </div>

            <nav class="flex items-center gap-3">

                <!-- Language -->
                <div class="relative" data-dropdown>
                    <button type="button" data-dropdown-toggle
                        class="flex items-center font-semibold gap-2 rounded-full border border-slate-200 bg-slate-50 px-4 py-1.5 text-sm text-[color:var(--ink)] transition hover:bg-slate-100">
                        <!-- Globe Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                        <span>ខ្មែរ</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div data-dropdown-menu
                        class="absolute font-semibold right-0 mt-2 hidden w-40 overflow-hidden rounded-lg border border-slate-200 bg-white shadow-lg">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-100">
                            ភាសាខ្មែរ</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-100">
                            អង់គ្លេស</a>
                    </div>
                </div>

                <!-- User -->
                <div class="relative" data-dropdown>
                    <button type="button" data-dropdown-toggle
                        class="flex items-center gap-3 rounded-full border border-slate-200 bg-slate-50 pl-2 pr-4 py-1.5 text-[color:var(--ink)] transition hover:bg-slate-100">
                        <div
                            class="flex h-6 w-6 items-center justify-center rounded-full bg-[color:var(--kh-red)] text-white font-bold text-sm">
                            H
                        </div>
                        <span class="text-sm font-semibold">ហេង</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div data-dropdown-menu
                        class="absolute font-semibold right-0 mt-2 hidden w-52 overflow-hidden rounded-lg border border-slate-200 bg-white shadow-xl">
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-slate-100 flex items-center gap-2">
                            <!-- User Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            ព័ត៌មានគណនី
                        </a>
                        <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-slate-100 flex items-center gap-2">
                            <!-- Settings Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            ការកំណត់
                        </a>
                        <hr class="border-slate-200">
                        <a href="#" class="block px-4 py-3 text-sm text-[color:var(--kh-red)] hover:bg-red-50 flex items-center gap-2">
                            <!-- Logout Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>
                            ចាកចេញ
                        </a>
                    </div>
                </div>

                <script>
                    // Click-toggle dropdowns (replaces the old hover:group-hover behavior).
                    // Clicking a toggle opens its menu and closes any other open menu.
                    // Clicking anywhere outside, or pressing Escape, closes open menus.
                    document.querySelectorAll('[data-dropdown]').forEach((wrapper) => {
                        const toggle = wrapper.querySelector('[data-dropdown-toggle]');
                        const menu = wrapper.querySelector('[data-dropdown-menu]');

                        toggle.addEventListener('click', (e) => {
                            e.stopPropagation();
                            const isOpen = !menu.classList.contains('hidden');

                            document.querySelectorAll('[data-dropdown-menu]').forEach((m) => m.classList.add('hidden'));

                            if (!isOpen) {
                                menu.classList.remove('hidden');
                            }
                        });
                    });

                    document.addEventListener('click', () => {
                        document.querySelectorAll('[data-dropdown-menu]').forEach((m) => m.classList.add('hidden'));
                    });

                    document.addEventListener('keydown', (e) => {
                        if (e.key === 'Escape') {
                            document.querySelectorAll('[data-dropdown-menu]').forEach((m) => m.classList.add('hidden'));
                        }
                    });
                </script>

            </nav>
        </div>

        <div class="flag-rule"></div>
    </header>

    <!-- Main -->
    <main class="flex-1" style="padding-top:60px;">
        <div class="max-w-7xl mx-auto px-6 py-8">

            @if (session('success'))
                <div
                    class="mb-6 flex items-center gap-3 rounded-lg border-l-4 border-[color:var(--kh-blue)] bg-white px-4 py-3 text-[color:var(--ink)] shadow-sm">
                    <!-- Check Circle Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[color:var(--kh-blue)]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="rounded-md border-1 border-slate-300 bg-white p-6">
                @yield('content')
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-4 text-center text-xs text-slate-400">
            © {{ date('Y') }} ក្រសួងអប់រំ យុវជន និងកីឡា · ប្រព័ន្ធគ្រប់គ្រងព័ត៌មានសិស្ស។ រក្សាសិទ្ធិគ្រប់យ៉ាង។
        </div>
    </footer>

</body>

</html>
