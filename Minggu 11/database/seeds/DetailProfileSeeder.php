<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Kediri',
            'nomor_tlp' => '085749261715',
            'ttl' => '2001-11-26',
            'foto' => 'picture.png'
        ]);
    }
}
