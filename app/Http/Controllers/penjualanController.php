<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\detailPenjualan;
use App\Models\penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penjualanController extends Controller
{
    //

    public function viewTambahPenjualan()
    {
        return view("penjualan.tambahPenjualan");
    }

    public function getBarang()
    {
        $input = $_GET["input"];
        $data = DB::table('barangs')->where('nama', 'like', '%' . $input . '%')->get();

        return response()->json($data);
    }

    public function savePenjualan(request $request)
    {



        $jumlahPesanan = sizeof($request->item_id);

        $penjualanID = count(penjualan::get()) + 1;

        $data = [];

        $jumlahBarang = 0;
        $total = 0;

        // Kesalahannya itu kita sedang mengupdate apa yang tidak ada di Item

        for ($i = 0; $i < $jumlahPesanan; $i++) {
            $jumlahBarang += $request->quantity[$i];
            $total += $request->totalSatuan[$i];
            $x = barang::where('id', $request->item_id[$i])->get('hargaBeli')->first();
            $profit = $request->totalSatuan[$i] - ($x['hargaBeli'] * $request->quantity[$i]);
            $data = [
                "penjualan_id" => $penjualanID,
                "barang_id" => $request->item_id[$i],
                "jumlah" => $request->quantity[$i],
                "subTotal" => $request->totalSatuan[$i],
                "subProfit" => $profit
            ];
            detailPenjualan::create($data);
        }
        $temp = [
            "nama" => $request->nama,
            "jumlahPembelian" => $jumlahBarang,
            "total" => $total,
            "date" => $request->tanggal,
        ];
        penjualan::create($temp);

        return redirect("/tambahPenjualan")->with('success', "Berhasil");
    }

    public function viewLaporan()
    {

        $x = penjualan::get();


        $distinctDates = DB::table('penjualans')
            ->select(DB::raw('DISTINCT DATE(date) as date'))
            ->get();

        $hasil = [];

        for ($i = 0; $i < count($distinctDates); $i++) {
            $date = $distinctDates[$i]->date;
            $j = 0;
            $jumlahBeli = 0;
            $jumlahPelanggan = 0;
            $totalKotor = 0;
            $totalBersih = 0;
            $x = penjualan::where('date', $date)->get();
            foreach ($x as $key) {
                $y = detailPenjualan::where('penjualan_id', $key->id)->get();
                $jumlahBeli += $key->jumlahPembelian;
                $jumlahPelanggan += 1;
                $totalKotor += $key->total;
                foreach ($y as $key2) {
                    $totalBersih += $key2->subProfit;
                }
            }
            $j += 1;

            $moneyFormatKotor = number_format($totalKotor, 0, ',', '.');
            $moneyFormatBersih = number_format($totalBersih, 0, ',', '.');

            $data = [
                "nomor" => $j,
                "tanggal" => $date,
                "jumlahBarang" => $jumlahBeli,
                "jumlahPelanggan" => $jumlahPelanggan,
                "kotor" => $moneyFormatKotor,
                "bersih" => $moneyFormatBersih,
            ];

            array_push($hasil, $data);
        }

        return view('laporan.laporan', ["hasil" => $hasil]);
    }
}
