<?php namespace App\Controllers;
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
    public function Biodata()
    {
        echo "nama : Raihan Salman Alfarisi";
        echo "<br>Alamat : Gedangan, Mojowarno, jombang<br>";
        echo "ttl : jombang, 9 FEB 2005";
        echo "<br>jenis kelamin : laki-laki<br>";
    }
}