<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    // public function catatan() {

    // 	return view ('catatan', [
    // 		'title' => 'Catatan',
    // 		'barangs' => Barang::all()
    // 	]);
    // }

    // public function edit($id) {

    // 	return view ('edit', [
    // 		'title' => 'Edit',
    // 		'barangs' => Barang::find($id)
    		// method find dia mengambil seluruh data atau mengambil seluruh kolom yang ada di baris yg ditentukan parameter
    	// ]);
    // }

     public function home() {

    	return view ('home', [
    		'title' => 'Home',
    	]);
    }
}
