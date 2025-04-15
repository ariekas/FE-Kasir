export default function navBar()  {
     const [menuOpen, setMenuOpen] = useState(false);
     
    return(
        <>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      {/* navbar */}
      <div className="flex justify-between px-2 py-2 items-center border-b border-gray-300 relative">
        {/* Logo */}
        <div className="flex items-center">
          <img
            src="https://bcassetcdn.com/social/zqwc0qw82i/preview.png"
            width={70}
            alt="Logo"
          />
          <div className="flex gap-1">
            <p className="text-sm font-semibold text-[#FF2351]">Maju</p>
            <p className="text-sm font-light">Kiri</p>
          </div>
        </div>

        {/* Menu (hidden on mobile) */}
        <div className={`flex-col md:flex-row gap-5 absolute md:static bg-white top-16 left-0 right-0 px-5 py-3 md:p-0 md:flex ${menuOpen ? 'flex border-y mt-2 border-gray-200 z-10' : 'hidden'} md:flex`}>
          <div className="flex gap-1 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#000" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1"><path d="M5 12H3l9-9l9 9h-2M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7" /><path d="M9 21v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v6" /></g></svg>
            <p className="text-sm font-light text-[#000]">Menu</p>
          </div>
          <div className="flex gap-1 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#000" d="M11.962 20q-2.881 0-5.056-1.768T4.16 13.7q-.062-.221.044-.409t.333-.218q.213-.03.375.093q.161.123.229.35q.542 2.384 2.446 3.934T11.962 19q2.925 0 4.962-2.037T18.962 12t-2.038-4.963T11.962 5q-1.553 0-2.918.656q-1.365.655-2.41 1.805h1.981q.213 0 .357.144t.143.357t-.143.356t-.357.143H5.77q-.343 0-.575-.232t-.232-.575V4.808q0-.213.144-.356t.356-.144t.356.144t.144.356v1.888q1.16-1.273 2.718-1.984T11.962 4q1.665 0 3.119.626t2.541 1.714t1.714 2.54t.626 3.119t-.626 3.12t-1.714 2.542t-2.541 1.713t-3.12.626m.558-8.208l3 3q.14.14.15.344q.01.205-.15.364q-.16.16-.353.16q-.195 0-.354-.16l-3.05-3.05q-.131-.13-.187-.274t-.056-.297V7.5q0-.213.144-.356Q11.807 7 12.02 7t.356.144t.143.356z" /></svg>
            <p className="text-sm font-light text-[#000]">History</p>
          </div>
          <div className="flex gap-1 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#000" d="M11.5 14c4.14 0 7.5 1.57 7.5 3.5V20H4v-2.5c0-1.93 3.36-3.5 7.5-3.5m6.5 3.5c0-1.38-2.91-2.5-6.5-2.5S5 16.12 5 17.5V19h13zM11.5 5A3.5 3.5 0 0 1 15 8.5a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8 8.5A3.5 3.5 0 0 1 11.5 5m0 1A2.5 2.5 0 0 0 9 8.5a2.5 2.5 0 0 0 2.5 2.5A2.5 2.5 0 0 0 14 8.5A2.5 2.5 0 0 0 11.5 6" /></svg>
            <p className="text-sm font-light text-[#000]">Member</p>
          </div>
        </div>

        {/* Profile (hidden on mobile) */}
        <div className="md:flex hidden gap-1 items-centern ">
          <div className="rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="#000" d="M11.5 14c4.14 0 7.5 1.57 7.5 3.5V20H4v-2.5c0-1.93 3.36-3.5 7.5-3.5m6.5 3.5c0-1.38-2.91-2.5-6.5-2.5S5 16.12 5 17.5V19h13zM11.5 5A3.5 3.5 0 0 1 15 8.5a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8 8.5A3.5 3.5 0 0 1 11.5 5m0 1A2.5 2.5 0 0 0 9 8.5a2.5 2.5 0 0 0 2.5 2.5A2.5 2.5 0 0 0 14 8.5A2.5 2.5 0 0 0 11.5 6" /></svg>
          </div>
          <div className="flex-col">
            <p className="text-sm font-light">Ari eka saputra</p>
            <p className="text-xs font-semibold text-[#FF2351]">Cashier</p>
          </div>
        </div>

        {/* Hamburger Button */}
        <button
          className="md:hidden block z-20 relative w-6 h-6"
          onClick={() => setMenuOpen((prev) => !prev)}
        >
          <span
            className={`block absolute h-0.5 w-full bg-black transform transition duration-300 ease-in-out ${menuOpen ? 'rotate-45 top-2.5' : 'top-1'
              }`}
          />
          <span
            className={`block absolute h-0.5 w-full bg-black transition duration-300 ease-in-out ${menuOpen ? 'opacity-0' : 'top-3'
              }`}
          />
          <span
            className={`block absolute h-0.5 w-full bg-black transform transition duration-300 ease-in-out ${menuOpen ? '-rotate-45 top-2.5' : 'top-5'
              }`}
          />
        </button>
      </div>
      {/* end  navbar */}
        </>
    )
    
    
}