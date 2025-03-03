@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.hitung_depresiasi.update', $hitungDepresiasi->id_hitung_depresiasi) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Pengadaan</label>
                    <select name="id_pengadaan" class="form-control" required>
                        <option value="">-- Pilih Pengadaan --</option>
                        @foreach($pengadaan as $item)
                            <option value="{{ $item->id_pengadaan }}" {{ $hitungDepresiasi->id_pengadaan == $item->id_pengadaan ? 'selected' : '' }}>
                                {{ $item->kode_pengadaan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Hitung Depresiasi</label>
                    <input type="date" name="tgl_hitung_depresiasi" class="form-control" value="{{ $hitungDepresiasi->tgl_hitung_depresiasi }}" required>
                </div>

               


                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update
                </button>
                <a href="{{ route('admin.hitung_depresiasi.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Batal
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
