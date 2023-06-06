<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Home';
        $name = 'Aisyah Nabila Zahra';
        $prodi = 'Sistem Informasi';
        $nim = '1204210122';
        $birth = '22 September 2002';
        $address = 'Madiun, Jawa Timur';
        $phone = '0881134855';
        $email = 'aisyahnabila2.an@gmail.com';
        return view('home', ['pageTitle' => $pageTitle], compact('name', 'prodi', 'birth', 'address', 'phone', 'email', 'nim'));
    }
}