@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <form action="{{ route('admin.depresiasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Lama Depresiasi (tahun)</label>
            <input type="number" name="lama_depresiasi" class="form-control">
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>
        <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-gradient">Simpan</button>
            <a href="{{ auth()->user()->role === 'admin' ? route('admin.depresiasi.index') : route('depresiasi.index')  }}" class="btn btn-gradient-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection
