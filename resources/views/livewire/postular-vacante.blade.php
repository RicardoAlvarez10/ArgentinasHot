<div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6 mt-10">
    @if(session()->has('mensaje'))
        <p class="bg-green-100 text-green-700 border border-green-200 rounded-md p-4 text-center mb-6">
            {{ session('mensaje') }}
        </p>
    @endif
    <div class="text-center">
        <a href="https://wa.me/54{{ $vacante->WhatsApp_Number }}/?text=Hola%20%C2%BFC%C3%B3mo%20est%C3%A1s%3F%2C%20te%20vi%20en%20ArgentinasHot.com%20Deseo%20recibir%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios%20y%20tarifas%2C%20muchas%20gracias."
           target="_blank" 
           class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded transition">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path d="M16.6,14c-0.2-0.1-1.5-0.7-1.7-0.8c-0.2-0.1-0.4-0.1-0.6,0.1c-0.2,0.2-0.6,0.8-0.8,1
                    c-0.1,0.2-0.3,0.2-0.5,0.1c-0.7-0.3-1.4-0.7-2-1.2c-0.5-0.5-1-1.1-1.4-1.7c-0.1-0.2,0-0.4,0.1-0.5
                    c0.1-0.1,0.2-0.3,0.4-0.4c0.1-0.1,0.2-0.3,0.2-0.4c0.1-0.1,0.1-0.3,0-0.4c-0.1-0.1-0.6-1.3-0.8-1.8
                    C9.4,7.3,9.2,7.3,9,7.3c-0.1,0-0.3,0-0.5,0C8.3,7.3,8,7.5,7.9,7.6C7.3,8.2,7,8.9,7,9.7
                    c0.1,0.9,0.4,1.8,1,2.6c1.1,1.6,2.5,2.9,4.2,3.7c0.5,0.2,0.9,0.4,1.4,0.5c0.5,0.2,1,0.2,1.6,0.1
                    c0.7-0.1,1.3-0.6,1.7-1.2c0.2-0.4,0.2-0.8,0.1-1.2C17,14.2,16.8,14.1,16.6,14 M19.1,4.9
                    C15.2,1,8.9,1,5,4.9c-3.2,3.2-3.8,8.1-1.6,12L2,22l5.3-1.4c1.5,0.8,3.1,1.2,4.7,1.2h0
                    c5.5,0,9.9-4.4,9.9-9.9C22,9.3,20.9,6.8,19.1,4.9 M16.4,18.9c-1.3,0.8-2.8,1.3-4.4,1.3h0
                    c-1.5,0-2.9-0.4-4.2-1.1l-0.3-0.2l-3.1,0.8l0.8-3l-0.2-0.3C2.6,12.4,3.8,7.4,7.7,4.9
                    S16.6,3.7,19,7.5C21.4,11.4,20.3,16.5,16.4,18.9"/>
            </svg>
            WhatsApp
        </a>
    </div>
</div>
