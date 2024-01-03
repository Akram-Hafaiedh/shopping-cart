<div class="container mx-auto my-8">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold mb-4">Create a New Product</h2>

        <!-- Add a Back button -->
        <a href="{{ route('shopping-cart') }}" class="text-blue-500 hover:underline mb-4 block" wire:navigate>
            ← Back</a>
    </div>

    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    <form wire:submit.prevent="storeProduct">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input wire:model="name" type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">

            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea wire:model="description" id="description" name="description" rows="3"
                class="mt-1 p-2 w-full border rounded-md"></textarea>

            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        </div>

        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input wire:model="price" type="number" step="0.01" id="price" name="price"
                class="mt-1 p-2 w-full border rounded-md">

            @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save Product</button>
    </form>
</div>