<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sekolah;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::create(['nama' => 'SDN Malang 1', 'kecamatan_id' => 1, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMPN Malang 2', 'kecamatan_id' => 3, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMAN Malang 3', 'kecamatan_id' => 5, 'status' => 'N']);
        Sekolah::create(['nama' => 'SDN Malang 4', 'kecamatan_id' => 7, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMKN Malang 5', 'kecamatan_id' => 8, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMA Malang 6', 'kecamatan_id' => 8, 'status' => 'N']);
        Sekolah::create(['nama' => 'SDN Malang 7', 'kecamatan_id' => 5, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMPN Malang 8', 'kecamatan_id' => 4, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMAN Malang 9', 'kecamatan_id' => 3, 'status' => 'N']);
        Sekolah::create(['nama' => 'SDN Malang 10', 'kecamatan_id' => 8, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMKN Malang 11', 'kecamatan_id' => 2, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMA Malang 12', 'kecamatan_id' => 6, 'status' => 'N']);
        Sekolah::create(['nama' => 'SDN Malang 13', 'kecamatan_id' => 7, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMPN Malang 14', 'kecamatan_id' => 8, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMAN Malang 15', 'kecamatan_id' => 18, 'status' => 'N']);
        Sekolah::create(['nama' => 'SDN Malang 16', 'kecamatan_id' => 17, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMKN Malang 17', 'kecamatan_id' => 12, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMA Malang 18', 'kecamatan_id' => 13, 'status' => 'N']);
        Sekolah::create(['nama' => 'SDN Malang 19', 'kecamatan_id' => 15, 'status' => 'N']);
        Sekolah::create(['nama' => 'SMPN Malang 20', 'kecamatan_id' => 61, 'status' => 'N']);
    }
}
