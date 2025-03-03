@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('admin.opname.update', $opname->id_opname) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Pengadaan</label>
                <select name="id_pengadaan" class="form-control">
                    @foreach($pengadaans as $pengadaan)
                        <option value="{{ $pengadaan->id_pengadaan }}" 
                            {{ $pengadaan->id_pengadaan == $opname->id_pengadaan ? 'selected' : '' }}>
                            {{ $pengadaan->masterBarang->nama_barang }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Opname</label>
                <input type="date" name="tgl_opname" class="form-control" 
                    value="{{ old('tgl_opname', $opname->tgl_opname) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Kondisi</label>
                <select name="kondisi" class="form-control">
                    <option value="Baik" {{ old('kondisi', $opname->kondisi) == 'Baik' ? 'selected' : '' }}>Baik</option>
                    <option value="Rusak" {{ old('kondisi', $opname->kondisi) == 'Rusak' ? 'selected' : '' }}>Rusak</option>
                    <option value="Dalam Pengecekan" {{ old('kondisi', $opname->kondisi) == 'Dalam Pengecekan' ? 'selected' : '' }}>Dalam Pengecekan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <select name="keterangan" class="form-control">
                    <option value="Digudang" {{ old('keterangan', $opname->keterangan) == 'Digudang' ? 'selected' : '' }}>Digudang</option>
                    <option value="Dibengkel" {{ old('keterangan', $opname->keterangan) == 'Dibengkel' ? 'selected' : '' }}>Dibengkel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
