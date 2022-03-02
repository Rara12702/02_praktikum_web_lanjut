<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program extends Controller
{
    public function karir()
    {
        return "Ini adalah daftar program karir <br>
                <a href="https://www.educastudio.com/program/karir"> https://www.educastudio.com/program/karir </a>";
    }

    public function magang()
    {
        return "Ini adalah daftar program magang <br>
                <a href="https://www.educastudio.com/program/magang"> https://www.educastudio.com/program/magang </a>";
    }

    public function kunjunganIndustri()
    {
        return "Ini adalah daftar program kunjungan industri <br>
                <a href="https://www.educastudio.com/program/kunjungan-industri"> https://www.educastudio.com/program/kunjungan-industri </a>";
    }
}
