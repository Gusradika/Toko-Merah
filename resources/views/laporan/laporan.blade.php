@extends('template.mainTemplate')

@section('container')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Laporan Penjualan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th rowspan="1" colspan="1">No</th>
                                        <th rowspan="1" colspan="1">Tanggal</th>
                                        <th rowspan="1" colspan="1">Jumlah Barang Terjual</th>
                                        <th rowspan="1" colspan="1">Jumlah Pelanggan</th>
                                        <th rowspan="1" colspan="1">Total Pendapatan Kotor</th>
                                        <th rowspan="1" colspan="1">Keuntungan Bersih</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($hasil as $data)
                                        <tr class="">
                                            <td class="sorting_1">{{ $data['nomor'] }}</td>
                                            <td>{{ $data['tanggal'] }}

                                            </td>
                                            <td>{{ $data['jumlahBarang'] }}</td>
                                            <td>{{ $data['jumlahPelanggan'] }}</td>
                                            <td><span class="text-danger">{{ $data['kotor'] }}</span></td>
                                            <td>{{ $data['bersih'] }}</td>
                                        </tr>
                                    @endforeach
                                    {{-- @endforeach --}}

                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{-- {{ $barang->links('pagination::bootstrap-5') }} --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
