<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pedia</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col w-full min-h-screen text-gray-600 bg-white">
        <!-- navbar -->
        <div class="flex flex-row items-center justify-between bg-white shadow-lg container-x">
            <h1 class="flex flex-row items-center gap-3 text-lg font-bold text-violet-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                </svg>
                PHP Pedia
            </h1>
            <div class="flex flex-row items-center gap-3 text-sm text-gray-500">
                <a href=""
                    class="flex flex-row items-center px-4 py-2 border border-gray-200 rounded-lg hover:bg-gray-200">Login</a>
                <a href=""
                    class="flex flex-row items-center px-4 py-2 text-white rounded-lg bg-violet-500 hover:bg-violet-600">Logout</a>
            </div>
        </div>

        <!-- content header -->
        <div class="grid grid-cols-1 text-white md:grid-cols-2 container-x bg-violet-600">
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-bold">Tuangkan Ide Kedalam Program</h1>
                <span>Bersama kita mengasah dan memperdalam ilmu per-kodingan</span>
            </div>
        </div>

        <!-- content artikel terbaru -->
        <div class="flex flex-col container-x">
            <div class="flex flex-row items-center justify-between">
                <span class="font-semibold text-violet-600">Artikel Terbaru</span>
                <button
                    class="rounded-full border border-gray-200 bg-gray-100 px-3 py-1.5 text-sm flex flex-row gap-1 items-center hover:bg-gray-200">
                    Load More
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M6.21 16.77a.75.75 0 01.02-1.06L12.168 10 6.23 4.29a.75.75 0 111.04-1.08l6.5 6.25a.75.75 0 010 1.08l-6.5 6.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-6 py-6 sm:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @for ($i = 1; $i <= 8; $i++)
                    <a href="" class="flex flex-col group">
                        <div class="w-full bg-gray-300 rounded-lg aspect-video">
                        </div>
                        <div class="flex flex-row items-center justify-between gap-2 mt-2 text-xs">
                            <span>#php</span>
                            <span>12 Ags 2022</span>
                        </div>
                        <span class="text-sm font-medium text-gray-800 group-hover:underline">Looping di PHP</span>
                    </a>
                @endfor
            </div>
        </div>

        {{-- content roadmap belajar --}}
        <div class="flex flex-col text-white bg-gray-800 container-x">
            <div class="flex flex-row items-center justify-between">
                <span class="font-semibold text-violet-500">Roadmap Belajar</span>
                <button
                    class="rounded-full border border-gray-700  px-3 py-1.5 text-sm flex flex-row gap-1 items-center hover:bg-gray-700">
                    Load More
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M6.21 16.77a.75.75 0 01.02-1.06L12.168 10 6.23 4.29a.75.75 0 111.04-1.08l6.5 6.25a.75.75 0 010 1.08l-6.5 6.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-6 py-6 sm:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @for ($i = 1; $i <= 8; $i++)
                    <a href="" class="flex flex-col group">
                        <div class="w-full bg-gray-300 rounded-lg aspect-video">
                        </div>
                        <div class="flex flex-row items-center justify-between gap-2 mt-2 text-xs text-gray-300">
                            <span>#php</span>
                            <span>12 Ags 2022</span>
                        </div>
                        <span class="text-sm font-medium text-white group-hover:underline">PHP Dasar 1 : Basic dan
                            Logic</span>
                    </a>
                @endfor
            </div>
        </div>

        <!-- Artikel Komunitas -->
        <div class="flex flex-col container-x">
            <div class="flex flex-row items-center justify-between">
                <span class="font-semibold text-violet-600">Komunitas Artikel</span>
                <button
                    class="rounded-full border border-gray-200 bg-gray-100 px-3 py-1.5 text-sm flex flex-row gap-1 items-center hover:bg-gray-200">
                    Load More
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M6.21 16.77a.75.75 0 01.02-1.06L12.168 10 6.23 4.29a.75.75 0 111.04-1.08l6.5 6.25a.75.75 0 010 1.08l-6.5 6.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-6 py-6 sm:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @for ($i = 1; $i <= 8; $i++)
                    <a href="" class="flex flex-col group">
                        <div class="w-full bg-gray-300 rounded-lg aspect-video">
                        </div>
                        <div class="flex flex-row items-center justify-between gap-2 mt-2 text-xs">
                            <span>@wahyu135</span>
                            <span>12 Ags 2022</span>
                        </div>
                        <span class="text-sm font-medium text-gray-800 group-hover:underline">Looping di PHP</span>
                    </a>
                @endfor
            </div>
        </div>

        {{-- footer --}}
        <div class="flex flex-col md:grid md:grid-cols-10 text-gray-400 bg-gray-800 border-t container-x !py-12 gap-6">
            <div class="flex flex-col col-span-3 gap-2">
                <h1 class="flex flex-row items-center gap-3 font-bold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M2.25 6a3 3 0 013-3h13.5a3 3 0 013 3v12a3 3 0 01-3 3H5.25a3 3 0 01-3-3V6zm3.97.97a.75.75 0 011.06 0l2.25 2.25a.75.75 0 010 1.06l-2.25 2.25a.75.75 0 01-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 010-1.06zm4.28 4.28a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                            clip-rule="evenodd" />
                    </svg>
                    PHP Pedia
                </h1>
                <span>Adalah sebuah platform untuk belajar php secara bertahap</span>
            </div>
            <div class="flex flex-col col-span-7 gap-3">
                <span class="font-semibold text-white">Follow Kami di :</span>
                <div class="flex flex-col gap-6 md:grid md:grid-cols-2 lg:grid-cols-3">
                    @for ($i = 1; $i <= 6; $i++)
                        <a href="https://github.com/wahyuhidayattz" class="flex flex-row items-center gap-x-4 group">
                          <div class="flex items-center justify-center h-12 bg-gray-700 border-t border-gray-600 rounded-lg shadow-xl group-hover:text-white w-14 ring-1 ring-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                           </svg>
                          </div>
                          <div class="flex flex-col">
                            <span class="font-medium text-white">Instagram</span>
                            <span class="text-xs">Ikuti info terbaru kami di instagram.</span>
                          </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center bg-gray-800 border-t border-dashed container-x border-t-slate-700">
            <span class="text-xs">&copy; 2022 - PHP pedia</span>
        </div>

    </div>

</body>

</html>
