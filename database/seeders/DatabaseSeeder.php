<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create([
            'username' => 'beniardiyanto',
            'password' => Hash::make('1234')
        ]);
        {
            \App\Models\Rombel::factory(10)->create([
                'jml_rombel' => '15',
                'jurusan' => 'RPL',
                'rombel' => 'RPL X-1',
                'singkatan_jurusan' => 'RPL',
                'tingkat' => 1,
            ]);
        }
    }
    
}
