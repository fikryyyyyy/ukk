@extends('layouts.app')

@section('content')
<div class="container ">
    <h1 class="my-4 text-center text-primary">Daftar Kategori Asset</h1>

    <!-- Menampilkan pesan error atau success -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
 

    <a href="{{ route('admin.kategori_asset.create') }}" class="btn btn-primary mb-3">Tambah Kategori
        Asset</a>

    <!-- Tabel Kategori Asset -->
    {{-- <div class="table-responsive shadow-lg rounded-lg overflow-hidden"> --}}
        <table class="table table-bordered ">
            <thead class="thead-light">
                <tr>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori_assets as $kategori)
                    <tr>
                        <td>{{ $kategori->kode_kategori_asset }}</td>
                        <td>{{ $kategori->kategori_asset }}</td>
                        <td>
                            <a href="{{ route('admin.kategori_asset.edit', $kategori->id_kategori_asset) }}"
                                class="btn btn-warning btn-sml">Edit</a>

                            <!-- Form Hapus -->
                            <form action="{{ route('admin.kategori_asset.destroy', $kategori->id_kategori_asset) }}"
                                method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sml "
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{-- </div> --}}
</div>
@endsection

<!-- SweetAlert Library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Notifikasi Jika Ada Pesan -->
<script>
    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
        });
    @endif

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: "{{ session('success') }}",
        });
    @endif
</script>




