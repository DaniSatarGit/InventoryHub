<x-app-layout>

    <div class="max-w-4xl mx-auto p-6">

        <!-- Page Title -->
        <div class="mb-6">

            <h1 class="text-3xl font-bold text-white">
                Add Product
            </h1>

        </div>

        <!-- Form Card -->
        <div class="bg-white shadow-xl rounded-2xl p-6">

            <form action="{{ route('products.store') }}"
                  method="POST">

                @csrf

                <!-- Product Name -->
                <div class="mb-5">

                    <label class="block text-gray-700 font-medium mb-2">

                        Product Name

                    </label>

                    <input type="text"
                           name="name"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">

                </div>

                <!-- Category -->
                <div class="mb-5">

                    <label class="block text-gray-700 font-medium mb-2">

                        Category

                    </label>

                    <input type="text"
                           name="category"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">

                </div>

                <!-- Quantity -->
                <div class="mb-5">

                    <label class="block text-gray-700 font-medium mb-2">

                        Quantity

                    </label>

                    <input type="number"
                           name="quantity"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">

                </div>

                <!-- Price -->
                <div class="mb-6">

                    <label class="block text-gray-700 font-medium mb-2">

                        Price

                    </label>

                    <input type="number"
                           step="0.01"
                           name="price"
                           required
                           class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">

                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 transition text-white px-6 py-2 rounded-lg shadow">

                    Save Product

                </button>

            </form>

        </div>

    </div>

</x-app-layout>