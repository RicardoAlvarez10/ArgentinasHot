<div class="bg-gray-100 p-6 mt-10 rounded-lg shadow-lg flex flex-col items-center">
    <h3 class="text-2xl font-bold text-center my-4 flex items-center">
        Contáctame
        <svg class="ml-2" width="24px" height="24px" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <radialGradient id="gradient1" cx="68.884" cy="124.296" r="70.587" gradientTransform="matrix(-1 -.00434 -.00713 1.6408 131.986 -79.345)" gradientUnits="userSpaceOnUse">
                <stop offset=".314" stop-color="#ff9800"></stop>
                <stop offset=".662" stop-color="#ff6d00"></stop>
                <stop offset=".972" stop-color="#f44336"></stop>
            </radialGradient>
            <path d="M35.56 40.73c-.57 6.08-.97 16.84..." fill="url(#gradient1)"></path>
        </svg>
    </h3>

    @if(session()->has('mensaje'))
        <p class="bg-green-100 text-green-700 border border-green-400 font-semibold p-3 rounded-lg text-sm text-center my-5">
            {{ session('mensaje') }}
        </p>
    @else
        <div class="text-center mt-4">
            <a href="https://wa.me/54{{ $vacante->WhatsApp_Number }}/?text=Hola%2C%20me%20gustaría%20obtener%20más%20información." target="_blank" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-full inline-flex items-center shadow-lg transition-transform transform hover:scale-105">
                <svg class="mr-2" width="24px" height="24px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 31C23.732 31 30 24.732 30 17C30 9.26801..." fill="#BFC8D0"></path>
                    <path d="M28 16C28 22.6274 22.6274 28 16 28..." fill="url(#paint0_linear_87_7264)"></path>
                </svg>
                WhatsApp
            </a>
        </div>
    @endif
</div>
