<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <nav class="flex shadow-sm p-3 justify-between px-4 items-center bg-white relative">
        <div class="flex items-center">
            <button id="hamburger-btn" class="mr-1 w-10 h-10 flex flex-col justify-between p-2 md:hidden">
                <span class="line block w-full h-1 bg-[#FF2351] transition-all duration-300"></span>
                <span class="line block w-full h-1 bg-[#FF2351] transition-all duration-300"></span>
                <span class="line block w-full h-1 bg-[#FF2351] transition-all duration-300"></span>
            </button>
            <p class="text-lg font-semibold text-[#FF2351]">Mari</p>
            <p class="text-lg font-light">Mart</p>
        </div>
        <ul class="hidden md:flex gap-5">
            <li class="hover:text-[#FFDB6D] text-black font-light text-lg hover:font-semibold cursor-pointer">Users</li>
            <li class="hover:text-[#FFDB6D] text-black font-light text-lg hover:font-semibold cursor-pointer">Products</li>
            <li class="hover:text-[#FFDB6D] text-black font-light text-lg hover:font-semibold cursor-pointer">Discounts</li>
            <li class="hover:text-[#FFDB6D] text-black font-light text-lg hover:font-semibold cursor-pointer">Members</li>
        </ul>
        <div class="bg-[#FF2351] text-white font-semibold px-3 py-0.5 rounded-md">Login</div>
    </nav>
    
    <ul id="mobile-menu" class="absolute left-0 top-65 w-full bg-white shadow-md transition-all duration-300 transform -translate-y-full hidden">
        <li class="p-3 border-b hover:bg-[#FFDB6D] cursor-pointer">Users</li>
        <li class="p-3 border-b hover:bg-[#FFDB6D] cursor-pointer">Products</li>
        <li class="p-3 border-b hover:bg-[#FFDB6D] cursor-pointer">Discounts</li>
        <li class="p-3 hover:bg-[#FFDB6D] cursor-pointer">Members</li>
    </ul>

    <div class="min-h-screen bg-[#FAFAFA]">
        @yield('content')
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btn = document.getElementById("hamburger-btn");
            const menu = document.getElementById("mobile-menu");
            const lines = btn.querySelectorAll(".line");
    
            btn.addEventListener("click", function () {
                menu.classList.toggle("hidden");
              

                btn.classList.toggle("open");
                if (btn.classList.contains("open")) {
                    lines[0].classList.add("rotate-45", "translate-y-2.5");
                    lines[1].classList.add("opacity-0");
                    lines[2].classList.add("-rotate-45", "-translate-y-2.5");
                } else {
                    lines[0].classList.remove("rotate-45", "translate-y-2.5");
                    lines[1].classList.remove("opacity-0");
                    lines[2].classList.remove("-rotate-45", "-translate-y-2.5");
                }
            });
        });
    </script>
    
</body>
</html>
