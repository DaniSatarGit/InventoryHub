<x-app-layout>

    <div class="max-w-7xl mx-auto p-6">

        <!-- Page Title -->
        <div class="mb-8">

            <h1 class="text-3xl font-bold text-white">
                Inventory Dashboard
            </h1>

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