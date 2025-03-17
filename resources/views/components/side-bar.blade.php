<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body class="bg-gray-100 h-full">

    <div class="flex h-full">
        <!-- Sidebar -->
        <div class="flex flex-col items-center bg-white h-full py-4 px-2">
            <div class="flex items-center justify-center">
                <p class="text-lg font-semibold text-[#FF2351] lg:text-2xl">Mari</p>
                <p class="text-lg font-light lg:text-2xl">Mart</p>
            </div>
            <div class="flex flex-col items-center  space-y-7 h-full mt-3">
                <div class="flex flex-col text-center" x-data="{ isActive: false }">
                    <button @click="isActive = !isActive" :class="isActive ? 'bg-[#FF2351]' : ''"
                        class="p-2 rounded-lg focus:outline-none transition-colors duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            :class="isActive ? 'text-white' : 'text-[#C6C6C6]'"
                            class="mx-auto transition-colors duration-200">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5">
                                <path
                                    d="m3.164 11.35l.836.209l.457 4.542c.258 2.566.387 3.849 1.244 4.624s2.147.775 4.726.775h3.146c2.58 0 3.87 0 4.726-.775c.857-.775.986-2.058 1.244-4.625L20 11.56l.836-.21a1.537 1.537 0 0 0 .509-2.75l-8.198-5.737a2 2 0 0 0-2.294 0L2.655 8.6a1.537 1.537 0 0 0 .51 2.75" />
                                <path d="M15 16c-.8.622-1.85 1-3 1s-2.2-.378-3-1" />
                            </g>
                        </svg>
                        <p :class="isActive ? 'text-white' : 'text-[#C6C6C6]'"
                            class="text-sm transition-colors duration-200">
                            Dashboard
                        </p>
                    </button>
                </div>
                <div class="flex flex-col text-center" x-data="{ isActive: false }">
                    <button class="p-2 rounded-lg" :class="isActive ? 'bg-[#FF2351]' : ''"
                        @click="isActive = !isActive">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            class="mx-auto" :class="isActive ? 'text-white' : 'text-[#C6C6C6]'">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1"
                                d="M15 19c0-2.21-2.686-4-6-4s-6 1.79-6 4m16-3v-3m0 0v-3m0 3h-3m3 0h3M9 12a4 4 0 1 1 0-8a4 4 0 0 1 0 8" />
                        </svg>
                        <p class="text-sm" :class="isActive ? 'text-white' : 'text-[#C6C6C6]'">Members</p>
                    </button>
                </div>
                <div class="flex flex-col text-center fixed bottom-4 left-2" x-data="{ isActive: false }">
                    <button class="p-2 rounded-lg" :class="{ 'bg-[#FF2351]': isActive }" @click="isActive = !isActive">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            class="mx-auto" :class="{ 'text-white': isActive, 'text-[#C6C6C6]': !isActive }">
                            <path fill="none" :stroke="isActive ? 'white' : '#c6c6c6'" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1"
                                d="M15 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8m4-9l-4-4m4 4l-4 4m4-4H9" />
                        </svg>
                        
                        <p class="text-sm" :class="{ 'text-white': isActive, 'text-[#C6C6C6]': !isActive }">
                            Log Out
                        </p>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>

</html>
