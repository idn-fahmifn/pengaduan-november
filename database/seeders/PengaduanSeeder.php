<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaduan::create([
            'id_user' => 1,  //lihat di phpmyadmin, pastikan gunakan record yang isAdmin == 0 dan id yang terdaptar di tabel user.
            'judul_laporan' => 'Air keran mati',
            'jenis' => 'kerusakan',
            'tanggal_laporan' => Carbon::now()->format('ymd'),
            'dokumentasi' => '-',
            'status' => 'pending'
        ]);
    }
}
