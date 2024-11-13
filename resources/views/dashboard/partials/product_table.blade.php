<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurora</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.navigation')
    <div class="text-gray-900">
        <div class="p-4 flex">
            <div class="flex items-center justify-between w-full">
                <h1 class="text-3xl">Products</h1>
                <button class="bg-[#3e3121] text-white rounded-md px-4 py-2 transition"
                    onclick="openModal('modelConfirm')">
                    Add Product
                </button>
                @include('dashboard.partials.create_product')
            </div>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Image</th>
                        <th class="text-left p-3 px-5">Name</th>
                        <th class="text-left p-3 px-5">Description</th>
                        <th class="text-left p-3 px-5">Price</th>
                        <th class="text-left p-3 px-5">stock</th>
                        <th class="text-left p-3 px-5">Edit</th>
                        <th class="text-left p-3 px-5">Delete</th>
                        <th></th>
                    </tr>
                    @foreach ($products->reverse() as $product)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="p-3 px-5">
                                <div>
                                    <img class="w-20 h-20 object-cover" src="{{ asset("storage/images/products/" .$product->image) }}" alt="">
                                </div>
                            </td>
                            <td class="p-3 px-5">
                                <div>{{ $product->name }}</div>
                            </td>
                            <td class="p-3 px-5">
                                <div>{{ $product->description }}</div>
                            </td>
                            <td class="p-3 px-5">
                                <div>{{ $product->price }}</div>
                            </td>
                            <td class="p-3 px-5">
                                <div>{{ $product->stock }}</div>
                            </td>
                            <td class="p-3 px-5">
                               
                              <button class="bg-gray-800 text-white rounded-md px-4 py-2 transition"
                              onclick="openModal('product{{ $product->id }}')">
                              Edit
                          </button>
                          @include('dashboard.partials.edit_product')
                            </td>
                            <td class="p-3 px-5">
                                
                              <form method="post" action="{{ route("product.destroy" , $product) }}">
                                  @csrf @method("DELETE")
                                  <button class="text-white bg-red-500 px-2 py-2 rounded-lg">Delete</button>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

