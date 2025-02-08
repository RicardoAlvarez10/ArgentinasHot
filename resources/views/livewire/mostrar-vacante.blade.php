<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        :root {
            --color-primary: #4A4A4A;
            --color-overlay: rgba(0, 0, 0, 0.8);
            --color-overlay-hover: rgba(0, 0, 0, 0.9);
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* background-image: linear-gradient(to left, rgba(13,0,36,1) 0%, rgba(56,9,121,1) 100%, rgba(0,212,255,1) 100%); */
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
            width: 192px;
            height: 256px;
        }

        .image-container img {
            width: 192px;
            height: 256px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .description {
            flex: 1;
            padding: 10px;
            background: #f9f9f9;
            border-radius: 8px;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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

        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                gap: 15px;
            }

            .image-container {
                margin: 0 auto;
            }

            .description {
                text-align: center;
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
    </div>

    @cannot('create', App\Models\Vacante::class)
        <div class="mt-8 flex flex-col items-center space-y-6">
            <livewire:postular-vacante :vacante="$vacante" />
        </div>
    @endcannot
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
</html>
