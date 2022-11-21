<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Produkjasa;
use App\Alamat;
use App\Harga;
use App\Bahanproduk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'username' => 'admin123',
            'nama_toko' => 'Toko Sinar',
            'password' => '$2y$10$XO1Kig8JP1cVt6AKq0I7z.h66Bo5Q5Ai4sSmJoXkkTYJ95/gAe/YK',
            'alamat' => 'Tegal',
            'latitude' => '-6.885885510272334',
            'longitude' => '109.1026634350419',
            'phone' => '09837894',
            'status' => 'admin',
            'deskripsi' => 'Menyediakan jasa pembuatan kanopi, pagar dan tralis',
            'gambar' => 'produkjasa/profil1.png',
        ]);

        User::create([
            'username' => 'Ardi Saputra',
            'verifikasi' => '1',
            'nama_toko' => 'Toko Jaya Besi',
            'password' => '$2y$10$bZI10pTjXdbJIBL6OD4yV.GLeUU4mklu6zvxKqHAUMnbyjByJEdJC',
            'alamat' => 'Rt 13 Rw 04',
            'kecamatan' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'phone' => '87881895490',
            'status' => 'jasa',
            'deskripsi' => 'terima jasa pembuatan kanopi, pagar, tangga, tralis dll
            boleh request model dan ukuran material yang di gunakan, harga menyesuaikan!
            harga masih bisa nego bila memesan lebih banyak!
            minimal order 3 meter',
            'gambar' => 'user/20220612144409.jpg',

        ]);

        User::create([
            'username' => 'Egi Firmansyah',
            'verifikasi' => '1',
            'nama_toko' => 'Toko Besi Barokah',
            'password' => '$2y$10$bZI10pTjXdbJIBL6OD4yV.GLeUU4mklu6zvxKqHAUMnbyjByJEdJC',
            'alamat' => 'Rt 15 Rw 08',
            'kecamatan' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Debong Kidul',
            'latitude' => '-6.895075',
            'longitude' => '109.124088',
            'phone' => '87786558805',
            'status' => 'jasa',
            'deskripsi' => 'Menyediakan berbagai jasa pembuatan seperti kanopi, pagar, tralis, tangga dengan harga murah dan produk berkualis',
            'gambar' => 'user/20220612151254.jpg',

        ]);

        // User::create([
        //     'username' => 'ilham muzani',
        //     'password' => '$2y$10$jbLBkmQj6R5nObLcmwCBGeIsE4sbjQry9VkftSVlG1MNMJIm97d5y',
        //     'alamat' => 'Tegal',
        //     'phone' => '09837894',
        //     'status' => 'pelanggan',
        //     'gambar' => 'profil.jpg',

        // ]);

        // User::create([
        //     'username' => 'admin123',
        //     'password' => '$2y$10$XO1Kig8JP1cVt6AKq0I7z.h66Bo5Q5Ai4sSmJoXkkTYJ95/gAe/YK',
        //     'alamat' => 'Tegal',
        //     'phone' => '09837894987',
        //     'status' => 'jasa',
        //     'gambar' => 'profil1.jpg',

        // ]);

        Alamat::create([
            'status' => 'Kecamatan Margadana',
            'kelurahan' => 'Kelurahan Cabawan',
            'latitude' => '-6.8759479',
            'longitude' => '109.0957017',

        ]);

        Alamat::create([
            'status' => 'Kecamatan Margadana',
            'kelurahan' => 'Kelurahan Kaligangsa',
            'latitude' => '-6.8774858',
            'longitude' => '109.0812027',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Margadana',
            'kelurahan' => 'Kelurahan Kaliyamat Kulon',
            'latitude' => '-6.88586479514',
            'longitude' => '109.10288868',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Margadana',
            'kelurahan' => 'Kelurahan Krandon',
            'latitude' => '-6.8750582',
            'longitude' => '109.0880219',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Margadana',
            'kelurahan' => 'Kelurahan Margadana',
            'latitude' => '-6.87451',
            'longitude' => '109.10787',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Margadana',
            'kelurahan' => 'Kelurahan Pesurungan Lor',
            'latitude' => '-6.8688146',
            'longitude' => '109.1132354',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Margadana',
            'kelurahan' => 'Kelurahan Sumurpanggang',
            'latitude' => '-6.8790272',
            'longitude' => '109.1042787',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Debong Lor',
            'latitude' => '-6.8766473',
            'longitude' => '109.1195315',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kraton',
            'latitude' => '-6.8638595',
            'longitude' => '109.1286937',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Muarareja',
            'latitude' => '-6.849269',
            'longitude' => '109.112864',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Pekauman',
            'latitude' => '-6.874108',
            'longitude' => '109.126676',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Pesurungan Kidul',
            'latitude' => '-6.871792',
            'longitude' => '109.115913',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Tegalsari',
            'latitude' => '-6.855196',
            'longitude' => '109.13152',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Bandung Kimpling',
            'latitude' => '-6.89223333',
            'longitude' => '109.12231',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Debong Kidul',
            'latitude' => '-6.895075',
            'longitude' => '109.124088',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Debong Tengah',
            'latitude' => '-6.891276',
            'longitude' => ' 109.124004',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Kalinyamat Wetan',
            'latitude' => '-6.893135',
            'longitude' => ' 109.109225',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Keturen',
            'latitude' => '-6.87834697417',
            'longitude' => '109.120892263',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Randugunting',
            'latitude' => '-6.880723',
            'longitude' => '109.131520',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Tunon',
            'latitude' => '-6.889585',
            'longitude' => '109.116398333',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Kejambon',
            'latitude' => '-6.88047',
            'longitude' => '109.13844',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Mangkukusuman',
            'latitude' => '-6.8629449',
            'longitude' => '109.1370461',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Mintaragen',
            'latitude' => '-6.853492',
            'longitude' => ' 109.141924',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'latitude' => '-6.858229',
            'longitude' => ' 109.150843',
        ]);

        Alamat::create([
            'status' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Slerok',
            'latitude' => '-6.8748295',
            'longitude' => '109.1455225',
        ]);

        //Categori produk dan jenis pembuatan

        Bahanproduk::create([
            'status' => 'Produk Jasa Dan Material',
            'jenis' => 'Pembuatan Pagar',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Jasa dan Material',
            'jenis' => 'Pembuatan Kanopi',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Jasa dan Material',
            'jenis' => 'Pembuatan Tangga',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Jasa dan Material',
            'jenis' => 'Pembuatan Tralis',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Jasa dan Material',
            'jenis' => 'Pembuatan Pagar',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Semen',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Besi Hollow',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Besi Beton',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Besi Beton',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Keramik',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Batako',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Asbes',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Seng',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Pasir',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Cet',
        ]);

        Bahanproduk::create([
            'status' => 'Produk Material',
            'jenis' => 'Material Paku',
        ]);


        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'model' => 'Kanopi Alderon',
            'ukuran' => '1 m',
            // 'ukuran' => '2 x 2 m',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'alamat' => 'Rt 13 Rw 04',
            'phone' => '+6287881895490',
            'harga' => '400000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/20220607182115.jpg',
            'deskripsi' => 'Menyediakan Pembuatan kanopi jenis alderon dengan keunggulan
            - Tahan lama Dan tidak mudah luntur
            - Menahan panas dan meredam suara
            - sangat kuat dan kokoh
            - tahan efek bahan kimia
            
            dengan bahan besi baja ketebalan 1,6 mm dan menggunakan atap alderon dengan ketebalan 1,2 mm + cat
            dengan harga 400.000/m
            2 x 2 = 4 m
            4 x 400.000 = 1600.000
            
            untuk pemesanan harga diatas 1 meter persegi
            dan harga menyesuaikan pemesanan.
            Tenaga pasang yang handal, terampil dan berpengalaman.',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'model' => 'Pagar Rumah Minimalis',
            'ukuran' => '1 m',
            // 'ukuran' => '4 m x 2 m',
            // 'berat' => '1 kilogram',
            'kecamatan' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'alamat' => 'Rt 13 Rw 04',
            'phone' => '+6287881895490',
            'harga' => '400000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220607191014.jpg',
            'deskripsi' => 'PERHATIKAN HARGA DI ATAS 
            UKURAN 3.20 X 1.50 
            BAHAN : HOLO 4 X 6 
            JARI JARI MOTIF 4 X 2 
            CAT ITAM 
            
            harga dari 400-700/m
            untuk harga diatas adalah
            4 x 2 = 8 m
            8 x 400 = 3200.000
            
            Bengkel Las Menerima Pesanan Perbaikan Pagar Pembuatan Baru Pagar rumah kantor Toko Sekolahan Dengan Harga Bersaing Murah rapih.',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'model' => 'Kanopi Baja Ringan',
            'ukuran' => '1 m',
            // 'ukuran' => '2 x 2 m',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'alamat' => 'Rt 13 Rw 04',
            'phone' => '+6287881895490',
            'harga' => '200000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/20220607190348.jpg',
            'deskripsi' => 'harga 200.000/m
            2 x 2 m = 4 m
            4 x 200.000 = 800.000
            
            bahan yang digunakan
            baja ringan 0.75 mm Full (grade A)
            atap spandek
            
            tukang berpengalaman
            harga bisa menyesuaikan dri bentuk bangunan, volume dan jenis atap.',
            'status' => 'jasa',
        ]);


        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'model' => 'Tangga Besi Hollow',
            'ukuran' => '1 m',
            // 'ukuran' => '4 meter',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'alamat' => 'Rt 13 Rw 04',
            'phone' => '+6287881895490',
            'harga' => '200000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220607185336.jpg',
            'deskripsi' => 'menggunakan bahan
            -hollow 4x8cm/1,6mm
            -hollow 4x4cm/1,4mm
            -hollow 2x4cm/1,4mm
            -plat bodres 1,4mm
            -lebar tangga 80cm
            harga terhitung permeter plus railing satu sisi, seperti model di atas

            harga sudah berikut pasang!
            harga bisa nego!
            
            Pastikan anda mendapatkan layanan terbaik dari ahlinya!
            Propesional & berpengalaman
            Rapih & detail
            Material berkualitas
            Harga kompetitif
            Tepat waktu
            Menjamin kepuasan konsumen.',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'model' => 'Taman Halaman Rumah',
            'ukuran' => '1 m',
            // 'ukuran' => '4 x 4 m',
            // 'berat' => '1000 gram',
            'kecamatan' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'alamat' => 'Rt 13 Rw 04',
            'phone' => '+6287881895490',
            'harga' => '275000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220608142100.jpg',
            'deskripsi' => 'Harga 275000 untuk meter persegi.
            Sudah include..
            untuk harga diatas
             4 meter x 275000 = 1.100.000
            
            -Rumput bebas pilihan.
            gajah mini.
            Jepang
            Swis
            Golf
            
            Tanaman perdu..di sesuaikan di lokasi
            Dengan pilihan..
            
            -rembosa mini
            -brokoli kuning dan hijau
            -song of india
            -anjuang merah dan hijau
            -rewelia tegak bunga ungu
            -airis bunga kuning
            -taiwan beauty
            -ararea
            -trikaler
            -sabang dara
            -heliconia
            -maranti bali
            -jenis puring
            -lamtana saudi
            -kucai gondrong
            -lili paris
            -jenis krokot
            -sutra bombay bunga
            -drasena kuning dan hijau
            
            -batu pijakan/steping
            
            -pupuk media organik
            
            -tanah merah untuk buat countur(landscape)
            
            -harga sudah terima rapih.
            
            Jika ingin menambah ,batu2 taman/batu ampar dan tanaman besar/tanaman bonsai..di hitung dengan harga satuan...
            
            Di jaminnn pasti harga tidak akan mengecewakan hasil.',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'model' => 'Pintu pagar tempa/klasik',
            'ukuran' => '1 m',
            // 'ukuran' => '2 x 1 m',
            // 'berat' => '30 kilogram',
            'kecamatan' => 'Kecamatan Tegal Barat',
            'kelurahan' => 'Kelurahan Kemandungan',
            'alamat' => 'Rt 13 Rw 04',
            'phone' => '+6287881895490',
            'harga' => '600000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220607192651.jpg',
            'deskripsi' => 'pintu pagar tempa. Dengan bahan holo galvanis. atur /motip Dengan behel nako 16 ml. harga d mulai 600.000 per m2. untuk harga tergantung spek bahan yg d pake.',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'model' => 'Kanopi Atap Spandek Asbes',
            'ukuran' => '1 m',
            // 'ukuran' => '4 x 4 m',
            // 'berat' => '1 kg',
            'kecamatan' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '087786558805',
            'harga' => '230000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220608082808.jpg',
            'deskripsi' => 'Bajaringan tebal 0,75mm
            -Reng tebal 0,4mm
            -Atap bisa pilih antara spandek, asbes. Deskripsi jasa pembuatan kanopi / canopy baja ringan spandek / asbes
            Jasa pembuatan atau pemasangan kanopi baja ringan untuk rumah, ruko, kantor, lahan parkir, teras rumah, dll.
            
            dengan haga permeter 230.000
            harga menyesuaikan pemesanan
            
            Dikerjakan dengan tenaga ahli dan profesional dalam bidangnya.
            Kami berikan garansi 6 bulan dari setiap orderan kami dengan syarat dan ketentuan yang berlaku.',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'model' => 'Realing tangga besi hollow',
            'ukuran' => '1 m',
            // 'ukuran' => '4 meter',
            // 'berat' => '1 kg',
            'kecamatan' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '087786558805',
            'harga' => '475000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220607191738.jpg',
            'deskripsi' => 'bahan yang digunakan besi hollow 
            dan cat hitam.
            
            Terima jasa pembuatan reling tangga
            harga /hitungan permeter seharga 475,000 dengan material besi hollow 40x40x1,4mm kombinasi 20x40x1,4mm 
            boleh request model dan ukuran material yang di gunakan, harga menyesuaikan!
            harga masih bisa nego bila memesan lebih banyak!
            minimal order 3meter',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'model' => 'Pagar new minimalis',
            'ukuran' => '1 m',
            // 'ukuran' => '3 meter',
            // 'berat' => '1 kg',
            'kecamatan' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '087786558805',
            'harga' => '600000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220612144801.jpg',
            'deskripsi' => 'desain baru dengan model classic conwood dan masih dengan hollo galvanis (anti karat) menjadikan produk dengan kwalitas terbaik di kelasnya  dengan harga permeternya 600.000',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'model' => 'Tralis minimalis',
            'ukuran' => '1 m',
            // 'ukuran' => '1.5 x 1/2 m',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '087786558805',
            'harga' => '400000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220612145339.jpg',
            'deskripsi' => 'Menggunakan bahan besi nako.
            terima order Pembuatan tralis lainya seperti
            jendela minimalis
            motif Bebas Pilihan**
            minimal order 2 sett
            barang sdh Cat Rapih tinggal Pasang
            
            tralis minimalis bahan pakai besi nako 12 model bebas 
            kami mengerjakan juga
            kanopi
            pintu pagar
            balkon
            rellingtangga
            anti maling
            stainless
            dll',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'model' => 'Tralis minimalis kotak tengah',
            'ukuran' => '1 m',
            // 'ukuran' => '1.5 x 1/2 m',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '087786558805',
            'harga' => '300000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220612145754.jpg',
            'deskripsi' => 'Menggunakan bahan besi nako.
            Terima order Pembuatan tralis
            jendela minimalis
            motif Bebas Pilihan**
            minimal order 2 sett
            barang sdh Cat Rapih tinggal Pasang
            
            tralis minimalis bahan pakai besi nako 12 model bebas 
            kami mengerjakan juga
            kanopi
            pintu pagar
            balkon
            rellingtangga
            anti maling
            stainless
            dll',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'model' => 'Tralis motif daun',
            'ukuran' => '1 m',
            // 'ukuran' => '1.5 x 1/2 m',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '087786558805',
            'harga' => '600000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220612150145.jpg',
            'deskripsi' => 'menggunakan bahan besi nako.
            Terima order Pembuatan tralis
            jendela minimalis
            motif Bebas Pilihan**
            minimal order 2 sett
            barang sdh Cat Rapih tinggal Pasang
            
            tralis minimalis bahan pakai besi nako 12 model bebas 
            kami mengerjakan juga
            kanopi
            pintu pagar
            balkon
            rellingtangga
            anti maling
            stainless
            dll',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '2',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'model' => 'Tangga rebah besi tebal',
            'ukuran' => '1 m',
            // 'ukuran' => '9 meter',
            // 'berat' => '20 kg',
            'kecamatan' => 'Kecamatan Tegal Timur',
            'kelurahan' => 'Kelurahan Panggung',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '087786558805',
            'harga' => '475000',
            'latitude' => '-6.87059947166',
            'longitude' => '109.123741265',
            'gambar' => 'produkjasa/220612150516.jpg',
            'deskripsi' => 'Menggunakan besi tebal berkualitas. Tangga rebah dengan bahan berkwalitas,tebal dan yg jelas kuat untuk beban cocok untuk cafee,rumah tinggal,kontrakan,kos kosan atau sejenisnya',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '3',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'model' => 'Kanopi Baja Ringan',
            'ukuran' => '1 m',
            // 'ukuran' => '3 x 4 m',
            // 'berat' => '1 kg',
            'kecamatan' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Debong Kidul',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '+628786558805',
            'harga' => '230000',
            'latitude' => '-6.895075',
            'longitude' => '109.124088',
            'gambar' => 'produkjasa/220612152532.jpg',
            'deskripsi' => 'KANOPI RANGKA BAJA RINGAN dan atapnya menggunakan :

            * spandek Rp 205rb/m2
            * spandek pasir Rp 290rb/m2
            * spandek benig Rp 325rb/m2
            * solarflat 1,2mm Rp 480rb/m2
            * solarflat 3mm Rp 900rb/m2
            * atap polycarbonate Rp 300rb/m2
            * atap alderon single layer Rp 325rb/m2
            * atap alderon double layer Rp 440rb/m2
            
            KANOPI RANGKA BESI HOLLOW GALVANIS 4x6 ,dan atapnya menggunakan :
            * spandek Rp 380rb/m2
            * alderon double layer : Rp 540rb/m2
            * alderon single layer : Rp 440rb/m2
            * polycarbonate Rp 400rb/m2
            * spandek bening Rp 460rb/m2
            * solarflat 1,2mm Rp 580rb/m2
            * solarflat 3mm Rp 975rb/m2
            Harga 300.000/m
            2 x 2 m = 4 m
            4 x 300.000 = 1200.000
                        
            tukang berpengalamn
            harga bisa menyesuaikan dri bentuk bangunan, volume dan jenis atap.',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '3',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'model' => 'Kanopi Alderon',
            'ukuran' => '1 m',
            // 'ukuran' => '3 x 4 m',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Debong Kidul',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '+628786558805',
            'harga' => '230000',
            'latitude' => '-6.895075',
            'longitude' => '109.124088',
            'gambar' => 'produkjasa/220612152532.jpg',
            'deskripsi' => '
            -Baja ringan 0.75mm terpasang.
            - reng 0.40mm terpasang.
            - atap alderon RS ket 1.2mm terpasang.
            
            Harga permeter 250.000
            - Garansi kebocoran selama 3 bln.
            - ukuran di bawah 20 meter kita hitung borongan/sesuai kesepakatan
            - harga belum termasuk biaya pengecatan rangka
            -- spek pemasangan harga diatas untuk modell minimalist. - untuk Tiang V tidak include harga per m². dikenakan biaya tambahan untuk tiang V',
            'status' => 'jasa',
        ]);

        Produkjasa::create([
            'kd_user' => '3',
            'category' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'model' => 'Kanopi Spandek',
            'ukuran' => '1 m',
            // 'ukuran' => '4 x 4 m',
            // 'berat' => '10 kg',
            'kecamatan' => 'Kecamatan Tegal Selatan',
            'kelurahan' => 'Kelurahan Debong Kidul',
            'alamat' => 'Rt 05 Rw 07',
            'phone' => '+628786558805',
            'harga' => '230000',
            'latitude' => '-6.895075',
            'longitude' => '109.124088',
            'gambar' => 'produkjasa/220612154132.jpg',
            'deskripsi' => 'Rangka baja ringan
            subagustruss: Daftar harga=
            
            ATAP SPANDEK= 260/m(standar)
            290/m(elegan)
            320/m(super elegan)
            (Minimal order15m2)
            Atap polycarbonate.
            370/m(standar)
            400/m(super elegan).
            Atap solartuff
            440/m(super elegan)
            Atap alderon
            470/m(super elegan)
            Alderon rs (1lapis)
            Harga 360rb/m²
            
            *Minimal order 15m2
            Tatabaja
            Keterangan : *Ekonomis*= tiang,bentangan dan reng full single 
            *Standar* =tiang dan bentangan double,rangka dan reng single
            *Elegan*= semua fulldouble 
            *Super elegan*= semua fulldouble dan sudah dicat',
            'status' => 'jasa',
        ]);
        
                //harga laynan kanopi 1 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '300000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '325000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '350000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '375000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '400000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '425000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '450000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '475000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '500000',
        ]);

        // harga layanan kanopi 2 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '600000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '625000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '650000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '675000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '700000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '725000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '750000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '775000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '825000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '2 m',
            'harga' => '1000000',
        ]);

        // harga layanan kanopi 3 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '1000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '1025000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '1050000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '1075000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '3 m',
            'harga' => '1100000',
        ]);

        // layanan kanopi 4 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1200000',
        ]);
        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1225000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1250000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1275000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1300000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1325000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1350000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1375000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '4 m',
            'harga' => '1400000',
        ]);
        

    // harga layanan kanopi 5 m 

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1500000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1525000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1550000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1575000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1600000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1625000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1650000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1675000',
    ]);

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '5 m',
        'harga' => '1700000',
    ]);

    // harga layanan kanopi 6 

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '6 m',
        'harga' => '1800000',
    ]);

      // harga layanan kanopi 7 

      Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '7 m',
        'harga' => '2100000',
    ]);

    // harga layanan kanopi 8 

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '8 m',
        'harga' => '2400000',
    ]);

    // harga layanan kanopi 7 

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '9 m',
        'harga' => '2700000',
    ]);

    // harga layanan kanopi 7 

    Harga::create([
        'status' => 'Produk Jasa dan Material',
        'jenis_pembuatan' => 'Pembuatan Kanopi',
        'ukuran' => '10 m',
        'harga' => '3000000',
    ]);

        //Produk jasa kanopi

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '200000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '225000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '250000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '275000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '300000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '325000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Kanopi',
            'ukuran' => '1 m',
            'harga' => '350000',
        ]);

        // // jasa kanopi 2 m

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '300000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '325000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '350000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '375000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '400000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '425000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '450000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '475000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '2 m',
        //     'harga' => '500000',
        // ]);

        // // harga jasa kanopi 3 m

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '450000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '425000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '475000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '500000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '525000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '550000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '575000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '3 m',
        //     'harga' => '600000',
        // ]);
        
        // // harga jasa kanopi 4 m

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '600000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '625000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '650000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '675000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '700000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '750000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '775000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '800000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '825000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '4 m',
        //     'harga' => '850000',
        // ]);

        // harga jasa kanopi 5 m

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '750000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '775000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '800000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '825000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '850000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '875000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '900000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '925000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Kanopi',
        //     'ukuran' => '5 m',
        //     'harga' => '950000',
        // ]);

        // layanan pembuatan pagar

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '350000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '375000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '400000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '425000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '450000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '475000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '500000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '425000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '450000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '475000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '500000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '525000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '550000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '575000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '600000',
        ]);

        //layanan pagar 2 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '700000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '725000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '750000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '775000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '800000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '825000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '975000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '2 m',
            'harga' => '1000000',
        ]);

        //layanan pagar 3 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1025000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1050000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1200000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1225000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1275000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1325000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1350000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1375000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1400000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1425000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1450000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1475000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '3 m',
            'harga' => '1500000',
        ]);

        // layanan pagar 4 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1400000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1425000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1450000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1475000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1500000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1525000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1550000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1575000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1600000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1650000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1675000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1700000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1725000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1650000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1675000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '4 m',
            'harga' => '1700000',
        ]);
         
        // layanan pagar 5 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1750000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1775000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1800000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1825000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '1975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '5 m',
            'harga' => '2000000',
        ]);

        // layanan pagar 6 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '6 m',
            'harga' => '2000000',
        ]);

         // layanan pagar 7 m

         Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '7 m',
            'harga' => '2350000',
        ]);

          // layanan pagar 8 m

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '8 m',
            'harga' => '2700000',
        ]);

          // layanan pagar 9 m

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '9 m',
            'harga' => '3000000',
        ]);

         // layanan pagar 10 m

         Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '10 m',
            'harga' => '3500000',
        ]);

        // harga jasa pagar 1 m

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Pagar',
            'ukuran' => '1 m',
            'harga' => '200000',
        ]);

        // harga layanan tralis

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '250000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '275000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '300000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '325000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '3500000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '375000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '400000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '425000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '450000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '475000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '500000',
        ]);

        // harga layanan tralis 2 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '500000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '525000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '550000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '575000',
        ]);
        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '600000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '625000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '650000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '675000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '700000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '2 m',
            'harga' => '725000',
        ]);

           // layanan tralis 3 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '750000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '775000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '800000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '825000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '3 m',
            'harga' => '975000',
        ]);

         // layanan tralis 4 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1000000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1025000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1050000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1075000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1100000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1125000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1150000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1175000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '4 m',
            'harga' => '1200000',
        ]);

          // layanan tralis 5 m 
        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1225000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1275000',
        ]);

        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1300000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1325000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1350000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1375000',
        ]);


        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1400000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1425000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1450000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '5 m',
            'harga' => '1475000',
        ]);

        // layanan tralis 6 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '6 m',
            'harga' => '1500000',
        ]);

        // layanan tralis 7 m

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '7 m',
            'harga' => '1750000',
        ]);

          // layanan tralis 8 m

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '8 m',
            'harga' => '2000000',
        ]);


         // layanan tralis 9 m

         Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '9 m',
            'harga' => '2250000',
        ]);


         // layanan tralis 10 m

         Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '10 m',
            'harga' => '2500000',
        ]);

        // harga jasa tralis 

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '125000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tralis',
            'ukuran' => '1 m',
            'harga' => '200000',
        ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Tralis',
        //     'ukuran' => '1 m',
        //     'harga' => '225000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Tralis',
        //     'ukuran' => '1 m',
        //     'harga' => '250000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Tralis',
        //     'ukuran' => '1 m',
        //     'harga' => '275000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Tralis',
        //     'ukuran' => '1 m',
        //     'harga' => '300000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Tralis',
        //     'ukuran' => '1 m',
        //     'harga' => '325000',
        // ]);

        // Harga::create([
        //     'status' => 'Produk Jasa',
        //     'jenis_pembuatan' => 'Pembuatan Tralis',
        //     'ukuran' => '1 m',
        //     'harga' => '350000',
        // ]);

        // layanan pembuatan tangga 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1025000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1050000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1075000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1100000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1125000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '117500',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '1200000',
        ]);

        // harga layanan tangga 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '1900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '1925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '1950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '1975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2025000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2050000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2075000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2100000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2125000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '2 m',
            'harga' => '2200000',
        ]);

        // harga layanan tangga 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '2850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '2875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '2900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '2925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '2950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '2975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3100000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3125000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3200000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3225000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '3 m',
            'harga' => '3250000',
        ]);

        // layanan tangga 4 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3800000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3825000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '3975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '4000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '4025000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '4050000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '4075000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '4 m',
            'harga' => '4000000',
        ]);

        // layanan tangga 5 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4750000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4800000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4825000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '4975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '5000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '5025000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '5050000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '5075000',
        ]);
        
        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '5 m',
            'harga' => '5100000',
        ]);

        // layanan tangga 6 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '6 m',
            'harga' => '5700000',
        ]);

         // layanan tangga 7 m 

         Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '7 m',
            'harga' => '6650000',
        ]);

          // layanan tangga 8 m 

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '8 m',
            'harga' => '7600000',
        ]);

        // layanan tangga 9 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '9 m',
            'harga' => '8550000',
        ]);

         // layanan tangga 10 m 

         Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '10 m',
            'harga' => '9500000',
        ]);

        // harga jasa tangga 1 m 

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '200000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '225000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '250000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '275000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '300000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '325000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Tangga',
            'ukuran' => '1 m',
            'harga' => '350000',
        ]);

        // layanan pembuatan halaman 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '200000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '225000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '250000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '275000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '300000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '325000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '350000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '375000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '400000',
        ]);

        // layanan pembuatan halaman 2 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '400000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '425000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '450000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '475000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '500000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '525000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '550000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '575000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '2 m',
            'harga' => '600000',
        ]);

        // layanan pembuatan halaman 3 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '600000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '625000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '650000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '675000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '700000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '725000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '750000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '775000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '3 m',
            'harga' => '800000',
        ]);

        // layanan halaman 4 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '800000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '825000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '850000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '875000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '900000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '925000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '950000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '975000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '4 m',
            'harga' => '1000000',
        ]);

        // layanan pembuatan tangga 5 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1000000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1025000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1050000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1075000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1100000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1125000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '5 m',
            'harga' => '1200000',
        ]);

        // layanan pembuatan tangga 6 m 

        Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '6 m',
            'harga' => '1200000',
        ]);

          // layanan pembuatan tangga 7 m 

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '7 m',
            'harga' => '1400000',
        ]);

          // layanan pembuatan tangga 8 m 

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '8 m',
            'harga' => '1600000',
        ]);

          // layanan pembuatan tangga 9 m 

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '9 m',
            'harga' => '1800000',
        ]);

          // layanan pembuatan tangga 10 m 

          Harga::create([
            'status' => 'Produk Jasa dan Material',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '6 m',
            'harga' => '2000000',
        ]);

        // layanan harga jasa tangga 
        
        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '100000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '125000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '150000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '175000',
        ]);

        Harga::create([
            'status' => 'Produk Jasa',
            'jenis_pembuatan' => 'Pembuatan Halaman',
            'ukuran' => '1 m',
            'harga' => '200000',
        ]);

    }
}
