<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Kecamatan::create(['nama' => 'Blimbing']);
        Kecamatan::create(['nama' => 'Kedungkandang']);
        Kecamatan::create(['nama' => 'Lowokwaru']);
        Kecamatan::create(['nama' => 'Sukun']);
        Kecamatan::create(['nama' => 'Klojen']);
        Kecamatan::create(['nama' => 'Sukomanunggal']);
        Kecamatan::create(['nama' => 'Karangploso']);
        Kecamatan::create(['nama' => 'Singosari']);
        Kecamatan::create(['nama' => 'Pagelaran']);
        Kecamatan::create(['nama' => 'Pakis']);
        Kecamatan::create(['nama' => 'Dau']);
        Kecamatan::create(['nama' => 'Ngajum']);
        Kecamatan::create(['nama' => 'Lawang']);
        Kecamatan::create(['nama' => 'Poncokusumo']);
        Kecamatan::create(['nama' => 'Wagir']);
        Kecamatan::create(['nama' => 'Tumpang']);
        Kecamatan::create(['nama' => 'Gondanglegi']);
        Kecamatan::create(['nama' => 'Dampit']);
        Kecamatan::create(['nama' => 'Wajak']);
        Kecamatan::create(['nama' => 'Tirtoyudo']);
    }
}
