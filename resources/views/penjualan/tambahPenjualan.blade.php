@extends('template.mainTemplate')

@section('container')
    <div class="container-fluid">
        @if (session()->has('success'))
            <div class="mt-4 alert alert-primary alert-dismissible fade show" role="alert">
                <p>Successs Menambahkan Penjualan!</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="alert alert-warning col-lg-12" role="alert">
            <p>Anda Sedang berada pada Penambahan Penjualan</p>
        </div>
        <form action="/savePenjualan" method="get">
            <div class="row">
                <aside class="col-lg-9">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-borderless table-shopping-cart">
                                <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">Price</th>
                                        <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                    </tr>
                                </thead>

                                <tbody id="itemList">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </aside>
                <aside class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="form-group"> <label>Nama Pelanggan</label>
                                <div class="input-group"> <input type="text" class="form-control coupon" name="nama"
                                        placeholder="Tuliskan nama anda..." value="Pelanggan" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Total : </dt>
                                <dd class="text-right ml-3 total">0</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Diskon : </dt>
                                <dd class="text-right text-danger ml-3">-</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Grand Total : </dt>
                                <strong>
                                    <dd class="text-right text-dark b ml-3 total">0</dd>
                                </strong>
                            </dl>
                            <input type="hidden" name="totalPesanan" class="totalPesanan" value="">
                            <input type="hidden" name="grandTotal" class="grandTotal" value="">
                            <hr>
                            <button type="submit" name="submit"
                                class="btn btn-out btn-primary btn-square btn-main mt-2 w-100" data-abc="true">Simpan
                                Perubahan</button>
                        </div>
                    </div>

                </aside>
            </div>

        </form>
        <div class="mt-4">
            <label for="cari">Cari Barang : </label>
            <div class="input-group mb-3 w-100 ">

                <input type="text" class="form-control" placeholder="Cari Barang..." id="cari"
                    aria-label="Cari Barang..." aria-describedby="basic-addon1" name="cari">
                <button class="btn btn-primary w-25" type="button" id="btnCari">
                    Cari</button>
            </div>

            <div id="tableContainer" style="max-height: 300px; overflow-y: auto;">
                <table class="table table-bordered" id="tableX">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Kategori ID</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="hasil">
                        <!-- Baris tabel akan ditambahkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            function updateData() {
                const price = document.querySelectorAll(".price");
                const qty = document.querySelectorAll(".quantity");
                const satuan = document.querySelectorAll(".hargaSatuan");
                const tambah = document.querySelectorAll(".tambah");
                const kurang = document.querySelectorAll(".kurang");
                const total = document.querySelectorAll(".total");
                const totalSatuan = document.querySelectorAll(".totalSatuan");
                const topesanan = document.querySelectorAll(".totalPesanan");
                const grandTotal = document.querySelectorAll(".grandTotal");
                var x = 0;
                var totalPesanan = 0;
                updatePrice();

                function updatePrice() {

                    qty.forEach(function(x, i) {
                        totalPesanan += +qty[i].value;
                    })
                    topesanan[0].value = totalPesanan;
                    totalPesanan = 0;

                    price.forEach(function(x, i) {
                        price[i].innerHTML = satuan[i].value * qty[i].value;
                        totalSatuan[i].value = satuan[i].value * qty[i].value
                    });

                    for (let y = 0; y < price.length; y++) {
                        x += +totalSatuan[y].value;
                    }
                    total[0].innerHTML = x;
                    total[1].innerHTML = x;
                    grandTotal[0].value = x;
                    x = 0;

                }

                qty.forEach(function(x) {
                    x.addEventListener("change", function(y) {
                        updatePrice();
                    });
                })

                tambah.forEach(function(e, i) {
                    e.addEventListener("click", function(x) {
                        // alert("sds");
                        updatePrice();
                    });
                });

                kurang.forEach(function(e, i) {
                    e.addEventListener("click", function(x) {
                        // alert("sds");
                        updatePrice();
                    });
                });
            }



            function tambahItem(nama, harga, jumlah, barangId) {
                var item = ` <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <figcaption class="info"> <a href="#" class="title text-dark"
                                                        data-abc="true">${nama}</a>
                                                </figcaption>
                                            </figure>
                                            <input type="hidden" name="item_id[]" value="${barangId}">
                                        </td>
                                        <td>
                                            <div class="col-md-3 col-lg-3 col-xl-3 d-flex">
                                                <button type="button" class="btn btn-link px-2 kurang"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i data-feather="minus" class="">-</i>
                                                </button>
                                                <input type="hidden" name="id" value="2">
                                                <input id="form1" min="0" name="quantity[]" class="quantity"
                                                    value="1" type="number" class="form-control-sm">

                                                <button type="button" class="btn btn-link px-2 tambah"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i data-feather="plus" class="">+</i>
                                                </button>
                                            </div>


                                        </td>

                                        <td>
                                            <div class="price-wrap"> <var class="price">${harga}</var> <small class="text-muted">
                                                    Rp.${harga}/Satuan </small>
                                                <input type="hidden" name="totalSatuan[]" class="totalSatuan"
                                                    value="${harga}">
                                            </div>
                                            <input type="hidden" name="harga[]" class="hargaSatuan" value="${harga}">
                                        </td>
                                        <td class="text-right  d-md-block"> <button type="button" class="btn btn-light hapus" data-abc="true">
                        <i data-feather="trash-2" class="">X</i>
                    </button> </td>
                                    </tr>`;
                // item += '<p class="item-nama">' + nama + '</p>';
                // item += '<p class="item-harga">Harga: Rp.' + harga + '</p>';
                // item += '<p class="item-jumlah">Jumlah: ' + jumlah + '</p>';
                // item += '</div>';


                $('#itemList').append(item);

                updateData();

            }

            $('#itemList').on('click', '.hapus', function() {
                $(this).closest('tr').remove();
                updateData(); // Panggil fungsi updateData jika diperlukan
            });


            $('#tableX').on('click', '.btnTambah', function() {
                var row = $(this).closest('tr');
                var nama = row.find('.title').text();
                var barangId = row.find('.barangId').text();
                var harga = row.find('.priceX').text();
                var jumlah = 1;
                console.log(harga);
                tambahItem(nama, harga, jumlah, barangId);
            });

            $('#btnCari').click(function() {
                // Tentukan URL sumber data JSON
                var url = 'http://127.0.0.1:8000/getBarang'; // Ganti dengan URL yang sesuai
                var inputValue = $('#cari').val();
                console.log(inputValue);
                // Lakukan permintaan AJAX dengan jQuery
                $.ajax({
                    type: 'GET',
                    data: {
                        input: inputValue
                    },
                    url: url,
                    dataType: 'json',
                    success: function(data) {
                        // Buat tabel baru dengan data JSON
                        var tableRows = '';

                        // Loop melalui data JSON dan tambahkan baris tabel untuk setiap entri
                        for (var i = 0; i < data.length; i++) {
                            tableRows += '<tr>';
                            tableRows += '<td class="barangId">' + data[i].id + '</td>';
                            tableRows += '<td class="title">' + data[i].nama + '</td>';
                            console.log(data[i].kategori_id);
                            if (data[i].kategori_id == 1) {
                                tableRows +=
                                    '<td><span class="badge badge-secondary">Minuman' +
                                    '</span></td>';
                            } else if (data[i].kategori_id == 2) {
                                tableRows +=
                                    '<td><span class="badge badge-secondary">Makanan Ringan' +
                                    '</span></td>';
                            } else if (data[i].kategori_id == 3) {
                                tableRows +=
                                    '<td><span class="badge badge-secondary">Sabun Mandi' +
                                    '</span></td>';
                            } else if (data[i].kategori_id == 4) {
                                tableRows +=
                                    '<td><span class="badge badge-secondary">Sabun Cuci' +
                                    '</span></td>';
                            } else if (data[i].kategori_id == 5) {
                                tableRows +=
                                    '<td><span class="badge badge-secondary">Produk Rokok' +
                                    '</span></td>';
                            } else if (data[i].kategori_id == 6) {
                                tableRows +=
                                    '<td><span class="badge badge-secondary">Es Krim' +
                                    '</span></td>';
                            } else if (data[i].kategori_id == 7) {
                                tableRows +=
                                    '<td><span class="badge badge-secondary">Lain-lain' +
                                    '</span></td>';
                            }


                            tableRows += '<td class="priceX">' + data[i].hargaJual + '</td>';
                            tableRows += '<td>' + data[i].stok + '</td>';
                            tableRows +=
                                '<td><button class="btn btn-primary btnTambah" data-id="' +
                                data[i].id + '">Tambah</button></td>';
                            tableRows += '</tr>';
                        }


                        // Tambahkan tabel ke elemen dengan id "hasil"
                        $('#hasil').html(tableRows);

                        // Setel tindakan untuk tombol "Tambah"
                        // $('.btnTambah').click(function() {
                        //     var id = $(this).data('id');
                        //     // Lakukan tindakan tambah sesuai kebutuhan
                        //     // Misalnya, panggil fungsi untuk menambahkan item ke keranjang belanja
                        //     // atau lakukan operasi lain yang Anda inginkan.
                        //     console.log('Tambahkan item dengan ID: ' + id);
                        // });
                    },
                    error: function(xhr, status, error) {
                        // Tangkap pesan kesalahan jika terjadi dan tampilkan di elemen dengan id "hasil"
                        var errorMessage = 'Terjadi kesalahan saat mengambil data: ' +
                            status +
                            ' ' + error;
                        $('#hasil').html(errorMessage);
                    }
                });
            });
        });
    </script>
@endsection
