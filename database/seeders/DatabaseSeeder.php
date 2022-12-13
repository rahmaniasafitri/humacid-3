<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kandungan;
use App\Models\Manfaat;
use App\Models\Petunjuk;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $kandungan = [
            ['value'=>'C-Organik : 13,22%'],
            ['value'=>'N+P2O5+K20 : 5,35%'],
            ['value'=>'N-Organik : 0,57%'],
            ['value'=>'pH : 8,72%'],
            ['value'=>'Humacid : 50,59%'],
         ];
    
        foreach ($kandungan as $key => $kd) {
            Kandungan::create($kd);
        }
        $manfaat = [
            ['value'=>'Meningkatkan hasil produksi tanaman'],
            ['value'=>'Dapat digunakan untuk semua jenis tanaman.'],
            ['value'=>'Meningkatkan ketahanan tanaman terhadap penyakit.'],
            ['value'=>'Menyediakan makanan untuk mikroorganisme tanah.'],
            ['value'=>'Meningkatkan kapasitas tukar kation yang tinggi.'],
            ['value'=>'Menetralkan logam berat dalam tanah.'],
            ['value'=>'Menghemat & mengurangi penggunaan pupuk kimia.'],
            ['value'=>'Sebagai bahan pembenah tanah alami dan memiliki kemampuan memperbaiki sifat fisik, kimia & biologi tanah.'],
        ];
    
        foreach ($manfaat as $key => $mf) {
            Manfaat::create($mf);
        }

        $petunjuk = [
            ['value'=>'Dosis pemakaian Humacid Multi Sejahtera 16 ltr/Ha.'],
            ['value'=>'Campurkan 250 ml Humacid Multi Sejahtera dengan air bersih kedalam tangki semprot 14 ltr.'],
            ['value'=>'Semprotkan hasil campuran pada no.2 saat pengolahan tanah.'],
        ];
    
        foreach ($petunjuk as $key => $pt) {
            Petunjuk::create($pt);
        }

    }
}
