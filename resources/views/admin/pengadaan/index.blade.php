@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.pengadaan.create') }}" class="btn btn-primary mb-3">Buat Pengadaan Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Barang</th>
                <th>Lama Depresiasi</th>
                <th>Depresiasi Barang</th> <!-- Tambahan baru -->
                <th>Nama Merek</th>
                <th>Nama Satuan</th>
                <th>Nama Sub-Kategori</th>
                <th>Nama Distributor</th>
                <th>Kode Pengadaan</th>
                <th>Nomor Invoice</th>
                <th>Nomor Seri Barang</th>
                <th>Tahun Produksi</th>
                <th>Tanggal Pengadaan</th>
                <th>Harga Barang</th>
                <th>Nilai Barang</th>
                <th>FB</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($pengadaan->isEmpty())
                <tr>
                    <td colspan="18" class="text-center">Belum ada data pengadaan.</td>
                </tr>
            @else
                @foreach ($pengadaan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->masterBarang->nama_barang ?? '-' }}</td>
                        <td>{{ $item->depresiasi->lama_depresiasi ?? '-' }} tahun</td>
                        <td>{{ number_format($item->depresiasi_barang ?? 0, 0, ',', '.') }}</td>
                        <td>{{ $item->merk->merk ?? '-' }}</td>
                        <td>{{ $item->satuan->nama_satuan ?? '-' }}</td>
                        <td>{{ $item->subKategoriAsset->nama_sub_kategori ?? '-' }}</td>
                        <td>{{ $item->distributor->nama_distributor ?? '-' }}</td>
                        <td>{{ $item->kode_pengadaan }}</td>
                        <td>{{ $item->no_invoice }}</td>
                        <td>{{ $item->no_seri_barang }}</td>
                        <td>{{ $item->tahun_produksi }}</td>
                        <td>{{ $item->tgl_pengadaan }}</td>
                        <td>{{ number_format($item->harga_barang, 0, ',', '.') }}</td>
                        <td>{{ number_format($item->nilai_barang, 0, ',', '.') }}</td>
                        <td>{{ $item->fb == '1' ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $item->keterangan ?? '-' }}</td>
                        <td>
                            <a href="{{ route('admin.pengadaan.edit', $item->id_pengadaan) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.pengadaan.destroy', $item->id_pengadaan) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
