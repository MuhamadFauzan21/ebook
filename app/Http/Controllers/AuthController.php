<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120137,
            'NAMA' => 'Muhamad Fauzan',
            'PHONE' => '081291864615',
            'Class' => 'XII RPL 4'
        ];
    }
}
