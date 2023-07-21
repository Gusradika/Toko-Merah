<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class barangController extends Controller
{
    //

    public function viewBarang()
    {
        $data = barang::paginate(15);
        $dataX = barang::get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        $dataJumlah = count(barang::get());
        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Semua", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function cariBarang(Request $request)
    {
        $data = DB::table('barangs')->where('nama', 'like', '%' . $request->input('cari') . '%')->paginate(15);
        return view('barang.barang', ["barang" => $data, "jumlah" => "-", "active" => "Pencarian (" . $request->input('cari') . ")", "jumlahX" => "-"]);
    }

    public function viewBarangMinuman()
    {
        $data = barang::where("kategori_id", 1)->paginate(15);
        $dataJumlah = count(barang::where("kategori_id", 1)->get());

        $dataX = barang::where("kategori_id", 1)->get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Minuman", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function viewBarangMakanan()
    {
        $data = barang::where("kategori_id", 2)->paginate(15);

        $dataX = barang::where("kategori_id", 2)->get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        $dataJumlah = count(barang::where("kategori_id", 2)->get());
        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Makanan", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function viewBarangSabunMandi()
    {
        $data = barang::where("kategori_id", 3)->paginate(15);

        $dataX = barang::where("kategori_id", 3)->get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        $dataJumlah = count(barang::where("kategori_id", 3)->get());
        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Sabun Mandi", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function viewBarangSabunCuci()
    {
        $data = barang::where("kategori_id", 4)->paginate(15);

        $dataX = barang::where("kategori_id", 4)->get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        $dataJumlah = count(barang::where("kategori_id", 4)->get());
        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Sabun Cuci", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function viewBarangRokok()
    {
        $data = barang::where("kategori_id", 5)->paginate(15);

        $dataX = barang::where("kategori_id", 5)->get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        $dataJumlah = count(barang::where("kategori_id", 5)->get());
        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Sabun Cuci", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function viewBarangEsKrim()
    {
        $data = barang::where("kategori_id", 6)->paginate(15);

        $dataX = barang::where("kategori_id", 6)->get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        $dataJumlah = count(barang::where("kategori_id", 6)->get());
        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Sabun Cuci", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function viewBarangLainLain()
    {
        $data = barang::where("kategori_id", 7)->paginate(15);

        $dataX = barang::where("kategori_id", 7)->get();
        $jumlahTanpaHargaBeli = 0;

        foreach ($dataX as $key) {
            if ($key["hargaBeli"] == 0) {
                $jumlahTanpaHargaBeli++;
            }
        }

        $dataJumlah = count(barang::where("kategori_id", 7)->get());
        return view('barang.barang', ["barang" => $data, "jumlah" => $dataJumlah, "active" => "Lain-Lain", "jumlahX" => $jumlahTanpaHargaBeli]);
    }

    public function viewTambahBarang()
    {
        return view('barang.tambahBarang');
    }

    public function saveBarang(Request $request)
    {
        $data = $request->validate([
            "nama" => "required|min:1",
            "kategori" => "required",
            "hargaJual" => "required|min:1",
        ]);

        $stok = 0;
        $profit = 0;

        if ($request->stok != 0) {
            $stok = $request->stok;
        }
        $hargaBeli = 0;

        if ($request->hargaBeli == null) {
            $hargaBeli = 0;
        } else {
            $hargaBeli = $request->hargaBeli;
        }

        if ($request->hargaBeli != 0) {
            $profit = $request->hargaJual - $request->hargaBeli;
        }

        $temp = [
            "nama" => $request->nama,
            "kategori_id" => $request->kategori,
            "hargaBeli" => $hargaBeli,
            "hargaJual" => $request->hargaJual,
            "profit" => $profit,
            "stok" => $stok,
        ];
        barang::create($temp);
        return redirect()->back()->with('success', "Success Menambahkan Barang");
    }


    public function viewEditBarangs(barang $barang)
    {
        return view('barang.editBarang', ["barang" => $barang]);
    }

    public function updateBarang(Request $request)
    {
        $data = $request->validate([
            "nama" => "required|min:1",
            "kategori" => "required",
            "hargaJual" => "required|min:1",
        ]);

        $id = $request->id;

        $stok = 0;
        $profit = 0;

        if ($request->stok != 0) {
            $stok = $request->stok;
        }
        $hargaBeli = 0;

        if ($request->hargaBeli == null) {
            $hargaBeli = 0;
        } else {
            $hargaBeli = $request->hargaBeli;
        }

        if ($request->hargaBeli != 0) {
            $profit = $request->hargaJual - $request->hargaBeli;
        }

        $temp = [
            "nama" => $request->nama,
            "kategori_id" => $request->kategori,
            "hargaBeli" => $hargaBeli,
            "hargaJual" => $request->hargaJual,
            "profit" => $profit,
            "stok" => $stok,
        ];

        barang::where('id', $id)->update($temp);
        return redirect('/list-barang')->with('successTambah', "Success Menambahkan Barang");
    }

    public function deleteBarang(Request $request)
    {
        $id = $request->id;

        barang::destroy("id", $id);
        return redirect('/list-barang')->with('successDelete', "Success Menambahkan Barang");
    }
}
