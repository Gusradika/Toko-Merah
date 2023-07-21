<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\barang;
use App\Models\kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $minuman = [
            [
                "nama" => "Susu Ultra Strawberry 125ml",
                "hargaBeli" => "2800",
                "hargaJual" => "3500",
            ],
            [
                "nama" => "Susu Ultra Strawberry 200ml",
                "hargaBeli" => "0",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Susu Ultra Cokelat 125ml",
                "hargaBeli" => "2800",
                "hargaJual" => "3500",
            ],
            [
                "nama" => "Susu Ultra Cokelat 200ml",
                "hargaBeli" => "4375",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Teh Kotak Melati",
                "hargaBeli" => "3125",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "ABC Chocomalt Coffee",
                "hargaBeli" => "2500",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Golda Coffee Cappucino",
                "hargaBeli" => "2500",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Teh Pucuk",
                "hargaBeli" => "2479",
                "hargaJual" => "3500",
            ],
            [
                "nama" => "Fruit Tea Apple 230ml",
                "hargaBeli" => "0",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Mizone",
                "hargaBeli" => "3500",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "Ichi Ocha Melati 350ml",
                "hargaBeli" => "2250",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "IsoPlus",
                "hargaBeli" => "2500",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Pocari Sweat",
                "hargaBeli" => "0",
                "hargaJual" => "7000",
            ],
            [
                "nama" => "Coca-Cola 390ml",
                "hargaBeli" => "4333",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Fanta 390ml",
                "hargaBeli" => "4333",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "You C1000  Orange Water 500ml",
                "hargaBeli" => "0",
                "hargaJual" => "7500",
            ],
            [
                "nama" => "Goodday Originale Cappucino",
                "hargaBeli" => "0",
                "hargaJual" => "6000",
            ],
            [
                "nama" => "Tebs",
                "hargaBeli" => "3833",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "Larutan Cap Kaki Tiga Rasa Jeruk",
                "hargaBeli" => "0",
                "hargaJual" => "6000",
            ],
            [
                "nama" => "ABC Kopi Susu",
                "hargaBeli" => "0",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Milku Strawberry",
                "hargaBeli" => "2500",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Milku Cokelat",
                "hargaBeli" => "2500",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Hemaviton",
                "hargaBeli" => "4300",
                "hargaJual" => "6000",
            ],
            [
                "nama" => "Kratingdaeng",
                "hargaBeli" => "5000",
                "hargaJual" => "6000",
            ],
            [
                "nama" => "You C1000 140ml",
                "hargaBeli" => "0",
                "hargaJual" => "7000",
            ],
            [
                "nama" => "Teh Botol 350ml",
                "hargaBeli" => "3583",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "Larutan Cap Kaki Tiga Rasa leci",
                "hargaBeli" => "5416",
                "hargaJual" => "6000",
            ],
            [
                "nama" => "Larutan Cap Kaki Tiga Rasa Jambu Biji",
                "hargaBeli" => "0",
                "hargaJual" => "6000",
            ],
            [
                "nama" => "Sprite",
                "hargaBeli" => "4083",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Fruit Tea Apple 350ml",
                "hargaBeli" => "0",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "Fruit Tea Blackcurrant 350ml",
                "hargaBeli" => "3833",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "Good day Funtastic Mocaci",
                "hargaBeli" => "4875",
                "hargaJual" => "6000",
            ],
            [
                "nama" => "IsoPlus Coco (Kelapa)",
                "hargaBeli" => "0",
                "hargaJual" => "3000",
            ],
        ];

        $sabun = [
            [
                "nama" => "Pepsodent 120gr",
                "hargaBeli" => "0",
                "hargaJual" => "8000",
            ],
            [
                "nama" => "Pepsodent 100gr",
                "hargaBeli" => "0",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Asepso",
                "hargaBeli" => "0",
                "hargaJual" => "8000",
            ],
            [
                "nama" => "Lux",
                "hargaBeli" => "0",
                "hargaJual" => "4500",
            ],
            [
                "nama" => "Nuvo Biru",
                "hargaBeli" => "0",
                "hargaJual" => "3500",
            ],
            [
                "nama" => "Nuvo Merah",
                "hargaBeli" => "0",
                "hargaJual" => "3500",
            ],
            [
                "nama" => "Sabun Lifeboy Biru",
                "hargaBeli" => "0",
                "hargaJual" => "4500",
            ],
            [
                "nama" => "Sabun Lifeboy Merah",
                "hargaBeli" => "0",
                "hargaJual" => "4500",
            ],
            [
                "nama" => "Sabun Dettol",
                "hargaBeli" => "0",
                "hargaJual" => "6500",
            ],
        ];

        $sabunCuci = [
            [
                "nama" => "Mamalemon 85ml",
                "hargaBeli" => "0",
                "hargaJual" => "1000",
            ],
            [
                "nama" => "Sunlight 90ml",
                "hargaBeli" => "0",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Mamalemon 230ml",
                "hargaBeli" => "0",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "Sunlight 210ml",
                "hargaBeli" => "0",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Sunlight 370ml",
                "hargaBeli" => "0",
                "hargaJual" => "8500",
            ],
            [
                "nama" => "Sunlight 650ml",
                "hargaBeli" => "0",
                "hargaJual" => "14000",
            ],
            [
                "nama" => "Mamalemon 680ml",
                "hargaBeli" => "0",
                "hargaJual" => "14000",
            ],
            [
                "nama" => "Ekonomi 650ml",
                "hargaBeli" => "0",
                "hargaJual" => "12000",
            ],
            [
                "nama" => "Lifebouy 235ml",
                "hargaBeli" => "0",
                "hargaJual" => "4000",
            ],
            [
                "nama" => "Cleantexs Parfum Laundry",
                "hargaBeli" => "0",
                "hargaJual" => "28000",
            ],
            [
                "nama" => "Cleantexs Handwash",
                "hargaBeli" => "0",
                "hargaJual" => "14500",
            ],
            [
                "nama" => "Cleantexs Sabun Cuci Piring",
                "hargaBeli" => "0",
                "hargaJual" => "16000",
            ],
            [
                "nama" => "Cleantexs Detergen Cair",
                "hargaBeli" => "0",
                "hargaJual" => "16000",
            ],
            [
                "nama" => "Cleantexs Pembersih Lantai",
                "hargaBeli" => "0",
                "hargaJual" => "14500",
            ],
            [
                "nama" => "Cleantexs Softener",
                "hargaBeli" => "0",
                "hargaJual" => "16000",
            ],
            [
                "nama" => "Cleantexs Pembersih Lantai",
                "hargaBeli" => "0",
                "hargaJual" => "15000",
            ],
        ];

        $makananRingan = [
            [
                "nama" => "Chocolatos",
                "hargaBeli" => "437",
                "hargaJual" => "500",
            ],
            [
                "nama" => "Oreo Coklat",
                "hargaBeli" => "0",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Siip Coklat",
                "hargaBeli" => "0",
                "hargaJual" => "500",
            ],
            [
                "nama" => "Makaroni",
                "hargaBeli" => "395",
                "hargaJual" => "500",
            ],
            [
                "nama" => "Chiki Balls Keju",
                "hargaBeli" => "1800",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Oreo Vanilla",
                "hargaBeli" => "1791",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Superstar",
                "hargaBeli" => "523",
                "hargaJual" => "1000",
            ],
            [
                "nama" => "Sosis Sonice",
                "hargaBeli" => "500",
                "hargaJual" => "1000",
            ],
            [
                "nama" => "Tango Coklat",
                "hargaBeli" => "523",
                "hargaJual" => "1000",
            ],
            [
                "nama" => "Beng-Beng",
                "hargaBeli" => "0",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Nabati Keju",
                "hargaBeli" => "0",
                "hargaJual" => "1000",
            ],
            [
                "nama" => "Permen Lunak",
                "hargaBeli" => "0",
                "hargaJual" => "1000",
            ],
            [
                "nama" => "Top",
                "hargaBeli" => "0",
                "hargaJual" => "500",
            ],
            [
                "nama" => "Gery Snack",
                "hargaBeli" => "450",
                "hargaJual" => "500",
            ],
            [
                "nama" => "Permen Yupi",
                "hargaBeli" => "125",
                "hargaJual" => "250",
            ],
            [
                "nama" => "Permen Mentos",
                "hargaBeli" => "0",
                "hargaJual" => "250",
            ],
            [
                "nama" => "Permen Koin Coklat",
                "hargaBeli" => "0",
                "hargaJual" => "1000",
            ],
            [
                "nama" => "Miku Nangka",
                "hargaBeli" => "425",
                "hargaJual" => "500",
            ],
        ];

        $rokok = [
            [
                "nama" => "Djarum Super 12",
                "hargaBeli" => "23000",
                "hargaJual" => "24000",
            ],
            [
                "nama" => "Ziga 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
            [
                "nama" => "Chief K12",
                "hargaBeli" => "9000",
                "hargaJual" => "10000",
            ],
            [
                "nama" => "Raptor 12",
                "hargaBeli" => "13000",
                "hargaJual" => "14000",
            ],
            [
                "nama" => "LA Lights 16",
                "hargaBeli" => "29000",
                "hargaJual" => "30000",
            ],
            [
                "nama" => "LA Menthol 16",
                "hargaBeli" => "29000",
                "hargaJual" => "30000",
            ],
            [
                "nama" => "Chief Filter 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
            [
                "nama" => "Djarum 76 Kurma 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
            [
                "nama" => "Djarum 76 Madu Hitam 12",
                "hargaBeli" => "13000",
                "hargaJual" => "14000",
            ],
            [
                "nama" => "Djarum Black 16",
                "hargaBeli" => "28500",
                "hargaJual" => "29500",
            ],
            [
                "nama" => "Magnum Filter 12",
                "hargaBeli" => "22500",
                "hargaJual" => "23500",
            ],
            [
                "nama" => "Gajah Baru 12",
                "hargaBeli" => "14500",
                "hargaJual" => "15500",
            ],
            [
                "nama" => "Camel Ungu (Purple) 12",
                "hargaBeli" => "17000",
                "hargaJual" => "18000",
            ],
            [
                "nama" => "Camel Ungu (Purple) 20",
                "hargaBeli" => "26000",
                "hargaJual" => "27000",
            ],
            [
                "nama" => "Gudang Garam Merah 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
            [
                "nama" => "Gudang Garam Merah 16",
                "hargaBeli" => "17000",
                "hargaJual" => "18000",
            ],
            [
                "nama" => "Geo Mild 16",
                "hargaBeli" => "19500",
                "hargaJual" => "20500",
            ],
            [
                "nama" => "LA Ice PurpleBoost 16",
                "hargaBeli" => "29000",
                "hargaJual" => "30000",
            ],
            [
                "nama" => "LA Bold 20",
                "hargaBeli" => "29500",
                "hargaJual" => "30500",
            ],
            [
                "nama" => "Djarum 76 Kuning 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
            [
                "nama" => "Djarum 76 Kuning 16",
                "hargaBeli" => "19000",
                "hargaJual" => "20000",
            ],
            [
                "nama" => "Surya 12",
                "hargaBeli" => "23500",
                "hargaJual" => "24500",
            ],
            [
                "nama" => "Surya 16",
                "hargaBeli" => "30000",
                "hargaJual" => "31000",
            ],
            [
                "nama" => "Dji Sam Soe 234",
                "hargaBeli" => "18000",
                "hargaJual" => "19000",
            ],
            [
                "nama" => "Avolution Mild",
                "hargaBeli" => "34500",
                "hargaJual" => "35500",
            ],
            [
                "nama" => "Avolution Menthol",
                "hargaBeli" => "34500",
                "hargaJual" => "35500",
            ],
            [
                "nama" => "Sukun Filter Executive 12",
                "hargaBeli" => "16000",
                "hargaJual" => "17000",
            ],
            [
                "nama" => "Dunhill Putih Fine Cut Fitler",
                "hargaBeli" => "27000",
                "hargaJual" => "28000",
            ],
            [
                "nama" => "Dunhill Hitam",
                "hargaBeli" => "27000",
                "hargaJual" => "28000",
            ],
            [
                "nama" => "Sukun Hijau Special Baru 12",
                "hargaBeli" => "9000",
                "hargaJual" => "10000",
            ],
            [
                "nama" => "Marlboro Filter Black 12",
                "hargaBeli" => "19500",
                "hargaJual" => "20500",
            ],
            [
                "nama" => "Marlboro Filter Black 20",
                "hargaBeli" => "33000",
                "hargaJual" => "34000",
            ],
            [
                "nama" => "Sampoerna Mild Merah 16",
                "hargaBeli" => "29500",
                "hargaJual" => "30500",
            ],
            [
                "nama" => "Dji Sam Soe Refil 12",
                "hargaBeli" => "19000",
                "hargaJual" => "20000",
            ],
            [
                "nama" => "Grendel Biru 12",
                "hargaBeli" => "13500",
                "hargaJual" => "14500",
            ],
            [
                "nama" => "Djarum King Filter 12",
                "hargaBeli" => "19500",
                "hargaJual" => "20500",
            ],
            [
                "nama" => "Dunhill Fine Cut Mild 20",
                "hargaBeli" => "32000",
                "hargaJual" => "33000",
            ],
            [
                "nama" => "Diplomat Evo 16",
                "hargaBeli" => "21000",
                "hargaJual" => "22000",
            ],
            [
                "nama" => "Penamas kretek 12",
                "hargaBeli" => "7000",
                "hargaJual" => "8000",
            ],
            [
                "nama" => "Marlboro Kretek Biru 12",
                "hargaBeli" => "9500",
                "hargaJual" => "10500",
            ],
            [
                "nama" => "Diplomat Black 12",
                "hargaBeli" => "22500",
                "hargaJual" => "23500",
            ],
            [
                "nama" => "Diplomat Mild 16",
                "hargaBeli" => "20000",
                "hargaJual" => "21000",
            ],
            [
                "nama" => "Marlboro Ice Burst 20",
                "hargaBeli" => "36500",
                "hargaJual" => "37500",
            ],
            [
                "nama" => "Esse Berry Pop 16",
                "hargaBeli" => "27000",
                "hargaJual" => "28000",
            ],
            [
                "nama" => "Esse Change Double 20",
                "hargaBeli" => "36000",
                "hargaJual" => "37000",
            ],
            [
                "nama" => "Esse Change Grape 20",
                "hargaBeli" => "34000",
                "hargaJual" => "35000",
            ],
            [
                "nama" => "Esse Change Applemint Capsule 20",
                "hargaBeli" => "33000",
                "hargaJual" => "34000",
            ],
            [
                "nama" => "Marlboro Merah 20 (original)",
                "hargaBeli" => "36500",
                "hargaJual" => "37500",
            ],
            [
                "nama" => "Juara Teh Manis 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
            [
                "nama" => "Score Teh Manis 12",
                "hargaBeli" => "7000",
                "hargaJual" => "8000",
            ],
            [
                "nama" => "Gudang Garam International 12",
                "hargaBeli" => "23000",
                "hargaJual" => "24000",
            ],
            [
                "nama" => "Country 20",
                "hargaBeli" => "23500",
                "hargaJual" => "24500",
            ],
            [
                "nama" => "Penamas Abu-Abu",
                "hargaBeli" => "13500",
                "hargaJual" => "14500",
            ],
            [
                "nama" => "Langsep Segar Kretek 12",
                "hargaBeli" => "5500",
                "hargaJual" => "6500",
            ],
            [
                "nama" => "Andalan Filter 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
            [
                "nama" => "Sukun Merah Kretek 12",
                "hargaBeli" => "9000",
                "hargaJual" => "10000",
            ],
            [
                "nama" => "Armour Classic 12",
                "hargaBeli" => "13000",
                "hargaJual" => "14000",
            ],
            [
                "nama" => "Class Mild 16",
                "hargaBeli" => "21500",
                "hargaJual" => "22500",
            ],
            [
                "nama" => "Saroja 12",
                "hargaBeli" => "9000",
                "hargaJual" => "10000",
            ],
            [
                "nama" => "Gaze Kretek 12",
                "hargaBeli" => "8500",
                "hargaJual" => "9500",
            ],
            [
                "nama" => "Online Freshh Grape 16",
                "hargaBeli" => "19500",
                "hargaJual" => "20500",
            ],
            [
                "nama" => "Surya Pro Mild 16",
                "hargaBeli" => "29500",
                "hargaJual" => "30500",
            ],
            [
                "nama" => "Sampoerna Aga 12",
                "hargaBeli" => "14000",
                "hargaJual" => "15000",
            ],
        ];

        $esKrim = [
            [
                "nama" => "Miki miki Vanilla",
                "hargaBeli" => "1500",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Miki miki Double Choco",
                "hargaBeli" => "1500",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Nanas",
                "hargaBeli" => "1550",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Semangka",
                "hargaBeli" => "1550",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Jeruk",
                "hargaBeli" => "1560",
                "hargaJual" => "2000",
            ],
            [
                "nama" => "Fruizzy Grape",
                "hargaBeli" => "1600",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "2 Colours",
                "hargaBeli" => "2300",
                "hargaJual" => "2500",
            ],
            [
                "nama" => "Mochi Coklat",
                "hargaBeli" => "2312",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Mochi Vanilla",
                "hargaBeli" => "2312",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Strawberry Crispy",
                "hargaBeli" => "2750",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Coffee Crispy",
                "hargaBeli" => "2750",
                "hargaJual" => "3500",
            ],
            [
                "nama" => "Sundae Strawberry Cup",
                "hargaBeli" => "4041",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Sundae Coklat Cup",
                "hargaBeli" => "4041",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Choco Crispy",
                "hargaBeli" => "4000",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Taro Crispy",
                "hargaBeli" => "2412",
                "hargaJual" => "3000",
            ],
            [
                "nama" => "Choco Max Cone",
                "hargaBeli" => "4062",
                "hargaJual" => "5000",
            ],
            [
                "nama" => "Melon Stik",
                "hargaBeli" => "1913",
                "hargaJual" => "2500",
            ],
            [
                "nama" => "Bllueberry Yogurt Stick",
                "hargaBeli" => "1900",
                "hargaJual" => "6000",
            ],
        ];

        $user = [
            "name" => "Ayu",
            "email" => "admin@gmail.com",
            "password" => "percetakan",
            "role" => "0",
        ];

        User::create($user);

        // Kategori
        $kategori = ["Minuman", "Makanan Ringan", "Sabun Mandi", "Sabun Cuci", "Produk Rokok", "Es Krim", "Lain Lain"];

        foreach ($kategori as $x) {

            $temp = [
                "namaKategori" => $x
            ];

            kategori::create($temp);
        }

        foreach ($minuman as $x) {
            $profit = 0;
            if ($x["hargaBeli"] === "0") {
                $profit = 0;
            } else {
                $profit = $x["hargaJual"] - $x["hargaBeli"];
            }

            $temp = [
                "nama" => $x["nama"],
                "kategori_id" => 1,
                "hargaBeli" => $x["hargaBeli"],
                "hargaJual" => $x["hargaJual"],
                "profit" => $profit,
            ];
            barang::create($temp);
        }

        foreach ($makananRingan as $x) {
            $profit = 0;
            if ($x["hargaBeli"] === "0") {
                $profit = 0;
            } else {
                $profit = $x["hargaJual"] - $x["hargaBeli"];
            }

            $temp = [
                "nama" => $x["nama"],
                "kategori_id" => 2,
                "hargaBeli" => $x["hargaBeli"],
                "hargaJual" => $x["hargaJual"],
                "profit" => $profit,
            ];
            barang::create($temp);
        }

        foreach ($sabun as $x) {
            $profit = 0;
            if ($x["hargaBeli"] === "0") {
                $profit = 0;
            } else {
                $profit = $x["hargaJual"] - $x["hargaBeli"];
            }

            $temp = [
                "nama" => $x["nama"],
                "kategori_id" => 3,
                "hargaBeli" => $x["hargaBeli"],
                "hargaJual" => $x["hargaJual"],
                "profit" => $profit,
            ];
            barang::create($temp);
        }

        foreach ($sabunCuci as $x) {
            $profit = 0;
            if ($x["hargaBeli"] === "0") {
                $profit = 0;
            } else {
                $profit = $x["hargaJual"] - $x["hargaBeli"];
            }

            $temp = [
                "nama" => $x["nama"],
                "kategori_id" => 4,
                "hargaBeli" => $x["hargaBeli"],
                "hargaJual" => $x["hargaJual"],
                "profit" => $profit,
            ];
            barang::create($temp);
        }

        foreach ($rokok as $x) {
            $profit = 0;
            if ($x["hargaBeli"] === "0") {
                $profit = 0;
            } else {
                $profit = $x["hargaJual"] - $x["hargaBeli"];
            }

            $temp = [
                "nama" => $x["nama"],
                "kategori_id" => 5,
                "hargaBeli" => $x["hargaBeli"],
                "hargaJual" => $x["hargaJual"],
                "profit" => $profit,
            ];
            barang::create($temp);
        }

        foreach ($esKrim as $x) {
            $profit = 0;
            if ($x["hargaBeli"] === "0") {
                $profit = 0;
            } else {
                $profit = $x["hargaJual"] - $x["hargaBeli"];
            }

            $temp = [
                "nama" => $x["nama"],
                "kategori_id" => 6,
                "hargaBeli" => $x["hargaBeli"],
                "hargaJual" => $x["hargaJual"],
                "profit" => $profit,
            ];
            barang::create($temp);
        }
    }
}
