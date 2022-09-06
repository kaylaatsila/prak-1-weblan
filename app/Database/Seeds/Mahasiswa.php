<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'nama'          => 'Kayla',
                'npm'           => '2017051001',
                'alamat'        => 'Palembang',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Atsila',
                'npm'           => '2017051002',
                'alamat'        => 'Jakarta',
                'created_at'    =>  Time::now()
            ],
            [
                'nama'          => 'Ivanka',
                'npm'           => '2017051003',
                'alamat'        => 'Bandar Lampung',
                'created_at'    =>  Time::now()
            ],

        ];


        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}