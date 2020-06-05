<?php

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
            [
              'id'  			=> 1,
              'user_id'  		=> 1,
              'nid'				=> 72170155,
              'nama' 			=> 'AnggaDK',
              'tempat_lahir'	=> 'Palangkaraya',
              'tgl_lahir'		=> '2020-01-01',
              'jk'				=> 'L',
              'agama'     => 'Kristen',
              'alamat'			=> 'Palangkaraya',
              'hp'     => '0822',
              'email'     => 'angga@gmail.com',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'        => 2,
              'user_id'     => 2,
              'nid'       => 72170156,
              'nama'      => 'Riko',
              'tempat_lahir'  => 'Yogyakarta',
              'tgl_lahir'   => '2020-01-01',
              'jk'        => 'L',
              'agama'     => 'Islam',
              'alamat'      => 'Godean',
              'hp'     => '0822',
              'email'     => 'riko@gmail.com',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
