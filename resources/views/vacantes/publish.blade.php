<x-app-layout>
    <!-- Header (podrías usarlo como breadcrumb) -->
    <x-slot name="header">
        <div class="flex items-center space-x-2">
            <!-- Enlace a Home -->
            <a href="{{ route('home') }}" class="text-indigo-600 hover:underline">
                Home
            </a>
            <!-- Icono de flecha (puedes reemplazarlo por un SVG o icono de tu preferencia) -->
            <span class="text-gray-500">→</span>
            <!-- Título de la sección -->
            <span class="text-gray-800 font-semibold">Membresías Exclusivas de Lujo</span>
        </div>
    </x-slot>

    <!-- Contenido principal -->
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Sección de introducción -->
            <div class="bg-white shadow-lg sm:rounded-lg p-6 mb-8">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-4">
                    Sé parte de Membresías Exclusivas de Lujo
                </h1>
                <p class="text-center text-gray-600 mb-4">
                    Optimiza tu tiempo, maximiza tus ganancias, y conecta solo con quienes realmente busquen tus servicios.
                </p>
                <p class="text-center text-indigo-600 font-semibold">
                    Argentinashotvip@gmail.com
                </p>
            </div>

            <!-- Sección de descripción y beneficios -->
            <div class="bg-white shadow-lg sm:rounded-lg p-6 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Conexiones exclusivas, resultados garantizados
                </h2>
                <p class="text-gray-600 mb-4">
                    En Membresías Exclusivas de Lujo, hemos revolucionado la forma en que las escorts y masajistas VIP gestionan sus contactos y clientes. Nuestro sistema de segmentación por membresías y tarifas está diseñado específicamente para optimizar la calidad de tus conexiones, asegurándonos de que cada contacto sea respetuoso, solvente y realmente interesado en tus servicios.
                </p>
                <p class="text-gray-600 mb-4">
                    Con nosotros, ahorrarás tiempo y energía, enfocándote solo en clientes que cumplan con tu nivel y expectativas.
                </p>

                <h3 class="text-xl font-semibold text-gray-800 mb-2">¿Por qué elegirnos?</h3>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>
                        <strong>🎯 Segmentación inteligente:</strong>
                        Gracias a nuestras exclusivas membresías, conectamos cada segmento con tu público objetivo ideal. Esto significa menos mensajes innecesarios y más clientes que estén dispuestos a concretar.
                    </li>
                    <li>
                        <strong>🕒 Ahorra tiempo, aumenta tus ganancias:</strong>
                        Olvídate de interactuar con personas fuera de tu rango tarifario. Nuestra segmentación está diseñada para maximizar la efectividad de tus contactos.
                    </li>
                    <li>
                        <strong>🌐 Estamos donde importa:</strong>
                        Estamos en la primera página de Google en búsquedas clave, con un público fiel que visita nuestra plataforma diariamente.
                    </li>
                    <li>
                        <strong>📊 Resultados medibles:</strong>
                        Por WhatsApp o correo electrónico, te mostramos estadísticas claras sobre la cantidad y calidad de tráfico que manejamos, asegurándonos de que veas el impacto de nuestras herramientas desde el primer momento.
                    </li>
                </ul>
            </div>

            <!-- Sección de testimonios -->
            <div class="bg-white shadow-lg sm:rounded-lg p-6 mb-8">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Testimonios de nuestras usuarias</h3>
                <div class="space-y-6">
                    <blockquote class="border-l-4 border-indigo-600 pl-4 text-gray-600">
                        “Desde que me uní a las Membresías Exclusivas de Lujo, mis clientes no solo cumplen con mis tarifas, sino que el proceso se hizo mucho más sencillo. ¡Más tiempo para mí y mejores ganancias!”
                        <footer class="mt-2 text-sm text-gray-500">– Valeria, Palermo</footer>
                    </blockquote>
                    <blockquote class="border-l-4 border-indigo-600 pl-4 text-gray-600">
                        “Siempre dudé invertir en una plataforma VIP, pero la segmentación y la calidad de los clientes con los que ahora trabajo lo valen completamente.”
                        <footer class="mt-2 text-sm text-gray-500">– Camila, Puerto Madero</footer>
                    </blockquote>
                    <blockquote class="border-l-4 border-indigo-600 pl-4 text-gray-600">
                        “Publicar aquí ha sido lo mejor para mi carrera. Accedo directamente al tipo de clientes que busco sin perder el tiempo.”
                        <footer class="mt-2 text-sm text-gray-500">– Sofía, Belgrano</footer>
                    </blockquote>
                </div>
            </div>

            <!-- Sección de llamada a la acción -->
            <div class="bg-white shadow-lg sm:rounded-lg p-6 text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Únete a la exclusividad
                </h2>
                <p class="text-gray-600 mb-4">
                    No pierdas más tiempo con contactos no calificados. Maximiza tu potencial ahora con Membresías Exclusivas de Lujo.
                </p>
                <p class="text-indigo-600 font-semibold mb-4">
                    Argentinashotvip@gmail.com
                </p>
                <p class="text-gray-800 font-bold">
                    ArgHOT
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
