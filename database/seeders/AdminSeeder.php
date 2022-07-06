<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create([
            'username' => 'beniardiyanto',
            'password' => Hash::make('1234')
        ]); {
            \App\Models\Rombel::factory(10)->create([
                'jml_rombel' => '15',
                'jurusan' => 'RPL',
                'rombel' => 'RPL X-1',
                'singkatan_jurusan' => 'RPL',
                'tingkat' => 1,
            ]);
        }


        // $user = new User();
        // $user->name = "user";
        // $user->email = "admin@gmail.com";
        // $user->username = "Admin1";
        // $user->password = Hash::make('1234');
        // $user->role = "Admin";
        // $user->save();
    }
}