@extends('components.navbar')

@section('title', 'Home Page')

@section('content')
    <div class="container mx-auto px-5 py-2 ">
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
                            <th class="py-2 px-4 border-b text-light">Name</th>
                            <th class="py-2 px-4 border-b text-light">Email</th>
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
                            <td class="py-2 px-4 flex justify-center gap-2">
                                <button
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                <button
                                    class="bg-red-500 hover:bg-red-706 text-white font-bold py-1 px-3 rounded">Disable</button>
                            </td>
                        </tr>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">Jane Smith</td>
                            <td class="py-2 px-4">jane@example.com</td>
                            <td class="py-2 px-4">User</td>
                            <td class="py-2 px-4 flex justify-center gap-2">
                                <button
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Disable</button>
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
                            <th class="py-2 px-4 border-b text-light">Product Name</th>
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
                            <td class="py-2 px-4 flex justify-center gap-2">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                            </td>
                        </tr>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">Smartphone</td>
                            <td class="py-2 px-4">Electronics</td>
                            <td class="py-2 px-4">$700</td>
                            <td class="py-2 px-4">30</td>
                            <td class="py-2 px-4 flex justify-center gap-2">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
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
                            <th class="py-2 px-4 border-b text-light">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">Holiday Sale</td>
                            <td class="py-2 px-4">20%</td>
                            <td class="py-2 px-4">2025-12-31</td>
                            <td class="py-2 px-4 flex justify-center gap-2">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Disable</button>
                            </td>
                        </tr>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">Black Friday</td>
                            <td class="py-2 px-4">50%</td>
                            <td class="py-2 px-4">2025-11-29</td>
                            <td class="py-2 px-4 flex justify-center gap-2">
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Disable</button>
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
                    <p class="text-lg font-light">Member Management</p>
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
                            <th class="py-2 px-4 border-b text-light">Email</th>
                            <th class="py-2 px-4 border-b text-light">Membership Type</th>
                            <th class="py-2 px-4 border-b text-light">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">John Doe</td>
                            <td class="py-2 px-4">john@example.com</td>
                            <td class="py-2 px-4">Premium</td>
                            <td class="py-2 px-4 text-green-500">Active</td>
                        </tr>
                        <tr class="text-center border-b items-center">
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">Jane Smith</td>
                            <td class="py-2 px-4">jane@example.com</td>
                            <td class="py-2 px-4">Basic</td>
                            <td class="py-2 px-4 text-red-500">Inactive</td>
                           
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
    </script>
@endsection
