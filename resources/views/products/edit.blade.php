<x-app-layout>

    <div class="max-w-4xl mx-auto p-6">

        <!-- Title -->
        <div class="mb-6">

            <h1 class="text-3xl font-bold text-white">
                Edit Product
            </h1>

        </div>

        <!-- Form Card -->
        <div class="bg-white shadow-xl rounded-2xl p-6">

            <form action="{{ route('products.update', $product->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <!-- Product Name -->
                <div class="mb-5">

                    <label class="block text-gray-700 font-medium mb-2">

                        Product Name

                    </label>

                    <input type="text"
                           name="name"
                           value="{{ $product->name }}"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm">

                </div>

                <!-- Category -->
                <div class="mb-5">

                    <label class="block text-gray-700 font-medium mb-2">

                        Category

                    </label>

                    <input type="text"
                           name="category"
                           value="{{ $product->category }}"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm">

                </div>

                <!-- Quantity -->
                <div class="mb-5">

                    <label class="block text-gray-700 font-medium mb-2">

                        Quantity

                    </label>

                    <input type="number"
                           name="quantity"
                           value="{{ $product->quantity }}"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm">

                </div>

                <!-- Price -->
                <div class="mb-6">

                    <label class="block text-gray-700 font-medium mb-2">

                        Price

                    </label>

                    <input type="number"
                           step="0.01"
                           name="price"
                           value="{{ $product->price }}"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm">

                </div>

                <!-- Button -->
                <button type="submit"
                        class="bg-amber-500 hover:bg-amber-600 transition text-white px-6 py-2 rounded-lg shadow">

                    Update Product

                </button>

            </form>

        </div>

    </div>

</x-app-layout>