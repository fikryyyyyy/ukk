<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Welcome</title>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-900 text-gray-200">
    <div class="w-full max-w-2xl bg-gray-800 p-12 rounded-lg shadow-xl text-center">
        <h1 class="text-3xl font-bold text-gray-100 mb-4">Selamat datang di Asset Management</h1>
        <p class="text-gray-400 mb-6">Kelola aset Anda secara efisien dengan platform intuitif kami. Lacak, pantau, dan laporkan inventaris Anda dengan mudah.</p>
        
        <div class="flex justify-center space-x-4">
            <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition">Login</a>
            <a href="{{ route('register') }}" class="px-6 py-2 bg-gray-700 text-gray-200 border border-gray-500 rounded-md shadow-md hover:bg-gray-600 transition">Sign Up</a>
        </div>
    </div>
</body>
</html>
