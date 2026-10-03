<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow">
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Panel de Productos</h1>
            <a href="/productos/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Nuevo Producto</a>
        </div>

        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-50">
                    <th class="border p-2">Nombre</th>
                    <th class="border p-2">SKU</th>
                    <th class="border p-2">Categoría</th>
                    <th class="border p-2">Precio</th>
                    <th class="border p-2">Stock</th>
                    <th class="border p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($productos as $producto)
                    <tr>
                        <td class="border p-2">{{ $producto->nombre }}</td>
                        <td class="border p-2">{{ $producto->sku }}</td>
                        <td class="border p-2">{{ $producto->categoria }}</td>
                        <td class="border p-2">Bs. {{ number_format($producto->precio, 2) }}</td>
                        <td class="border p-2">{{ $producto->stock }}</td>
                        <td class="border p-2 flex space-x-2">
                            <a href="{{ route('productos.show', $producto) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('productos.edit', $producto) }}" class="text-yellow-600 hover:underline">Editar</a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" onsubmit="return confirm('¿Eliminar este producto?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center p-4 text-gray-500">No existen productos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $productos->links() }}
        </div>
    </div>
</body>
</html>