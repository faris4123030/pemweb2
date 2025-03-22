<?php

namespace App\Controllers;

class page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "halaman term of service";
    }
    public function biodata()
    {
        echo "nama : Raihan Salman Alfarisi";
        echo "<br>Alamat : Gedangan, Mojowarno, jombang<br>";
        echo "ttl : jombang, 9 FEB 2005";
        echo "<br>jenis kelamin : laki-laki<br>";
    }
}