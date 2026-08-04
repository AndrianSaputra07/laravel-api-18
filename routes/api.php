<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) 
//     {
//         return $request->user();
//     }
// );

// Route::get('product', [ProductController::class, 'index'])->name('product');

Route::apiResource('product', ProductController::class);

// class Mahasiswa{
//     public $nama;
//     public $age;
//     public $jurusan;
//     public function sapa(){
//         echo "Halo $this->nama, umur: $this->age, jurusan $this->jurusan";
//     }
// }

// $mhs1 = new Mahasiswa();
// $mhs1->nama = "Putronnn";
// $mhs1->age = 18;
// $mhs1->jurusan = "Rekayasa Perangkat Lunak";

// $mhs1->sapa();


