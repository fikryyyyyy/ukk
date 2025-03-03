@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('admin.opname.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Pengadaan</label>
                <select name="id_pengadaan" class="form-control">
                    @foreach($pengadaans as $pengadaan)
                        <option value="{{ $pengadaan->id_pengadaan }}">{{ $pengadaan->masterBarang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Opname</label>
                <input type="date" name="tgl_opname" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Kondisi</label>
                <select name="kondisi" class="form-control">
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                    <option value="Dalam Pengecekan">Dalam Pengecekan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <select name="keterangan" class="form-control">
                    <option value="Digudang">Digudang</option>
                    <option value="Dibengkel">Dibengkel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection