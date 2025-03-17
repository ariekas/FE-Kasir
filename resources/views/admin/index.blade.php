@extends('components.navbar')

@section('title', 'Admin Page')

@section('content')
    <div class="container mx-auto px-5 py-2 lg:px-14">
        <div class="flex gap-1 items-center my-2">
            <p class="text-lg font-semibold">Admin</p>
            <p class="text-lg  font-light">Dashboard</p>
        </div>

        <!-- Grid Layout -->
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-3">
            <!-- Card -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Total Members</h2>
                <p class="text-xl font-light">1,250</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Total Products</h2>
                <p class="text-xl font-light">350</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Total Revenue</h2>
                <p class="text-xl font-light">$12,500</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Total Orders</h2>
                <p class="text-xl font-light">95</p>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="flex gap-1 items-center mt-6 mb-2">
            <p class="text-lg font-semibold">Admin</p>
            <p class="text-lg  font-light">Statistics</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 ">
            <!-- Bar Chart -->
            <div class="bg-white p-3 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-2">Sales Overview</h2>
                <canvas id="barChart"></canvas>
            </div>

            <!-- Line Chart -->
            <div class="bg-white p-3 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-2">Revenue Growth</h2>
                <canvas id="lineChart"></canvas>
            </div>
        </div>

        <div class="mt-6 bg-white shadow-md rounded p-4">
            <div class="flex items-center mb-4 ">
                <div class="flex gap-1 items-center ">
                    <p class="text-lg font-semibold">Admin</p>
                    <p class="text-lg font-light">User Management</p>
                </div>
                <button class="bg-[#FF2351] text-white font-bold py-0.5 rounded px-5 ml-auto">
                    +
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b text-light">#</th>
                            <th class="py-2 px-4 border-b text-light">foto profile</th>
                            <th class="py-2 px-4 border-b text-light">name</th>
                            <th class="py-2 px-4 border-b text-light">Role</th>
                            <th class="py-2 px-4 border-b text-light">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">John Doe</td>
                            <td class="py-2 px-4">john@example.com</td>
                            <td class="py-2 px-4">Admin</td>
                            <td class="py-2 px-4 flex justify-center gap-3 mx-auto">
                                <button class="  cursor-pointer" onclick="modalDelete()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#E0115F" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="M4.687 6.213L6.8 18.976a2.5 2.5 0 0 0 2.466 2.092h3.348m6.698-14.855L17.2 18.976a2.5 2.5 0 0 1-2.466 2.092h-3.348m-1.364-9.952v5.049m3.956-5.049v5.049M2.75 6.213h18.5m-6.473 0v-1.78a1.5 1.5 0 0 0-1.5-1.5h-2.554a1.5 1.5 0 0 0-1.5 1.5v1.78z" />
                                    </svg>
                                </button>
                                <button class="cursor-pointer" onclick="toggleModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#E4D00A" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5"
                                            d="m5 16l-1 4l4-1L19.586 7.414a2 2 0 0 0 0-2.828l-.172-.172a2 2 0 0 0-2.828 0zM15 6l3 3m-5 11h8" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="relative z-10 hidden" id="modal-delete" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:size-10">
                                    <svg class="size-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-base font-semibold text-gray-900" id="modal-title">Deactivate account
                                    </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Are you sure you want to deactivate your account?
                                            All of your data will be permanently removed. This action cannot be undone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button type="button" 
                                class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                            <button type="button"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 shadow-xs ring-gray-300 ring-inset hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                onclick="document.getElementById('modal-delete').classList.toggle('hidden')">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 bg-white shadow-md rounded p-4">
            <div class="flex items-center mb-4">
                <div class="flex gap-1 items-center">
                    <p class="text-lg font-semibold">Admin</p>
                    <p class="text-lg font-light">Product Management</p>
                </div>
                <button class="bg-[#FF2351] text-white font-bold py-0.5 rounded px-5 ml-auto">
                    +
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b text-light">#</th>
                            <th class="py-2 px-4 border-b text-light">Product</th>
                            <th class="py-2 px-4 border-b text-light">Category</th>
                            <th class="py-2 px-4 border-b text-light">Price</th>
                            <th class="py-2 px-4 border-b text-light">Stock</th>
                            <th class="py-2 px-4 border-b text-light">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">Laptop</td>
                            <td class="py-2 px-4">Electronics</td>
                            <td class="py-2 px-4">$1000</td>
                            <td class="py-2 px-4">15</td>
                            <td class="py-2 px-4 flex justify-center gap-3 mx-auto">
                                <button class="  cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#E0115F" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M4.687 6.213L6.8 18.976a2.5 2.5 0 0 0 2.466 2.092h3.348m6.698-14.855L17.2 18.976a2.5 2.5 0 0 1-2.466 2.092h-3.348m-1.364-9.952v5.049m3.956-5.049v5.049M2.75 6.213h18.5m-6.473 0v-1.78a1.5 1.5 0 0 0-1.5-1.5h-2.554a1.5 1.5 0 0 0-1.5 1.5v1.78z" />
                                    </svg>
                                </button>
                                <button class="cursor-pointer" onclick="toggleModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#E4D00A" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="m5 16l-1 4l4-1L19.586 7.414a2 2 0 0 0 0-2.828l-.172-.172a2 2 0 0 0-2.828 0zM15 6l3 3m-5 11h8" />
                                    </svg>
                                </button>
                                <button class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="#AAFF00" stroke-width="1">
                                            <path stroke-width="1"
                                                d="M10.51 3.665a2 2 0 0 1 2.98 0l.7.782a2 2 0 0 0 1.601.663l1.05-.058a2 2 0 0 1 2.107 2.108l-.058 1.049a2 2 0 0 0 .663 1.6l.782.7a2 2 0 0 1 0 2.981l-.782.7a2 2 0 0 0-.663 1.601l.058 1.05a2 2 0 0 1-2.108 2.107l-1.049-.058a2 2 0 0 0-1.6.663l-.7.782a2 2 0 0 1-2.981 0l-.7-.782a2 2 0 0 0-1.601-.663l-1.05.058a2 2 0 0 1-2.107-2.108l.058-1.049a2 2 0 0 0-.663-1.6l-.782-.7a2 2 0 0 1 0-2.981l.782-.7a2 2 0 0 0 .663-1.601l-.058-1.05A2 2 0 0 1 7.16 5.053l1.049.058a2 2 0 0 0 1.6-.663z" />
                                            <path stroke-linejoin="round" stroke-width="3"
                                                d="M9.5 9.5h.01v.01H9.5zm5 5h.01v.01h-.01z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                d="m15 9l-6 6" />
                                        </g>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-6 bg-white shadow-md rounded p-4">
            <div class="flex items-center mb-4">
                <div class="flex gap-1 items-center">
                    <p class="text-lg font-semibold">Admin</p>
                    <p class="text-lg font-light">Discount Management</p>
                </div>
                <button class="bg-[#FF2351] text-white font-bold py-0.5 rounded px-5 ml-auto">
                    +
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b text-light">#</th>
                            <th class="py-2 px-4 border-b text-light">Name</th>
                            <th class="py-2 px-4 border-b text-light">Discount (%)</th>
                            <th class="py-2 px-4 border-b text-light">Valid Until</th>
                            <th class="py-2 px-4 border-b text-light">Discount availability</th>
                            <th class="py-2 px-4 border-b text-light">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">Holiday Sale</td>
                            <td class="py-2 px-4">20%</td>
                            <td class="py-2 px-4">2025-12-31</td>
                            <td class="py-2 px-4">100</td>
                            <td class="py-2 px-4 flex justify-center gap-3 mx-auto">
                                <button class="  cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#E0115F" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="M4.687 6.213L6.8 18.976a2.5 2.5 0 0 0 2.466 2.092h3.348m6.698-14.855L17.2 18.976a2.5 2.5 0 0 1-2.466 2.092h-3.348m-1.364-9.952v5.049m3.956-5.049v5.049M2.75 6.213h18.5m-6.473 0v-1.78a1.5 1.5 0 0 0-1.5-1.5h-2.554a1.5 1.5 0 0 0-1.5 1.5v1.78z" />
                                    </svg>
                                </button>
                                <button class="cursor-pointer" onclick="toggleModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="none" stroke="#E4D00A" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="m5 16l-1 4l4-1L19.586 7.414a2 2 0 0 0 0-2.828l-.172-.172a2 2 0 0 0-2.828 0zM15 6l3 3m-5 11h8" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="modal" class="fixed inset-0 flex items-center justify-center hidden bg-gray-500/75 transition-opacity ">
            <div class="bg-white rounded-lg shadow-lg w-96 p-4">
                <div class="flex gap-1 items-center justify-between">
                    <div class="flex gap-1 items-center">
                        <p class="text-lg font-semibold">Modal</p>
                        <p class="text-lg font-light">Discount Management</p>
                    </div>
                    <button onclick="toggleModal()" class="px-4 py-2 text-red-500 text-2xl cursor-pointer">
                        X
                    </button>
                </div>

                <div class="flex-col space-y-3">
                    <div class="">
                        <label for="name" class="text-lg font-semibold  mb-3">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter name"
                            class="w-full border border-gray-300 rounded p-2 ">
                    </div>
                    <div class="">
                        <label for="name" class="text-lg font-semibold  mb-3">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter name"
                            class="w-full border border-gray-300 rounded p-2 ">
                    </div>
                    <div class="">
                        <label for="name" class="text-lg font-semibold  mb-3">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter name"
                            class="w-full border border-gray-300 rounded p-2 ">
                    </div>
                </div>

                <button class="bg-[#FF2351] text-white font-bold py-1.5 rounded-md px-5 ml-auto flex justify-end mt-4">
                    Save
                </button>
            </div>
        </div>

        <div class="mt-6 bg-white shadow-md rounded p-4">
            <div class="flex items-center mb-4">
                <div class="flex gap-1 items-center">
                    <p class="text-lg font-semibold">Admin</p>
                    <p class="text-lg font-light">Member Management</p>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border-b text-light">#</th>
                            <th class="py-2 px-4 border-b text-light">Name</th>
                            <th class="py-2 px-4 border-b text-light">phone number</th>
                            <th class="py-2 px-4 border-b text-light">address</th>
                            <th class="py-2 px-4 border-b text-light">validity period</th>
                            <th class="py-2 px-4 border-b text-light">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">John Doe</td>
                            <td class="py-2 px-4">john@example.com</td>
                            <td class="py-2 px-4">jln neraka</td>
                            <td class="py-2 px-4">20 hari</td>
                            <td class="py-2 px-4 text-green-500">Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart
        const barCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [120, 190, 300, 500, 200, 300],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 0.5)',
                    borderWidth: 1
                }]
            }
        });

        // Line Chart
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [1000, 1200, 1800, 2200, 3000, 4000],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2
                }]
            }
        });

        function openModal(name, category, price, stock) {
            document.querySelector('[x-data]').__x.$data.isOpen = true;
            document.querySelector('[x-data]').__x.$data.name = name;
            document.querySelector('[x-data]').__x.$data.category = category;
            document.querySelector('[x-data]').__x.$data.price = price;
            document.querySelector('[x-data]').__x.$data.stock = stock;
        }

        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden')
        }

        function modalDelete() {
            document.getElementById('modal-delete').classList.toggle('hidden')
        }
    </script>
@endsection
