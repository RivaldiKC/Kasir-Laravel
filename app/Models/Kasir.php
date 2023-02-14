<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

     public static $order = [

            [
                "nama" => "nasi",
                "qty" => 3
            ]
    ];

    public function getOrder() {

    	return self::$order;
    }

    //  public static $item = [

    //     [
    //         "nama" => "ayam",
    //         "harga" => "200",
    //         "jumlah" => "2"
    //     ],
    //      [
    //         "nama" => "sapi",
    //         "harga" => "400",
    //         "jumlah" => "3"
    //     ],
    // ];

    // public static function getOrder() {
    // 	return self::$item;
    // }
}
