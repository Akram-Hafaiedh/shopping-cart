<div class="container mx-auto my-8">
    <div class="flex justify-between">
        <h1 class="text-3xl font-semibold mb-4">{{ $title }}</h1>

    </div>
    <div class="mb-4">
        <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md" wire:navigate>Add
            Product</a>
    </div>

    @if ($successMessage)
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ $successMessage }}</span>
    </div>
    @endif


    @if($cartItems->isEmpty())
    <p>Your shopping cart is empty.</p>
    @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($cartItems as $item)
        <div class="bg-white p-4 rounded-md shadow-md" wire:key="{{ $item->id }}">
            <p class=" text-xl font-semibold mb-2">{{ $item->product->name }}</p>
            <p class="text-gray-600 mb-2">{{ $item->product->description }}</p>
            <p class="text-gray-800">Price: ${{ $item->product->price }}</p>
            <p class="text-gray-800">Quantity: {{ $item->quantity }}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>