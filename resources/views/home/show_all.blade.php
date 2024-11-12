<x-app-layout>
    <div class="flex flex-wrap pt-32">
        @foreach ($products as $product)
            <div class="w-[32%] bg-[#FCF8F3] text-center relative">
                <div class="relative group">
                    <!-- Product Image with Opacity Change on Hover -->
                    <img class="w-[40vw] h-[70vh] object-contain p-5 transition-opacity duration-500 group-hover:opacity-80" src="{{ asset('storage/images/products/' . $product->image) }}" alt="{{ $product->name }}">
                    
                    <!-- Add to Cart Button -->
                    <form method="post" action="{{ route('cart.add', $product) }}" class="absolute inset-0 top-72 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        @csrf @method('PUT')
                        <button class="w-[10vw] py-2 bg-[#3e3121] text-white rounded-full hover:bg-[#2c2319]">Add To Cart</button>
                    </form>
                </div>
                <div class="p-4">
                    <h1 class="font-bold text-xl text-[#3e3121]">{{ $product->name }}</h1>
                    <p class="text-gray-600 text-lg">{{ $product->price }} $</p>
                    @if ($product->stock <= 0)
                        <button class="w-full py-2 text-red-500 rounded-full border border-gray-300 cursor-not-allowed mt-4">Out Of Stock</button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
