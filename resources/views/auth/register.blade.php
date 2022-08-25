<x-template title="Login">
    <div class="flex flex-col items-center justify-center w-full min-h-screen text-gray-600 bg-gray-100 container-x">
        <div class="bg-white rounded-md shadow-lg max-w-[500px] w-[400px] p-6 flex flex-col">
            <div class="flex flex-col">
                <a href="{{ route('home') }}" class="flex flex-row items-center gap-3 text-violet-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    PHP Pedia
                </a>
                <span class="text-xl font-semibold text-violet-600">Register</span>
            </div>
            <div class="flex flex-col gap-3 py-6 text-sm">
                <div class="flex flex-col gap-1">
                    <label for="name">Full Name</label>
                    <input type="text" name="name"
                        class="input">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email">Email</label>
                    <input type="text" name="email"
                        class="input">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="username">Username</label>
                    <input type="text" name="username"
                        class="input">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password">Password</label>
                    <input type="text" name="password"
                        class="input">
                </div>
                <button class="w-full px-4 py-2 mt-2 text-white rounded-md bg-violet-600 hover:bg-violet-500">Create New Account</button>
                <div class="flex flex-row items-center gap-2">
                    <span>Sudah punya akun ?</span>
                    <a href="{{ route('login') }}" class="text-violet-600 hover:underline">Login</a>
                </div>
            </div>
        </div>
    </div>
</x-template>
