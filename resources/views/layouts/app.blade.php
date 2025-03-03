<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   @vite(['resources/css/app.css', 'resources/js/app.js'])  <!-- Gunakan asset dari Breeze -->
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-md">
            <div class="p-4 font-bold text-lg">Inventaris Barang</div>
            <ul class="space-y-2">
                <ul class="list-none">
                    <li>
                        <a href="{{ route('admin.kategori_asset.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/kategori_asset*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-box"></i> Kategori Asset
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sub_kategori_asset.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/sub_kategori_asset*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-boxes"></i> Sub Kategori Asset
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.distributor.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/distributor*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-truck"></i> Distributor
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.merk.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/merk*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-tags"></i> Merk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.satuan.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/satuan*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-rulers"></i> Satuan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.master_barang.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/master_barang*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-box-seam"></i> Master Barang
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.depresiasi.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/depresiasi*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-piggy-bank"></i> Depresiasi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pengadaan.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/pengadaan*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-cart"></i> Pengadaan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.hitung_depresiasi.index') }}"
                            class="block px-4 py-2 hover:bg-gray-200 {{ request()->is('admin/hitung_depresiasi*') ? 'bg-gray-300' : '' }}">
                            <i class="bi bi-calculator"></i> Hitung Depresiasi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.lokasi.index') }}"
                    class="block px-4 py-2 hover:bg-gray-200 {{request()->is('admin/lokasi') || request()->is('admin/lokasi*') ? 'bg-gray-300' : '' }}" >
                        <i class="bi bi-geo-alt"></i> Lokasi
                    </a>
                </li>
                <a href="{{ route('admin.mutasi_lokasi.index') }}"
                    class="block px-4 py-2 hover:bg-gray-200 {{request()->is('admin/mutasi_lokasi') || request()->is('admin/mutasi_lokasi*') ? 'bg-gray-300' : ''}}" >
                        <i class="bi bi-arrows-move"></i> Mutasi Lokasi
                    </a>
                </li>
                <a href="{{ route('admin.opname.index') }}"
                    class="block px-4 py-2 hover:bg-gray-200 {{request()->is('admin/opname') || request()->is('admin/opname*') ? 'bg-gray-300' : ''}}" >
                        <i class="bi bi-journal"></i> Opname
                    </a>
                </li>
                </ul>

                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 hover:bg-red-500 hover:text-white">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="mt-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>