<x-app-layout>

    <div class="max-w-7xl mx-auto p-6">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">

            <h1 class="text-3xl font-bold text-white">
                Products
            </h1>

            <a href="{{ route('products.create') }}"
               class="bg-blue-600 hover:bg-blue-700 transition text-white px-5 py-2 rounded-lg shadow">

                Add Product

            </a>

        </div>

        <!-- Product Table Card -->
        <div class="bg-white shadow-xl rounded-2xl p-6">

            <table class="w-full">

                <!-- Table Header -->
                <thead>

                    <tr class="border-b">

                        <th class="text-left py-4 text-gray-700 font-semibold">
                            Name
                        </th>

                        <th class="text-left py-4 text-gray-700 font-semibold">
                            Category
                        </th>

                        <th class="text-left py-4 text-gray-700 font-semibold">
                            Quantity
                        </th>

                        <th class="text-left py-4 text-gray-700 font-semibold">
                            Price
                        </th>

                        <th class="text-left py-4 text-gray-700 font-semibold">
                            Action
                        </th>

                    </tr>

                </thead>

                <!-- Table Body -->
                <tbody>

                    @forelse($products as $product)

                    <tr class="border-b hover:bg-gray-50 transition">

                        <!-- Product Name -->
                        <td class="py-4 text-gray-800">

                            {{ $product->name }}

                        </td>

                        <!-- Category -->
                        <td class="text-gray-800">

                            {{ $product->category }}

                        </td>

                        <!-- Quantity -->
                        <td>

                            @if($product->quantity < 10)

                                <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">

                                    {{ $product->quantity }}

                                </span>

                            @else

                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">

                                    {{ $product->quantity }}

                                </span>

                            @endif

                        </td>

                        <!-- Price -->
                        <td class="text-gray-800 font-medium">

                            RM {{ number_format($product->price, 2) }}

                        </td>

                        <!-- Actions -->
                        <td class="flex gap-2 py-4">

<form action="{{ route('products.stock.in', $product->id) }}"
      method="POST">

    @csrf

    <input type="hidden"
           name="quantity"
           value="1">

    <button
        class="bg-green-500 hover:bg-green-600 transition text-black px-3 py-1 rounded-lg text-sm shadow">

        + Stock

    </button>

</form>

<form action="{{ route('products.stock.out', $product->id) }}"
      method="POST">

    @csrf

    <input type="hidden"
           name="quantity"
           value="1">

    <button
        class="bg-orange-500 hover:bg-orange-600 transition text-black px-3 py-1 rounded-lg text-sm shadow">

        - Stock

    </button>

</form>

                            <a href="{{ route('products.edit', $product->id) }}"
                            class="bg-amber-500 hover:bg-amber-600 transition text-black px-3 py-1 rounded-lg text-sm shadow">

                                Edit

                            </a>

                        <form action="{{ route('products.destroy', $product->id) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this product?')">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-rose-500 hover:bg-rose-600 transition text-black px-3 py-1 rounded-lg text-sm shadow">

                                Delete

                            </button>

                        </form>

                        </td>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5"
                            class="py-6 text-center text-gray-500">

                            No products found.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-app-layout>