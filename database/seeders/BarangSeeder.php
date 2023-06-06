<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'B-001',
                'nama_barang' => 'Buku Tulis',
                'harga_barang' => 3000,
                'deskripsi_barang' => 'Buku Tulis Bergaris',
                'satuan_id' => 1,
            ],
            [
                'kode_barang' => 'B-002',
                'nama_barang' => 'Pensil Gambar 5B',
                'harga_barang' => 32000,
                'deskripsi_barang' => 'Pensil Gambar Faber-Castell 9000 5b',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'B-003',
                'nama_barang' => 'Penghapus',
                'harga_barang' => 5500,
                'deskripsi_barang' => 'Penghapus Faber-Castell EBTA SPMB',
                'satuan_id' => 2
            ],
        ]);
    }
}
