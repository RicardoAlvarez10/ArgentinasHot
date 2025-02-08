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
        }

        .main-content {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            flex-wrap: wrap;
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

        /* Media Queries para pantallas pequeñas */
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                gap: 15px;
            }

            .image-container {
                width: 192px;
                height: 256px;
                margin: 0 auto;
            }

            .description {
                text-align: center;
            }

            .gallery-item {
                width: 192px;
                height: 256px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            .main-content {
                gap: 10px;
            }

            .image-container {
                width: 192px;
                height: 256px;
                margin: 0 auto;
            }

            .gallery-item {
                width: 192px;
                height: 256px;
            }
        }
    </style>
</head>
<body>
    <div class="container p-8 rounded-lg shadow-lg text-center">
        <h3 class="font-bold text-2xl text-gray-900">{{ $vacante->titulo }}</h3>
        
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

        
        <!-- @foreach (range(1, 5) as $i)
    @php 
        $imagenVar = 'imagen' . $i; 
    @endphp
    <p>{{ $imagenVar }}: {{ $vacante->$imagenVar }}</p>
@endforeach -->

        <div class="gallery">
            @foreach (range(1, 5) as $i)
                @php $imagenVar = 'imagen' . $i; @endphp
                @if (!empty($vacante->$imagenVar))
                <div class="gallery-item relative overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out flex">
  <div style="width: 100%; height: auto;">
    <a href="{{ asset('storage/vacantes/' . $vacante->$imagenVar) }}" data-lightbox="galeria" data-title="{{ $vacante->titulo }}">
      <img src="{{ asset('storage/vacantes/' . $vacante->$imagenVar) }}"
           alt="Imagen extra {{ $vacante->titulo }}"
           class="w-full h-full object-cover" loading="lazy">
    </a>
  </div>
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
