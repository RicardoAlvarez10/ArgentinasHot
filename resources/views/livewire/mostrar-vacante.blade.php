<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        :root {
            --color-primary: #4A4A4A;
            --color-overlay: rgba(0, 0, 0, 0.8);
            --color-overlay-hover: rgba(0, 0, 0, 0.9);
            --color-bg: #f0f4f8;  /* Fondo suave */
            --color-description-bg: #ffffff; /* Fondo blanco para la descripción */
            --color-shadow: rgba(0, 0, 0, 0.2);
        }

        body {
            background-color: var(--color-bg);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px var(--color-shadow);
        }

        .main-content {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            flex-wrap: wrap;
            padding-bottom: 20px;
            border-bottom: 2px solid #ddd;
        }

        .image-container {
            flex-shrink: 0;
            width: 100%; /* Cambiar de un tamaño fijo a 100% para que ocupe todo el espacio disponible */
            max-width: 192px; /* Limitar el tamaño máximo de la imagen */
            height: auto; /* Dejar que la altura se ajuste proporcionalmente */
        }

        .image-container img {
            width: 100%; /* Dejar que la imagen ocupe todo el contenedor */
            height: auto; /* Ajustar la altura proporcionalmente */
            object-fit: cover; /* Mantener la imagen bien recortada sin perder calidad */
            border-radius: 10px;
            box-shadow: 0 4px 8px var(--color-shadow);
        }

        .description {
            flex: 1;
            padding: 20px;
            background: var(--color-description-bg);
            border-radius: 8px;
            box-shadow: 0 4px 8px var(--color-shadow);
            word-wrap: break-word; /* Asegura que el texto largo se ajuste correctamente */
        }

        .gallery-title {
            margin-top: 30px;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            color: var(--color-primary);
            padding-bottom: 10px;
            border-bottom: 2px solid #ddd;
            width: max-content;
            margin-left: auto;
            margin-right: auto;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            margin-top: 20px;
        }

        .gallery-item {
            width: 192px;
            height: 256px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px var(--color-shadow);
            transition: transform 0.3s ease;
        }

        .gallery-item img {
            width: 192px;
            height: 256px;
            object-fit: cover;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .video-container {
            width: 100%;
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .video-container video {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px var(--color-shadow);
        }

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                gap: 15px;
            }

            .image-container {
                margin: 0 auto;
                width: 100%; /* Asegura que la imagen no sobrepase el contenedor */
            }

            .description {
                width: 100%;
                text-align: left;
                padding: 15px;
            }

            .gallery-item {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mb-4">
            <h3 class="font-bold text-2xl text-white">{{ $vacante->titulo }}</h3>
        </div>

        <div class="main-content">
            <div class="image-container">
                <a href="{{ asset('storage/vacantes/' . $vacante->imagen) }}" data-lightbox="galeria" data-title="{{ $vacante->titulo }}">
                    <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="Imagen vacante {{ $vacante->titulo }}">
                </a>
            </div>

            <div class="description">
                <p class="text-gray-700 leading-relaxed">{{ $vacante->descripcion }}</p>
            </div>
        </div>

        <h3 class="gallery-title">Galería de Imágenes</h3>

        <div class="gallery">
            @foreach (range(1, 5) as $i)
                @php $imagenVar = 'imagen' . $i; @endphp
                @if (!empty($vacante->$imagenVar))
                <div class="gallery-item">
                    <a href="{{ asset('storage/vacantes/' . $vacante->$imagenVar) }}" data-lightbox="galeria" data-title="{{ $vacante->titulo }}">
                        <img src="{{ asset('storage/vacantes/' . $vacante->$imagenVar) }}" alt="Imagen extra {{ $vacante->titulo }}" loading="lazy">
                    </a>
                </div>
                @endif
            @endforeach
        </div>

        <div class="video-container">
            <a href="{{ asset('storage/Videos/' . $vacante->video) }}" data-lightbox="galeria" data-title="{{ $vacante->titulo }}">
                <video controls>
                    <source src="{{ asset('storage/videos/' . $vacante->video) }}" type="video/mp4">
                    Tu navegador no soporta el formato de video.
                </video>
            </a>
        </div>

    </div>

    @cannot('create', App\Models\Vacante::class)
    <div class="mt-8 flex flex-col items-center space-y-6">
        <livewire:postular-vacante :vacante="$vacante" />
    </div>
    @endcannot

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html>
