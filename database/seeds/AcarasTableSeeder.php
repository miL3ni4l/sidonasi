<?php

use Illuminate\Database\Seeder;

class AcarasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \App\Acara::insert([
            [
              'id'  			=> 1,
              'nama_acr'  			=> 'SICD',
              'tgl_acara'			=> '2020-01-01',
              'lokasi' 		=> 'UKDW',
              'jumlah_acara'		=> 1,
              'ket'	=> 'ada',
              'cover'			=> 'sicd_java.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
             'id'  			=> 2,
              'nama_acr'  			=> 'Gelar Budaya',
              'tgl_acara'			=> '2020-01-01',
              'lokasi' 		=> 'UKDW',
              'jumlah_acara'		=> 1,
              'ket'	=> 'ada',
              'cover'			=> 'gelbud_java.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 3,
              'nama_acr'  			=> 'DWPRO',
              'tgl_acara'			=> '2020-01-01',
              'lokasi' 		=> 'UKDW',
              'jumlah_acara'		=> 1,
              'ket'	=> 'ada',
              'cover'			=> 'dwpro_java.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
