<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kasir;

class KasirController extends Controller
{
     public function kasir() {

    	return view ('kasir', [
    		'title' => 'Kasir',
    		'barangs' => Barang::all(),
            // 'order' => Kasir::getOrder()
    	]);
    }

    public function order() {

        
       return view ('kasir', [
            'title' => 'Kasir',
            'barangs' => Barang::all(),
            'order' => [],
           

        ]);

    }

   

}
   
