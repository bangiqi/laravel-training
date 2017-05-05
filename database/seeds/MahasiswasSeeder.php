<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\Jurusan;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
/*       DB::table('mahasiswas')->insert([
            'npm'=>'131105150354',
            'nama'=>'Rizki Ramdani',
            'gender'=>'Laki-laki',
            'id_jur'=>'TI001',
            'kelas'=>'Reguler',
            'semester'=>8,
       ]);
*/
       Mahasiswa::create([
            'npm'=>'131105150354',
            'nama'=>'Rizki Ramdani',
            'gender'=>'Laki-laki',
            'id_jur'=>'TI001',
            'kelas'=>'Karyawan',
            'semester'=>8,
       ]);

       $this->command->info("berhasil menambah mahasiswa");

       Jurusan::create([
            'id_jur'=>'TI001',
            'nama_jur'=>'Sistem Informasi'
       ]);

       Jurusan::create([
            'id_jur'=>'TI002',
            'nama_jur'=>'Rekayasa Perangkat Lunak'
       ]);

       Jurusan::create([
            'id_jur'=>'TI003',
            'nama_jur'=>'NCC'
       ]);

       Jurusan::create([
            'id_jur'=>'TI004',
            'nama_jur'=>'Geo Informatika'
       ]);
       
       $this->command->info("berhasil menambah jurusan");
       
    }
}
