<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'kd_guru' => $row[1],
            'name' => $row[2],
            'avatar' => $row[3],
            'role' => $row[4],
            'kd_mapel' => $row[5],
            'username' => $row[6],
            'password' => Hash::make($row[7]),
            // 'remember_token' => $row[8],
        ]);
    }
}
