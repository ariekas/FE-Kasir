@extends('components.side-bar')

@section('title', 'Home Page')

@section('content')
    <style>
        /* styles.css */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <div class="py-4 space-y-2 lg:flex">
        <div class="grid">
            <div class="flex gap-1 items-center mx-4">
                <h1 class="text-lg font-semibold">Menu</h1>
                <p class="text-lg font-light">Categories</p>
            </div>

            {{-- Category Container --}}
            <div class="flex gap-5 items-center overflow-x-auto hide-scrollbar px-4 mt-3" style="max-width: 100vw;">
                {{-- Category Card --}}
                @for ($i = 0; $i < 30; $i++)
                    <button x-data="{ active: false }" @click="active = !active" :class="active ? 'bg-[#FFDB6D]' : 'bg-white'"
                        class="p-2 rounded-lg text-center transition-all flex-shrink-0  min-h-[100px] w-[100px]">
                        <!-- Ukuran minimum -->
                        <div :class="active ? 'bg-white border-white' : 'border-[#c6c6c6]'"
                            class="p-2 rounded-lg transition-all border border-[#c6c6c6] flex items-center justify-center mx-auto w-[60px] h-[60px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1" :class="active ? 'stroke-black' : 'stroke-[#c6c6c6]'"
                                    d="M18.122 17.645a7.2 7.2 0 0 1-2.656 2.495a7.06 7.06 0 0 1-3.52.853a6.6 6.6 0 0 1-3.306-.718a6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.45 4.45 0 0 0 8.07 6.31A4.5 4.5 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631c1.496-1.136 2.7-3.046 2.846-6.216c1.43 1.061 3.985 5.462 1.754 9.23" />
                            </svg>
                        </div>
                        <div class="mt-2">
                            <p :class="active ? 'text-black' : 'text-[#c6c6c6]'"
                                class="text-sm font-semibold transition-all truncate max-w-[100px]">
                                <!-- truncate untuk memotong teks panjang -->
                                ice creamppppppppppppppp
                            </p>
                        </div>
                    </button>
                @endfor
            </div>

            <div class="flex gap-1 items-center mx-4 mt-5">
                <h1 class="text-lg font-semibold">Choices</h1>
                <p class="text-lg font-light">Order</p>
            </div>
            <div class="grid grid-cols-4 lg:grid-cols-5 gap-3 px-4">
                @for ($i = 0; $i < 15; $i++)
                    <div class="bg-white p-3 flex flex-col items-center justify-center text-center">
                        <img src="{{ asset('images/burger.png') }}" alt="Origin Burger" width="80%"
                            class="bg-yellow-50 rounded-full mx-auto mb-2">
                        <p class="font-normal text-md">Origin Burger</p>
                        <p class="font-light text-sm text-black opacity-70 mt-2">20.000</p>
                    </div>
                @endfor
            </div>
        </div>


        <div class="w-full mt-5">
            <div class="space-y-4 bg-white mx-4 rounded-lg p-4">
                <div class="flex gap-1 items-center">
                    <h1 class="text-lg font-semibold">Orders</h1>
                    <p class="text-lg font-light">Menu</p>
                </div>
                <!-- Cheese Burger -->
                <div class="flex items-center bg-white rounded-lg">
                    <img src="{{ asset('images/burger.png') }}" alt="Cheese Burger"
                        class="w-20 h-20 bg-amber-50 rounded-full">
                    <div class="ml-3 flex-1">
                        <h3 class="text-gray-900 font-normal text-lg">Cheese Burger</h3>
                        <p class="text-gray-600 text-sm">$4.40</p>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-900 font-medium">x2</p>
                        <p class="text-gray-600">$8.80</p>
                    </div>
                </div>

                <!-- Double Cheese -->
                <div class="flex items-center bg-white rounded-lg">
                    <img src="{{ asset('images/burger.png') }}" alt="Double Cheese"
                        class="w-20 h-20 bg-amber-50 rounded-full">
                    <div class="ml-3 flex-1">
                        <h3 class="text-gray-900 font-normal text-lg">Double Cheese</h3>
                        <p class="text-gray-600 text-sm">$4.99</p>
                    </div>

                    <div class="text-right">
                        <p class="text-gray-900 font-medium">x1</p>
                        <p class="text-gray-600">$4.99</p>
                    </div>
                </div>
                <div class="space-y-5 mt-5">
                    <div class="flex justify-between gap-5 lg:flex-col ">
                        <div class="flex-col">
                            <label for="discount" class="font-normal  mb-3">Enter discount</label>
                            <input type="text" name="discount" id="discount" placeholder="Enter discount"
                                class="w-full border border-gray-300 rounded p-2 ">
                        </div>
                        <div class="flex-col">
                            <label for="Member" class="font-normal  mb-3">Enter Member</label>
                            <input type="number" name="Member" id="Member" placeholder="Enter Member"
                                class="w-full border border-gray-300 rounded p-2 ">
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <p class="text-lg font-normal">Sub total </p>
                        <p class="text-lg font-semibold">$13.79</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-lg font-normal">PPN </p>
                        <p class="text-lg font-normal">$1.20</p>
                    </div>

                </div>
                <button
                    class="bg-[#FF2351] text-white font-bold py-1.5 rounded-md px-5 flex items-center justify-center w-full">
                    Change
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection
