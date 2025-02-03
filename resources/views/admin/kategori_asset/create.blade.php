@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary">Tambah Kategori Asset</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.kategori_asset.store') }}" method="POST" class="bg p-3">
        @csrf
        <div class="mb-4">
            <label for="kode_kategori_asset" class="form-label">Kode Kategori Asset</label>
            <input type="text" name="kode_kategori_asset" id="kode_kategori_asset" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="kategori_asset" class="form-label">Nama Kategori Asset</label>
            <input type="text" name="kategori_asset" id="kategori_asset" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <a href="{{ route('admin.kategori_asset.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection

<style>
    .bg{
        background-color: #343a40;
    }
</style>