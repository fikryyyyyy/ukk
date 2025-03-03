@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <form action="{{ route('admin.depresiasi.update', $depresiasi->id_depresiasi) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Lama Depresiasi (tahun)</label>
            <input type="number" name="lama_depresiasi" class="form-control" value="{{ $depresiasi->lama_depresiasi }}">
        </div>
        <div>
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="{{ $depresiasi->keterangan }}">
        </div>
        <div class="d-flex justify-content-between mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{  auth()->user()->role === 'admin' ? route('admin.depresiasi.index') : route('depresiasi.index')}}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection
