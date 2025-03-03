<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md text-center">
            <div class="p-4 font-bold text-lg">Inventaris Barang</div>
            <ul class="space-y-2">
                <ul class="list-none">
                    <li>
                        <a {{ request()->is('user/pengadaan') || request()->is('user/pengadaan/*') ? 'bg-gray-300' : '' }}"
                            href="{{ route('user.pengadaan.index') }}">
                            <i class="bi bi-cart"></i> Pengadaan
                        </a>
                    </li>

                    <li>
                        <a {{ request()->is('admin/opname') || request()->is('user/opname/*') ? 'bg-gray-300' : '' }}"
                            href="{{ route('user.opname.index') }}">
                            <i class="bi bi-journal"></i> Opname
                        </a>
                    </li>
                    <li>
                        <a {{ request()->is('user/hitung_depresiasi') || request()->is('user/hitung_depresiasi/*') ? 'bg-gray-300' : '' }}"
                            href="{{ route('user.hitung_depresiasi.index') }}">
                            <i class="bi bi-calculator"></i> Hitung Depresiasi
                        </a>
                    </li>
                    </ul>
                    <!-- Logout Button -->
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="logout-btn">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
        </div>

        <!-- Main content -->
        <div class="p-3">
            @yield('content')
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
