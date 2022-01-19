<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Promosi;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User
        User::create([
            'nama' => 'Admin',
            'username' => 'Admin',
            'password' => Hash::make('Mayang123'),
            'role' => 0
        ]);

        Transaksi::create([
            'nama' => 'Arhan',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 1',
            'waktu' => '07.00',
            'harga' => '100000',
        ]);
        

        Transaksi::create([
            'nama' => 'Arian',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 1',
            'waktu' => '08.00',
            'harga' => '100000',
        ]);

        Transaksi::create([
            'nama' => 'Pratama',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 1',
            'waktu' => '09.00',
            'harga' => '100000',
        ]);

        Transaksi::create([
            'nama' => 'Rudi',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 2',
            'waktu' => '07.00',
            'harga' => '100000',
        ]);

        Transaksi::create([
            'nama' => 'Ruslan',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 2',
            'waktu' => '08.00',
            'harga' => '100000',
        ]);

        Transaksi::create([
            'nama' => 'Dani',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 2',
            'waktu' => '09.00',
            'harga' => '100000',
        ]);

        Transaksi::create([
            'nama' => 'Ahmad',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 3',
            'waktu' => '07.00',
            'harga' => '100000',
        ]);

        Transaksi::create([
            'nama' => 'Riki',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 3',
            'waktu' => '08.00',
            'harga' => '100000',
        ]);

        Transaksi::create([
            'nama' => 'Fajar',
            'kontak' => '08963475275',
            'lapangan' => 'Lapangan 3',
            'waktu' => '09.00',
            'harga' => '100000',
        ]);
    }
}
