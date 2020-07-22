<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $faker = Faker\Factory::create(); //import library faker
        // $limit = 20; //batasan berapa banyak data

        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('siswas')->insert([ //mengisi datadi database
        //         'nomor_pendaftaran' => $faker->nomor_pendaftaran,
        //         'nama' => $faker->nama, //email unique sehingga tidak ada yang sama
        //         'jenis_kelamin' => $faker->jenis_kelamin,
        //         'tempat_lahir' => $faker->tempat_lahir,
        //         'tanggal_lahir' => $faker->tanggal_lahir,
        //         'alamat' => $faker->alamat,
        //         'kelurahan' => $faker->kelurahan,
        //         'kecamatan' => $faker->kecamatan,
        //         'kota' => $faker->kota,
        //         'provinsi' => $faker->provinsi,
        //         'nama_ortu' => $faker->nama_ortu,
        //         'nomor_nik' => $faker->nomor_nik,
        //         'nomor_kk' => $faker->nomor_kk,

        //     ]);
        // }

            	// insert data ke table pegawai
                DB::table('siswas')->insert([
                    'siswas_nomor_pendaftaran' => '2',
                    'siswas_nama' => 'Muhammad Bella Buay Nunyai',
                    'siswas_jenis_kelamin' => 'L',
                    'siswas_tempat_lahir' => 'Bandar Lampung',
                    'siswas_tanggal_lahir' => '1998-05-24'
                ]);

    }
    
}
