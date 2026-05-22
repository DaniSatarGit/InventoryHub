<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang ke Inventory Hub</title>
    
    <!-- Menggunakan Tailwind CSS CDN untuk rekaan pantas & responsif -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">
    <div class="bg-white p-10 rounded-2xl shadow-xl max-w-sm w-full text-center border border-gray-100">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-2">Inventory Hub</h1>
        <p class="text-gray-500 mb-8 text-sm">Sila log masuk atau daftar untuk mula menguruskan inventori anda.</p>
        
        <div class="flex flex-col gap-4">
            <a href="{{ route('login') }}" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-xl transition duration-200 ease-in-out shadow-sm">
                Log Masuk
            </a>
            <a href="{{ route('register') }}" class="w-full bg-transparent border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold py-3 px-4 rounded-xl transition duration-200 ease-in-out">
                Daftar Akaun
            </a>
        </div>
    </div>
</body>
</html>