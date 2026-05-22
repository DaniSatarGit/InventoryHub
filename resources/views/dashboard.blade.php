<x-app-layout>

    <div class="max-w-7xl mx-auto p-6">

        <!-- Page Title -->
        <div class="mb-8 flex justify-between items-center">

            <h1 class="text-3xl font-bold text-white">
                Inventory Dashboard
            </h1>

            <a href="{{ route('products.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-lg font-semibold text-sm text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>
                Urus Produk Anda
            </a>

        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

            <!-- Total Products -->
            <div class="bg-white shadow-xl rounded-2xl p-6">

                <h2 class="text-gray-500 text-sm mb-2">
                    Total Products
                </h2>

                <p class="text-4xl font-bold text-blue-600">

                    {{ $totalProducts }}

                </p>

            </div>

            <!-- Low Stock -->
            <div class="bg-white shadow-xl rounded-2xl p-6">

                <h2 class="text-gray-500 text-sm mb-2">
                    Low Stock Items
                </h2>

                <p class="text-4xl font-bold text-red-500">

                    {{ $lowStocks->count() }}

                </p>

            </div>

            <!-- Recent Activities -->
            <div class="bg-white shadow-xl rounded-2xl p-6">

                <h2 class="text-gray-500 text-sm mb-2">
                    Recent Activities
                </h2>

                <p class="text-4xl font-bold text-green-500">

                    {{ $recentActivities->count() }}

                </p>

            </div>

        </div>

        <!-- Low Stock List -->
        <div class="bg-white shadow-xl rounded-2xl p-6 mb-8">

            <h2 class="text-xl font-bold mb-4 text-gray-800">
                Low Stock Alert
            </h2>

            @forelse($lowStocks as $product)

                <div class="flex justify-between border-b py-3">

                    <span class="text-gray-700">
                        {{ $product->name }}
                    </span>

                    <span class="text-red-500 font-semibold">

                        {{ $product->quantity }} left

                    </span>

                </div>

            @empty

                <p class="text-gray-500">
                    No low stock items.
                </p>

            @endforelse

        </div>

        <!-- Recent Activities -->
        <div class="bg-white shadow-xl rounded-2xl p-6">

            <h2 class="text-xl font-bold mb-4 text-gray-800">
                Recent Activities
            </h2>

            @forelse($recentActivities as $activity)

                <div class="flex justify-between border-b py-3">

                    <span class="text-gray-700">

                        {{ strtoupper($activity->type) }}

                        -

                        Product ID:
                        {{ $activity->product_id }}

                    </span>

                    <span class="font-semibold text-blue-500">

                        {{ $activity->quantity }}

                    </span>

                </div>

            @empty

                <p class="text-gray-500">
                    No recent activities.
                </p>

            @endforelse

        </div>

    </div>

</x-app-layout>