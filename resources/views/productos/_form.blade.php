@csrf

<div class="mb-4">
    <label class="block font-medium text-gray-700">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre ?? '') }}" class="border p-2 w-full rounded">
    @error('nombre') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block font-medium text-gray-700">SKU (Código único)</label>
    <input type="text" name="sku" value="{{ old('sku', $producto->sku ?? '') }}" class="border p-2 w-full rounded">
    @error('sku') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block font-medium text-gray-700">Categoría</label>
    <select name="categoria" class="border p-2 w-full rounded">
        @foreach(['Audio', 'Cómputo', 'Accesorios', 'Wearables'] as $cat)
            <option value="{{ $cat }}" {{ old('categoria', $producto->categoria ?? '') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
        @endforeach
    </select>
    @error('categoria') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block font-medium text-gray-700">Precio (Bs)</label>
    <input type="number" step="0.01" name="precio" value="{{ old('precio', $producto->precio ?? '') }}" class="border p-2 w-full rounded">
    @error('precio') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block font-medium text-gray-700">Stock</label>
    <input type="number" name="stock" value="{{ old('stock', $producto->stock ?? 0) }}" class="border p-2 w-full rounded">
    @error('stock') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block font-medium text-gray-700">Descripción</label>
    <textarea name="descripcion" class="border p-2 w-full rounded">{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
    @error('descripcion') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block font-medium text-gray-700">URL de Imagen</label>
    <input type="url" name="imagen" value="{{ old('imagen', $producto->imagen ?? '') }}" class="border p-2 w-full rounded">
    @error('imagen') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4 flex items-center">
    <input type="hidden" name="destacado" value="0">
    <input type="checkbox" name="destacado" value="1" {{ old('destacado', $producto->destacado ?? false) ? 'checked' : '' }} class="mr-2 h-4 w-4">
    <label class="font-medium text-gray-700">Producto Destacado</label>
</div>