<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
     //contoh penggunaan method index(require Parameter)
    public function index($id,$a,$b) {
        $c = $a+$b;
        return 'get user dengan id '.$id.' hasil tambah '.$c;
    }

    //contoh penggunaan method test (optional parameter)
    public function test($nim, $name = 'saya') {
        return 'nim : '.$nim.' names: '.$name;
    }

    //contoh penggunaan method pangkat
    public function pangkat($a, $b) {
        $c= pow($a,$b);

        return 'nilai pangkat adalah '.$c;
    }
}
