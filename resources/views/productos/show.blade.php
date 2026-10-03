<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Producto</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">{{ $producto->nombre }}</h1>
        
        @if($producto->imagen)
            <img src="{{ $producto->imagen }}" alt="Imagen" class="w-full h-64 object-cover mb-4 rounded">
        @endif

        <p class="mb-2"><strong>SKU:</strong> {{ $producto->sku }}</p>
        <p class="mb-2"><strong>Categoría:</strong> {{ $producto->categoria }}</p>
        <p class="mb-2"><strong>Precio:</strong> Bs. {{ number_format($producto->precio, 2) }}</p>
        <p class="mb-2"><strong>Stock:</strong> {{ $producto->stock }} 
            @if($producto->stock == 0)
                <span class="bg-red-200 text-red-800 text-xs px-2 py-1 rounded">Agotado</span>
            @endif
        </p>
        <p class="mb-2"><strong>Destacado:</strong> {{ $producto->destacado ? 'Sí' : 'No' }}</p>
        <p class="mb-4"><strong>Descripción:</strong> {{ $producto->descripcion ?? 'Sin descripción' }}</p>

        <div class="flex space-x-2">
            <a href="{{ route('productos.edit', $producto) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
            <a href="{{ route('productos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
        </div>
    </div>
</body>
</html>