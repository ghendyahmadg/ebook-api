<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118069',
                'name' => 'Ghendy Ahmad Ghadafi',
                'gender' => 'Laki - laki',
                'phone' => '+62 812 - 1521 - 2660',
                'class' => 'XII RPL 2'];
    }

}
