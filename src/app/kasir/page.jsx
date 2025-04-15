'use client';
import Image from "next/image";
import { useState } from 'react';

export default function Home() {
  const [memberPhone, setMemberPhone] = useState('');
  const [isMemberValid, setIsMemberValid] = useState(false);
  const [isModalOpen, setModalOpen] = useState(false);
  const [isModalError, setModalError] = useState(false);


  const [items, setItems] = useState([
    { name: 'Product A', qty: 1, price: 10 },
    { name: 'Product B', qty: 1, price: 15 },
  ]);


  const updateQty = (index, delta) => {
    setItems((prevItems) =>
      prevItems.map((item, i) =>
        i === index
          ? { ...item, qty: Math.max(1, item.qty + delta) }
          : item
      )
    );
  };

  const validateMember = (phone) => {
    // Validasi nomor telepon (ubah sesuai kebutuhan)
    const isValid = phone.length === 12 && phone.startsWith('08');
    setIsMemberValid(isValid);
    setModalError(!isValid); // Menetapkan error jika tidak valid

    if (isValid) {
      setModalOpen(true);
      setTimeout(() => setModalOpen(false), 2000); // Modal akan ditutup setelah 1 detik
    } else if (!isValid && phone.length > 0) {
      setModalOpen(true);
      setTimeout(() => setModalOpen(false), 2000); // Modal error akan ditutup setelah 1 detik
    }
  };

  const subtotal = items.reduce((acc, item) => acc + item.price * item.qty, 0);
  const shipping = 5;
  const beforeDiscount = subtotal + shipping;
  const discount = isMemberValid ? beforeDiscount * 0.1 : 0;
  const total = beforeDiscount - discount;

  return (
    <>
{/* navbar */}
      <div className="flex flex-col md:flex-row space-y-2">
        <div className="px-5 py-2 space-y-4">
          {/* category */}
          <div className=" flex flex-col gap-2">
            <h1>Menu</h1>
            <div className="flex overflow-x-auto ">
              {[...Array(5)].map((_, index) => (
                <button key={index} className="border border-gray-200 font-light text-gray-300 px-3 py-1 rounded-lg mx-1">
                  Burger
                </button>
              ))}
            </div>
          </div>
          {/* end category */}

          {/* card */}
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-7  gap-2">
            {[...Array(100)].map((_, index) => (
              <div class="w-full transform overflow-hidden rounded-lg bg-white dark:bg-slate-800 shadow-md duration-300 hover:scale-105 hover:shadow-lg">
                <img class="h-32 w-full object-fill object-center" src="https://images.unsplash.com/photo-1674296115670-8f0e92b1fddb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Product Image" />
                <div class="p-4">
                  <h2 class="mb-2 text-sm font-medium dark:text-white text-gray-900">Product Name</h2>
                  <p class="mr-2 text-sm font-semibold text-gray-900 dark:text-white">$20.00</p>
                </div>
              </div>

            ))}
          </div>
          {/* end card */}
        </div>
        <div className="px-5 py-2 rounded-lg border border-gray-100 shadow-lg md:max-h-max md:mt-3 xl:min-w-lg md:mr-5 ">
          <div className="flex justify-between items-center ">
            <h1>Detail Orders</h1>
            <button className="border-none text-sm text-[#ff2351] cursor-pointer">Clear order</button>
          </div>
          {/* order */}
            <div className="space-y-2">
              {items.map((item, index) => (
                <div key={index} className="py-1 flex justify-between items-center">
                  <div>
                    <p className="text-sm font-medium text-gray-700">{item.name}</p>
                    <div className="flex items-center space-x-2 mt-1">
                      <button
                        onClick={() => updateQty(index, -1)}
                        className="w-7 h-7 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300"
                      >
                        -
                      </button>
                      <input
                        type="text"
                        value={item.qty}
                        readOnly
                        className="w-10 text-center border border-gray-300 rounded"
                      />
                      <button
                        onClick={() => updateQty(index, 1)}
                        className="w-7 h-7 flex items-center justify-center bg-gray-200 rounded hover:bg-gray-300"
                      >
                        +
                      </button>
                    </div>
                  </div>
                  <p className="text-sm text-gray-800">
                    ${(item.price * item.qty).toFixed(2)}
                  </p>
                </div>
              ))}
              <div className="relative">
                <div className="flex items-end">
                  <div className="flex-1">
                    <label className="block text-sm font-medium text-gray-700 mb-1">
                      Nomor Telepon Member
                    </label>
                    <input
                      type="tel"
                      placeholder="Contoh: 081234567890"
                      className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#FF2351]"
                      value={memberPhone}
                      onChange={(e) => {
                        setMemberPhone(e.target.value);
                      }}
                    />
                  </div>
                  <button
                    onClick={() => validateMember(memberPhone)}
                    className="ml-3 px-4 py-2 bg-[#ff2351] text-white rounded-lg"
                  >
                    Check
                  </button>
                </div>
                {/* Modal untuk Diskon Aktif */}
                {isModalOpen && isMemberValid && (
                  <div className="fixed top-3 p-2 z-50 animate__animated animate__fadeInRight">
                    <div className="bg-white p-6 rounded-lg shadow-lg">
                      <h2 className="text-lg font-semibold text-gray-700">Diskon Aktif</h2>
                      <p className="text-sm text-gray-500">Selamat, diskon Anda telah diaktifkan!</p>
                    </div>
                  </div>
                )}
                {/* Modal untuk Diskon Tidak Valid */}
                {isModalOpen && isModalError && (
                  <div className="fixed top-3 p-2 z-50 animate__animated animate__fadeInRight">
                    <div className="bg-white p-6 rounded-lg shadow-lg">
                      <h2 className="text-lg font-semibold text-gray-700">Diskon Tidak Valid</h2>
                      <p className="text-sm text-gray-500">Nomor telepon yang dimasukkan tidak valid. Silakan periksa kembali.</p>
                    </div>
                  </div>
                )}
              </div>
              <div className="py-2 flex justify-between font-medium text-gray-700">
                <p>Subtotal</p>
                <p>${subtotal.toFixed(2)}</p>
              </div>
              <div className="py-2 flex justify-between text-gray-700">
                <p>Pajak</p>
                <p>${shipping.toFixed(2)}</p>
              </div>
              <div className="py-2 flex justify-between font-bold text-gray-900">
                <p>Total</p>
                <p>${total.toFixed(2)}</p>
              </div>
            </div>
            <button className="mt-6 w-full bg-[#FF2351] text-white py-2 rounded-lg hover:bg-red-600 transition duration-300">
              Confirm Payment
            </button>
        </div>
        {/* order */}

      </div>
    </>
  );
}
