@extends('template.mainTemplate')

@section('container')
    <div class="row">
        @if (session()->has('successTambah'))
            <div class="mt-4 alert alert-primary alert-dismissible fade show" role="alert">
                <p>Successs Mengedit Data!</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('successDelete'))
            <div class="mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                <p>Successs Delete Data!</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="">
            <span class="badge badge-primary p-2">{{ $jumlah }} Barang</span>
            <span class="badge badge-danger p-2">{{ $jumlahX }} Barang Tanpa Harga Beli</span>

            <h1>List Barang : {{ $active }}</h1>

        </div>
    </div>
    <label for="cari">Cari Barang : </label>
    <form action="/cari-barang" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" id="cari" aria-label="Username"
                aria-describedby="basic-addon1" name="cari">
            <button class="btn btn-primary" type="submit">
                Cari</button>
        </div>
    </form>

    <div class="mb-3">
        <a href="/list-barang">
            <button class="btn-sm btn-dark" @if ($active == 'Semua') disabled @endif>Semua Barang</button>
        </a>
        <a href="/list-barang-minuman">
            <button class="btn-sm btn-secondary" @if ($active == 'Minuman') disabled @endif>Minuman</button>
        </a>
        <a href="/list-barang-makanan">
            <button class="btn-sm btn-secondary" @if ($active == 'Makanan') disabled @endif>Makanan Ringan</button>
        </a>
        <a href="/list-barang-sabunMandi">
            <button class="btn-sm btn-secondary" @if ($active == 'Sabun Mandi') disabled @endif>Sabun Mandi</button>
        </a>
        <a href="/list-barang-sabunCuci">
            <button class="btn-sm btn-secondary"@if ($active == 'Sabun Cuci') disabled @endif>Sabun Cuci</button>
        </a>
        <a href="/list-barang-rokok">
            <button class="btn-sm btn-secondary" @if ($active == 'Rokok') disabled @endif>Produk Rokok</button>
        </a>
        <a href="/list-barang-es-krim">
            <button class="btn-sm btn-secondary" @if ($active == 'Es Krim') disabled @endif>Es Krim</button>
        </a>
        <a href="/list-barang-lain">
            <button class="btn-sm btn-secondary" @if ($active == 'Lain-Lain') disabled @endif>Lain-lain</button>
        </a>
    </div>


    <div class="">
        {{ $barang->links('pagination::bootstrap-5') }}
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Barang {{ $active }}</h6>
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
                                        <th rowspan="1" colspan="1">Id</th>
                                        <th rowspan="1" colspan="1">Nama</th>
                                        <th rowspan="1" colspan="1">Nama Kategori</th>
                                        <th rowspan="1" colspan="1">Harga Beli</th>
                                        <th rowspan="1" colspan="1"><span class="text-danger">Harga Jual</span></th>
                                        <th rowspan="1" colspan="1">Keuntungan</th>
                                        <th rowspan="1" colspan="1">Stok</th>
                                        <th rowspan="1" colspan="1">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($barang as $data)
                                        <tr class="">
                                            <td class="sorting_1">{{ $data->id }}</td>
                                            <td>{{ $data->nama }}
                                                @if ($data->profit == 0)
                                                    <span class="badge badge-danger">X</span>
                                                @endif

                                            </td>
                                            <td><span class="p-2 badge bg-dark">
                                                    @if ($data->kategori_id == 1)
                                                        Minuman
                                                    @elseif ($data->kategori_id == 2)
                                                        Makanan Ringan
                                                    @elseif ($data->kategori_id == 3)
                                                        Sabun Mandi
                                                    @elseif ($data->kategori_id == 4)
                                                        Sabun Cuci
                                                    @elseif ($data->kategori_id == 5)
                                                        Produk Rokok
                                                    @elseif ($data->kategori_id == 6)
                                                        Es Krim
                                                    @elseif ($data->kategori_id == 7)
                                                        Es Krim
                                                    @endif
                                                </span></td>
                                            <td>{{ $data->hargaBeli }}</td>
                                            <td><span class="text-danger">{{ $data->hargaJual }}</span></td>
                                            <td>{{ $data->profit }}</td>
                                            <td>{{ $data->stok }}</td>
                                            <td>
                                                <a href="/editbarang/{{ $data->id }}"><button
                                                        class="btn btn-warning">Edit</button></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $barang->links('pagination::bootstrap-5') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
