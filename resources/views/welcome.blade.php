<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventoriKu - Manajemen Inventaris Barang</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-blue-50 to-purple-50 flex justify-center items-center min-h-screen">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">InventoriKu</h1>
            <p class="text-xl text-gray-600 mb-8">Solusi Terbaik untuk Manajemen Inventaris Barang Anda</p>
            <div class="bg-white rounded-lg shadow-xl p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Apa itu InventoriKu?</h2>
                        <p class="text-gray-600 mb-4">
                            InventoriKu adalah aplikasi manajemen inventaris yang dirancang untuk membantu Anda mengelola stok barang dengan mudah, cepat, dan efisien. Dengan fitur-fitur canggih, Anda dapat memantau, mengontrol, dan mengoptimalkan inventaris bisnis Anda.
                        </p>
                        <p class="text-gray-600">
                            Mulai gunakan InventoriKu sekarang dan rasakan kemudahan dalam mengelola inventaris Anda!
                        </p>
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('logo/inventory_logo.jpg')}}" alt="InventoriKu Illustration" class="rounded-lg shadow-md">
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Login</a>
                <a href="{{ route('register') }}" class="ml-4 px-6 py-3 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition duration-300">Register</a>
            </div>
        </div>
    </div>
</body>
</html>