@extends('layouts.dashboard')

@section('title', 'Data penjualan')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                    <div class="card-body">
                        <a href="{{ route('tambah-penjualan') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>
                            Tambah</a></a>
                            <a href="{{ route('sales.export.excel') }}" class="btn btn-warning mb-3"><i class="fas fa-save"></i> Export to EXCEL</a>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pelanggan</th>
                                        <th>Total Harga</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penjualans as $sale_detail)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sale_detail->customer ? $sale_detail->customer->nama : 'Pelanggan Tidak Tersedia' }}
                                            </td>
                                            <td>{{ $sale_detail->bayar }}</td>
                                            <td>{{ $sale_detail->date }}</td>
                                            <td>
                                                <button type="button"
                                                    onclick="window.location='{{ route('sale.detail', $sale_detail->id) }}'"
                                                    class="btn btn-info"><i class="fas fa-info-circle"></i> Detail</button>
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
    </div>

@endsection
