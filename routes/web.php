<?php

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tampil1', function () {
    $mahasiswas = Mahasiswa::all();
    foreach ($mahasiswas as $mahasiswa) {
        echo "$mahasiswa->id | ";
        echo "$mahasiswa->nim | ";
        echo "$mahasiswa->nama | ";
        echo "$mahasiswa->tanggal_lahir | ";
        echo "$mahasiswa->ipk <hr>";
    }
});

Route::get('/tampil2', function () {
    $mahasiswas = Mahasiswa::all();
    foreach ($mahasiswas as $mahasiswa) {
        echo "$mahasiswa->id | ";
        echo "$mahasiswa->nim | ";
        echo strtolower($mahasiswa->nama) . " | ";
        echo "$mahasiswa->tanggal_lahir | ";
        echo "$mahasiswa->ipk <hr>";
    }
});

Route::get('/tampil3', function () {
    $mahasiswas = Mahasiswa::all();
    foreach ($mahasiswas as $mahasiswa) {
        echo "$mahasiswa->id | ";
        echo "$mahasiswa->nim | ";
        echo "$mahasiswa->nama | ";
        echo "$mahasiswa->tanggal_lahir | ";
        echo "$mahasiswa->ipk | ";
        echo "$mahasiswa->nama_besar <hr>";
    }
});

Route::get('/tambah', function () {
    Mahasiswa::create(
        [
            'nim' => '19005011',
            'nama' => 'Riana Putria',
            'tanggal_lahir' => '2000-11-23',
            'ipk' => 2.9,
        ]
    );
    return "Berhasil di proses";
});

Route::get('/tambah-user2', function () {
    User::create(
        [
            'name' => 'Alex',
            'email' => 'alex@gmail.com',
            'password' => 'qwerty',
        ]
    );
    return "Berhasil di proses";
});

Route::get('/tampil-user', function () {
    $users = User::all();
    foreach ($users as $user) {
        echo "$user->id | ";
        echo "$user->name | ";
        echo "$user->email | ";
        echo "$user->password <hr>";
    }
});
