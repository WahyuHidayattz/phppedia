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
        <x-navbar/>

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

        <x-footer/>

    </div>

</body>

</html>
