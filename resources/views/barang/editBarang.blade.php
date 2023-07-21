@extends('template.mainTemplate')

@section('container')
    <div class="card-body">
        @if (session()->has('success'))
            <div class="mt-4 alert alert-primary alert-dismissible fade show" role="alert">
                <p>Successs Mengganti Data!</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h1>Edit Barang</h1>
        <div class="row">
            <div class="col">
                <form class="contact-form form-squared-borders" action="/updateBarang" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label class="form-label mb-1 text-2">Nama Barang</label>
                            @error('nama')
                                <div class="invalid-feedback">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <input type="hidden" class="form-control text-3 h-auto py-2" name="id" required=""
                                value="{{ $barang->id }}" readonly>
                            <input type="text" data-msg-required="Please enter your name." maxlength="100"
                                class="form-control text-3 h-auto py-2  @error('nama') is-invalid @enderror" name="nama"
                                required="" value="{{ $barang->nama }}" placeholder="Nama Barang">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label">Kategori</label>
                            @error('kategori')
                                <div class="invalid-feedback">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <div class="custom-select-1">
                                <select
                                    class="form-select form-control h-auto py-2  @error('kategori') is-invalid @enderror"
                                    data-msg-required="Please select a city." name="kategori" required="">
                                    <option value="">Pilih Kategori</option>
                                    <option value="1" @if ($barang->kategori_id == 1) selected @endif>Minuman
                                    </option>
                                    <option value="2" @if ($barang->kategori_id == 2) selected @endif>Makanan Ringan
                                    </option>
                                    <option value="3" @if ($barang->kategori_id == 3) selected @endif>Sabun Mandi
                                    </option>
                                    <option value="4"@if ($barang->kategori_id == 4) selected @endif>Sabun Cuci
                                    </option>
                                    <option value="5"@if ($barang->kategori_id == 5) selected @endif>Produk Rokok
                                    </option>
                                    <option value="6"@if ($barang->kategori_id == 6) selected @endif>Es Krim</option>
                                    <option value="6"@if ($barang->kategori_id == 7) selected @endif>Lain-Lain
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label mb-1 text-2">Harga Beli</label>
                            @error('hargaBeli')
                                <div class="invalid-feedback">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <input type="number" data-msg-required="Please enter the subject." maxlength="100"
                                class="form-control text-3 h-auto py-2  @error('hargaBeli') is-invalid @enderror"
                                name="hargaBeli" value="{{ old('hargaBeli', $barang->hargaBeli) }}" placeholder="0">
                        </div>
                        <div class="col-6">
                            <label class="form-label mb-1 text-2">Harga Jual</label>
                            @error('hargaJual')
                                <div class="invalid-feedback">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <input type="number" data-msg-required="Please enter the subject." maxlength="100"
                                class="form-control text-3 h-auto py-2  @error('hargaJual') is-invalid @enderror"
                                name="hargaJual" value="{{ old('hargaJual', $barang->hargaJual) }}" required
                                placeholder="0">
                        </div>

                        <div class="col-12">
                            <label class="form-label mb-1 text-2">Stok</label>
                            @error('stok')
                                <div class="invalid-feedback">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <input type="number" data-msg-required="Please enter the subject." maxlength="100"
                                value="{{ old('stok', $barang->stok) }}"
                                class="form-control text-3 h-auto py-2  @error('stok') is-invalid @enderror" name="stok"
                                placeholder="0">
                        </div>
                    </div>



                    <div class="mt-4 row">
                        <div class="form-group col">
                            <input type="submit" value="Save Barang" class="w-100 btn-lg btn-primary"
                                data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
                <form class="contact-form form-squared-borders" action="/deleteBarang" method="POST">
                    @csrf
                    <input type="hidden" class="form-control text-3 h-auto py-2" name="id" required=""
                        value="{{ $barang->id }}" readonly>
                    <button type="submit" class="w-100 btn-lg btn-danger">Delete Barang</button>
                </form>
            </div>
        </div>
    </div>
@endsection
