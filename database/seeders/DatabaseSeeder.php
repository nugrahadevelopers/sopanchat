<?php

namespace Database\Seeders;

use App\Models\Chat;
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
        Chat::create([
            'jenis' => 'Chat Dosen',
            'slug' => 'chat-dosen',
            'pesan' => 'Assalamualikum%2C%0AMaaf+sebelumnya+telah+mengganggu+waktunya.+Saya%0ANama%3A%0ANIM%3A%0Amahasiswa+bimbingan+bapak%2Fibuk+ingin+melakukan+bimbingan+tugas+akhir.+kapan+kiranya+saya+bisa+menemui+bapak%2Fibuk+%3F%0A%0ATerima+Kasih',
        ]);

        Chat::create([
            'jenis' => 'Chat HRD',
            'slug' => 'chat-hrd',
            'pesan' => 'Selamat+siang%2C%0ASaya+isi-dengan-nama%2C+mendapatkan+informasi+bahwa+perusahaan+bapak+sedang+mengadakan+perekrutan+karyawan.+Apakah+masih+tersedia+%3F%0A%0ATerima+kasih.',
        ]);
    }
}
