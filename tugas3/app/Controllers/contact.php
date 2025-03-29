<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function contact()
    {
        $data['alamat'] = array(
            array(
                'tipe' => 'Rumah',
                'alamat' => 'Desa Peterongan no 28',
                'kota' => 'Jombang'
            ),
            array(
                'tipe' => 'Kantor',
                'alamat' => 'Kompleks Ponpes Darul Ulum Peterongan',
                'kota' => 'Jombang'
            )
        );
        $this->load->view('contact_view', $data);
    }
}
