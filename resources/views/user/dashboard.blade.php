@extends('layouts.user')

@section('title', 'Dashboard')

@section('content')
    <div class="container">

        <div class="row">
            <!-- Card Pengadaan -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3 shadow-lg hover-shadow" data-bs-toggle="modal"
                    data-bs-target="#modalPengadaan" style="cursor: pointer;">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="bi bi-cart-fill" style="font-size: 2rem;"></i><br> Total Pengadaan
                        </h5>
                        <p class="card-text display-4">{{ $totalPengadaan }}</p>
                    </div>
                </div>
            </div>

            <!-- Card Opname -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3 shadow" data-bs-toggle="modal" data-bs-target="#modalOpname"
                    style="cursor: pointer;">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="bi bi-clipboard-check" style="font-size: 2rem;"></i><br> Total Opname
                        </h5>
                        <p class="card-text display-4">{{ $totalOpname }}</p>
                    </div>
                </div>
            </div>

            <!-- Card Hitung Depresiasi -->
            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3 shadow" data-bs-toggle="modal" data-bs-target="#modalDepresiasi"
                    style="cursor: pointer;">
                    <div class="card-body text-center">
                        <h5 class="card-title">
                            <i class="bi bi-calculator-fill" style="font-size: 2rem;"></i><br> Total Hitung Depresiasi
                        </h5>
                        <p class="card-text display-4">{{ $totalDepresiasi }}</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Pengadaan -->
        <!-- Modal Pengadaan -->
        <div class="modal fade" id="modalPengadaan" tabindex="-1" aria-labelledby="modalPengadaanLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl"> <!-- Ubah modal menjadi lebih lebar -->
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="modalPengadaanLabel">Data Pengadaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body overflow-auto" style="max-height: 80vh;"> <!-- Scroll jika terlalu panjang -->
                        <div class="table-responsive ">
                            <table class="table table-bordered">
                                <thead class="table">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Lama Depresiasi</th>
                                        <th>Depresiasi Barang</th>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pengadaan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->masterBarang->nama_barang ?? '-' }}</td>
                                            <td>{{ $item->depresiasi->lama_depresiasi ?? '-' }} tahun</td>
                                            <td>{{ number_format(floatval($item->nilai_depresiasi_terkini ?? 0), 0, ',', '.') }}
                                            </td>
                                            <td>{{ $item->merk->merk ?? '-' }}</td>
                                            <td>{{ $item->satuan->nama_satuan ?? '-' }}</td>
                                            <td>{{ $item->subKategoriAsset->nama_sub_kategori ?? '-' }}</td>
                                            <td>{{ $item->distributor->nama_distributor ?? '-' }}</td>
                                            <td>{{ $item->kode_pengadaan }}</td>
                                            <td>{{ $item->no_invoice }}</td>
                                            <td>{{ $item->no_seri_barang }}</td>
                                            <td>{{ $item->tahun_produksi }}</td>
                                            <td>{{ $item->tgl_pengadaan }}</td>
                                            <td>{{ number_format(floatval($item->harga_barang ?? 0), 0, ',', '.') }}</td>
                                            <td>{{ number_format(floatval($item->nilai_barang ?? 0), 0, ',', '.') }}</td>
                                            <td>{{ $item->fb == '1' ? 'Ya' : 'Tidak' }}</td>
                                            <td>{{ $item->keterangan ?? '-' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="18" class="text-center">Belum ada data pengadaan.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Opname -->
        <div class="modal fade" id="modalOpname" tabindex="-1" aria-labelledby="modalOpnameLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="modalOpnameLabel">Data Opname</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body overflow-auto" style="max-height: 80vh;">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode Pengadaan</th>
                                        <th>Nomor Seri Barang</th>
                                        <th>Tanggal Opname</th>
                                        <th>Kondisi</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($opnames as $opname)
                                        <tr>
                                            <td>{{ $opname->id_opname }}</td>
                                            <td>{{ $opname->pengadaan->kode_pengadaan ?? '-' }}</td>
                                            <td>{{ $opname->pengadaan->no_seri_barang ?? '-' }}</td>
                                            <td>{{ $opname->tgl_opname }}</td>
                                            <td>{{ $opname->kondisi }}</td>
                                            <td>{{ $opname->keterangan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Hitung Depresiasi -->
        <div class="modal fade" id="modalDepresiasi" tabindex="-1" aria-labelledby="modalDepresiasiLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-danger  text-white">
                        <h5 class="modal-title" id="modalDepresiasiLabel">Data Hitung Depresiasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body overflow-auto" style="max-height: 80vh;">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="table">
                                    <tr>
                                        <th>Kode Pengadaan</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Hitung</th>
                                        <th>Durasi (Bulan)</th>
                                        <th>Nilai Barang</th>
                                        <th>Rincian Nilai Barang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($depresiasiItems as $depresiasi)
                                        <tr>
                                            <td>{{ optional($depresiasi->pengadaan)->kode_pengadaan ?? '-' }}</td>
                                            <td>{{ optional($depresiasi->pengadaan->masterBarang)->nama_barang ?? '-' }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($depresiasi->tgl_hitung_depresiasi)->format('d-m-Y') }}
                                            </td>
                                            <td>{{ optional($depresiasi->pengadaan->depresiasi)->lama_depresiasi * 12 ?? '-' }}
                                                bulan</td>
                                            <td>Rp {{ number_format($depresiasi->nilai_barang, 0, ',', '.') }}</td>
                                            <td>
                                                <button class="btn btn-danger mb-3" data-bs-toggle="modal"
                                                    data-bs-target="#detailHitung" data-id="{{ $depresiasi->id_hitung_depresiasi }}">
                                                    <i class="bi bi-eye"></i> Lihat Semua Rincian Nilai Barang
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="detailHitung" tabindex="-1" aria-labelledby="modalDetailDepresiasiLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="modalDetailDepresiasiLabel">Detail Hitung Depresiasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body overflow-auto" style="max-height: 80vh;">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Bulan</th>
                                        <th>Nilai Barang</th>
                                        <th>Nilai Setelah Depresiasi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengadaans as $pengadaan)
                                        @php
                                            $harga_awal = $pengadaan->harga_barang;
                                            $lama_depresiasi_tahun = optional($pengadaan->depresiasi)->lama_depresiasi;
                                            $lama_depresiasi_bulan = $lama_depresiasi_tahun * 12;
                                            $penyusutan_per_bulan = $harga_awal / $lama_depresiasi_bulan;
                                            $nilai_barang = $harga_awal;
                                            $bulan_counter = 1;
                                        @endphp

                                        @while ($nilai_barang > 0 && $bulan_counter <= $lama_depresiasi_bulan)
                                            <tr>
                                                <td>{{ $pengadaan->masterBarang->nama_barang ?? '-' }}</td>
                                                <td>{{ \Carbon\Carbon::parse($pengadaan->tgl_pengadaan)->addMonths($bulan_counter - 1)->format('F Y') }}
                                                </td>
                                                <td>Rp {{ number_format($harga_awal, 0, ',', '.') }}</td>
                                                <td>Rp {{ number_format(max(0, $nilai_barang), 0, ',', '.') }}</td>
                                            </tr>
                                            @php
                                                $nilai_barang -= $penyusutan_per_bulan;
                                                $bulan_counter++;
                                            @endphp
                                        @endwhile
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
@endsection
