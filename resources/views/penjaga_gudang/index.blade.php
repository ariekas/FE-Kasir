@vite('resources/css/app.css')
<div class="mx-auto container">
    <div class="bg-white rounded-lg shadow-md p-6 ">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-normal text-gray-800">Product Management</h1>
            <div class="flex items-center space-x-4">
                <div class="text-right">
                    <p class="text-sm text-gray-500">Logged in as:</p>
                    <p class="font-medium text-gray-700">John Doe</p>
                    <p class="text-xs text-gray-500">Cashier ID: CSH001</p>
                </div>
                <div
                    class="h-12 w-12 rounded-full bg-[#FF2351] flex items-center justify-center text-white font-bold text-xl">
                    JD
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2 bg-white shadow-md rounded p-3">
        <div class="my-4 flex justify-between items-center">
            <div class='w-full max-w-xs border-1 border-[#E50046] rounded-md'>
                <div class="relative flex items-center w-full h-10 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                    <div class="grid place-items-center h-full w-10 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
            
                    <input
                    class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                    type="text"
                    id="search"
                    placeholder="Search something.." /> 
                </div>
            </div>
            <button id="stockProductBtn" class="bg-[#E50046] text-white px-4 py-2 rounded">Stocks</button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                <thead class="bg-gray-100 py-5">
                    <tr>
                        <th>#</th>
                        <th class="py-2 px-4 border-b text-light">Id</th>
                        <th class="py-2 px-4 border-b text-light">Product Name</th>
                        <th class="py-2 px-4 border-b text-light">Category</th>
                        <th class="py-2 px-4 border-b text-light">Price</th>
                        <th class="py-2 px-4 border-b text-light">Stock</th>
                        <th class="py-2 px-4 border-b text-light">Actions</th>
                        <th class="py-2 px-4 border-b text-light">Add Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center border-b items-center">
                        <td>
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-[#E50046]">

                        </td>
                        <td class="py-2 px-4">1</td>
                        <td class="py-2 px-4">Laptop</td>
                        <td class="py-2 px-4">Electronics</td>
                        <td class="py-2 px-4">$1000</td>
                        <td class="py-2 px-4">15</td>
                        <td class="py-2 px-4 flex justify-center gap-3 mx-auto">
                            <button class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="#E50046" d="M12 17q.425 0 .713-.288T13 16t-.288-.712T12 15t-.712.288T11 16t.288.713T12 17m-1-4h2V7h-2zm-2.75 8L3 15.75v-7.5L8.25 3h7.5L21 8.25v7.5L15.75 21zm.85-2h5.8l4.1-4.1V9.1L14.9 5H9.1L5 9.1v5.8zm2.9-7"/>
                                </svg>
                            </button>
                        </td>
                        <td class="py-2 px-4">
                            <input type="number" class="w-20 px-2 py-1 border rounded" min="0" value="0">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-center mt-3">
                <nav class="inline-flex rounded-md shadow-sm">
                    <button id="prevPage" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50">
                        Previous
                    </button>
                    <div id="paginationNumbers" class="flex">
                       
                    </div>
                    <button id="nextPage" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50">
                        Next
                    </button>
                </nav>
            </div>
        </div>
        
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const rowsPerPage = 5; // Jumlah baris per halaman
    const tableBody = document.querySelector('tbody');
    const rows = Array.from(tableBody.querySelectorAll('tr'));
    const paginationNumbers = document.getElementById('paginationNumbers');
    const prevButton = document.getElementById('prevPage');
    const nextButton = document.getElementById('nextPage');

    let currentPage = 1;

    // Fungsi untuk menampilkan baris berdasarkan halaman
    function displayRows(page) {
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = (index >= start && index < end) ? '' : 'none';
        });
    }

    // Fungsi untuk mengupdate tombol pagination
    function updatePaginationButtons() {
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        prevButton.disabled = currentPage === 1;
        nextButton.disabled = currentPage === totalPages;

        paginationNumbers.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement('button');
            pageButton.className = `px-4 py-2 text-sm font-medium ${
                i === currentPage ? 'text-white bg-[#E50046]' : 'text-gray-700 bg-white'
            } border border-gray-300 hover:bg-gray-50 hover:text-gray-700`;
            pageButton.textContent = i;
            pageButton.addEventListener('click', () => {
                currentPage = i;
                displayRows(currentPage);
                updatePaginationButtons();
            });
            paginationNumbers.appendChild(pageButton);
        }
    }

    // Event listener untuk tombol previous
    prevButton.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayRows(currentPage);
            updatePaginationButtons();
        }
    });

    // Event listener untuk tombol next
    nextButton.addEventListener('click', () => {
        const totalPages = Math.ceil(rows.length / rowsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayRows(currentPage);
            updatePaginationButtons();
        }
    });

    // Inisialisasi
    displayRows(currentPage);
    updatePaginationButtons();
});
</script>