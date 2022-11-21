<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('loginadmin', 'Api\UserController@loginadmin');
Route::post('registeradmin', 'Api\UserController@registeradmin');

Route::post('login_pelanggan','Api\UserController@login_pelanggan');
Route::post('register_pelanggan', 'Api\UserController@register_pelanggan');

Route::put('userUpdatePassword/{id}','Api\UserController@userUpdatePassword');
Route::put('userUpdatePhone/{id}','Api\UserController@userUpdatePhone');

Route::post('lupapassword_pelanggan','Api\UserController@lupapassword_pelanggan');
Route::put('passwordbaru_pelanggan/{id}', 'Api\UserController@passwordbaru_pelanggan');

Route::post('lupapassword_jasa','Api\UserController@lupapassword_jasa');

Route::post('login_jasa','Api\UserController@login_jasa');
Route::post('register_jasa', 'Api\UserController@register_jasa');

Route::apiResource('user','Api\UserController');
Route::get('userDetail/{id}', 'Api\UserController@userDetail');
Route::get('ProfilDetail/{id}', 'Api\UserController@ProfilDetail');
Route::put('updateprofiljasa/{id}', 'Api\UserController@updateprofiljasa');

Route::apiResource('produkjasa','Api\ProdukjasaController');
Route::get('produkjasa', 'Api\ProdukjasaController@tampilprodukjasa');
Route::post('produkjasa', 'Api\ProdukjasaController@store');
Route::get('produk_detail/{id}', 'Api\ProdukjasaController@produk_detail');
Route::get('produkjasa_detail/{id}', 'Api\ProdukjasaController@produkjasa_detail');
Route::put('updatejasasaja/{id}', 'Api\ProdukjasaController@updatejasasaja');
Route::post('tambahjasasaja', 'Api\ProdukjasaController@tambahjasasaja');
Route::get('search_produkjasa','Api\ProdukjasaController@search');
Route::get('myproduct/{id}', 'Api\ProdukjasaController@myproduct');
Route::get('tampilprodukpertoko/{id}', 'Api\ProdukjasaController@tampilprodukpertoko');
Route::post('tampilprodukperjenispembuatan/{id}', 'Api\ProdukjasaController@tampilprodukperjenispembuatan');
Route::get('tampilprodukuser', 'Api\ProdukjasaController@tampilprodukuser');
Route::get('searchjenispembuatan','Api\ProdukjasaController@searchjenispembuatan');
Route::get('searchkecamatan','Api\ProdukjasaController@searchkecamatan');

Route::get('searchukuranjasadanmaterialkanopi','Api\ProdukjasaController@searchukuranjasadanmaterialkanopi');
Route::get('searchukuranjasadanmaterialpagar','Api\ProdukjasaController@searchukuranjasadanmaterialpagar');
Route::get('searchukuranjasadanmaterialtangga','Api\ProdukjasaController@searchukuranjasadanmaterialtangga');
Route::get('searchukuranjasadanmaterialtralis','Api\ProdukjasaController@searchukuranjasadanmaterialtralis');
Route::get('searchukuranjasadanmaterialhalaman','Api\ProdukjasaController@searchukuranjasadanmaterialhalaman');

Route::get('searchukuranjasasaja','Api\ProdukjasaController@searchukuranjasasaja');
Route::get('searchhargaprodukjasasaja','Api\ProdukjasaController@searchhargaprodukjasasaja');

Route::get('searchhargaprodukjasadanmaterial','Api\ProdukjasaController@searchhargaprodukjasadanmaterial');
Route::get('searchhargaprodukjasadanmaterialpagar','Api\ProdukjasaController@searchhargaprodukjasadanmaterialpagar');
Route::get('searchhargaprodukjasadanmaterialtangga','Api\ProdukjasaController@searchhargaprodukjasadanmaterialtangga');
Route::get('searchhargaprodukjasadanmaterialtralis','Api\ProdukjasaController@searchhargaprodukjasadanmaterialtralis');
Route::get('searchhargaprodukjasadanmaterialhalaman','Api\ProdukjasaController@searchhargaprodukjasadanmaterialhalaman');



Route::apiResource('aduanjasa','Api\AduanjasaController');
Route::get('aduanjasa', 'Api\AduanjasaController@index');
Route::post('aduanjasa', 'Api\AduanjasaController@store');
// Route::get('search_produkjasa','Api\ProdukjasaController@search');
// Route::post('myproduct', 'Api\ProdukjasaController@myproduct');

//notifikasi pengajuan user
Route::apiResource('pengajuan','Api\PengajuanController');
Route::post('Pengajuanjasadanmaterial','Api\PengajuanController@Pengajuanjasadanmaterial');
Route::get('pengajuan', 'Api\PengajuanController@index');
Route::get('PengajuanDetail/{id}', 'Api\PengajuanController@PengajuanDetail');
Route::post('pengajuan', 'Api\PengajuanController@store');
Route::get('pengajuanterima/{id}', 'Api\PengajuanController@pengajuanterima');
Route::get('pengajuantolak/{id}', 'Api\PengajuanController@pengajuantolak');
Route::post('mypengajuan', 'Api\PengajuanController@mypengajuan');
Route::get('pengajuan', 'Api\PengajuanController@pengajuan');
Route::post('mynotifpelanggan', 'Api\PengajuanController@mynotifpelanggan');
Route::get('userVerify/{id}', 'Api\UserController@userVerify');


// Tampil notifikasi Pengajuan user bagian produk
Route::get('pengajuanusermenunggu/{id}', 'Api\PengajuanController@pengajuanUserMenunggu');
Route::get('pengajuanuserdikonfirmasi/{id}', 'Api\PengajuanController@pengajuanUserDikonfirmasi');
Route::get('pengajuanuserbertemu/{id}', 'Api\PengajuanController@pengajuanUserBertemu');
Route::get('pengajuanuserditerima/{id}', 'Api\PengajuanController@pengajuanUserDiterima');
Route::get('pengajuanuserDP/{id}', 'Api\PengajuanController@pengajuanUserDP');
Route::get('pengajuanuserdiproses/{id}', 'Api\PengajuanController@pengajuanUserDiproses');
Route::get('pengajuanuserpelunasan/{id}', 'Api\PengajuanController@pengajuanUserPelunasan');
Route::get('pengajuanuserselesai/{id}', 'Api\PengajuanController@pengajuanUserSelesai');
Route::get('pengajuanuserhistory/{id}', 'Api\PengajuanController@pengajuanUserHistory');
Route::get('pengajuanuserDP/{id}', 'Api\PengajuanController@pengajuanUserDP');
Route::put('pengajuanselesaikehistori/{id}', 'Api\PengajuanController@pengajuanSelesaikeHistori');


//notifikasi pengajuan jasa
Route::put('pengajuanjasadpkeproses/{id}', 'Api\PengajuanController@pengajuanJasaDiproses');
Route::put('pengajuanjasadpkeprosesbayarcash/{id}', 'Api\PengajuanController@pengajuanJasaDiprosesbayarcash');
Route::put('pengajuanjasaproseskepelunasan/{id}', 'Api\PengajuanController@pengajuanJasaProsesPelunasan');
Route::put('pengajuanjasaproseskepelunasanbayarcash/{id}', 'Api\PengajuanController@pengajuanJasaProsesPelunasanbayarcash');
Route::put('pengajuanjasapelunasanselesai/{id}', 'Api\PengajuanController@pengajuanJasaPelunasanSelesai');

// Tampil notifikasi Pengajuan jasa bagian produk
Route::get('pengajuanjasamenunggu/{id}', 'Api\PengajuanController@pengajuanJasaMenunggu');
Route::get('pengajuanjasadikonfirmasi/{id}', 'Api\PengajuanController@pengajuanJasaDikonfirmasi');
Route::get('pengajuanjasasudahbertemu/{id}', 'Api\PengajuanController@pengajuanJasaBertemu');
Route::get('pengajuanjasaditerima/{id}', 'Api\PengajuanController@pengajuanJasaDiterima');
Route::get('pengajuanjasaDP/{id}', 'Api\PengajuanController@pengajuanJasaDP');
Route::get('pengajuanjasatampildiproses/{id}', 'Api\PengajuanController@pengajuanJasaTampilDiproses');
Route::get('pengajuanjasatampilpelunasan/{id}', 'Api\PengajuanController@pengajuanJasaTampilPelunasan');
Route::get('pengajuanjasatampilselesai/{id}', 'Api\PengajuanController@pengajuanJasaTampilSelesai');
Route::get('pengajuanjasatampilhistory/{id}', 'Api\PengajuanController@pengajuanJasaTampilHistory');


// Detail Pengajuan
Route::get('detailpengajuan/{id}', 'Api\PengajuanController@detailPengajuan');
Route::put('cektempatpembuatan/{id}', 'Api\PengajuanController@cektempatpembuatan');
Route::put('hargaPengajuan/{id}', 'Api\PengajuanController@hargaPengajuan');
Route::put('buktiPengajuan/{id}', 'Api\PengajuanController@buktiPengajuan');
Route::put('tolakkesepakatan/{id}', 'Api\PengajuanController@tolakkesepakatan');
Route::put('buktiCast/{id}', 'Api\PengajuanController@buktiCast');
Route::put('buktiPelunasan/{id}', 'Api\PengajuanController@buktiPelunasan');
Route::put('pengajuanbayarditempat/{id}', 'Api\PengajuanController@pengajuanPelunasanbayarditempat');
Route::put('pengajuanusersudahbertemu/{id}', 'Api\PengajuanController@pengajuanUserSudahbertemu');
Route::put('pengajuanuserselesaicash/{id}', 'Api\PengajuanController@pengajuanUserselesaicash');


// Saran
Route::apiResource('saran','Api\SaranController');
Route::get('saran', 'Api\SaranController@index');
Route::post('saran', 'Api\SaranController@store');
// Route::post('beriSaran', 'Api\SaranController@beriSaran');
Route::post('mysaran', 'Api\SaranController@mysaran');
Route::get('saranperproduk/{id}', 'Api\SaranController@saranperproduk');
Route::get('semuasaranperproduk/{id}', 'Api\SaranController@semuasaranperproduk');

Route::apiResource('tambahrek','Api\TambahrekController');
Route::get('tambahrek', 'Api\TambahrekController@index');
Route::post('tambahrek', 'Api\TambahrekController@store');
Route::get('search_tambahrek','Api\TambahrekController@search');
Route::post('myproducttambahrek', 'Api\TambahrekController@myproducttambahrek');
Route::get('productrekening/{id}', 'Api\TambahrekController@productrekening');


//Notifikasi
Route::post('push', 'Api\PengajuanController@pushNotif');
Route::post('push', 'Api\SaranController@pushNotif');

//Laporkan
Route::post('laporkan', 'Api\laporkanController@store');

//alamat 
Route::get('searchalamatkecamatan','Api\AlamatController@searchalamatkecamatan');

//bahanproduk
Route::get('searchbahanproduk','Api\BahanprodukController@searchbahanproduk');

//rating bar
Route::get('commentRating/{id}','Api\ProdukjasaController@commentRating');
//verifikasi email
Route::get('verify/{id}','Api\VerificationController@verify')->name('verification.verify');




