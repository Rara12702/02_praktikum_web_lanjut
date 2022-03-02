<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function Home()
    {
        return "<center><h1>Selamat Datang <br> </h1>
                <h2> Ini adalah halaman home </h2> </center> ";

    }
}
