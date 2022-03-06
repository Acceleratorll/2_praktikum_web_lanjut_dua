<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang !";
    }

    public function about(){
        return "Moch Fajrul Falah 2041720070";
    }

    public function article($id){
        return "Halaman Artikel dengan Id = ".$id;
    }
}
