<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UserImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'users_employe_id' => $row['users_employe_id'],
            'users_first_name' => $row['users_first_name'],
            'users_last_name' => $row['users_last_name'],
            'users_users_name' => $row['users_users_name'],
            'users_role' => $row['users_role'],
            'users_status' => $row['users_status'],
            'users_type' => $row['users_type'],
            'users_free_field_1' => $row['users_free_field_1'],
            'users_free_field_2' => $row['users_free_field_2'],
            'users_free_text_field_2' => $row['users_free_text_field_2'],
            'users_email' => $row['users_email'],
            'users_address' => $row['users_address'],
            'users_phone' => $row['users_phone'],
            'password' => Hash::make($row['password']),
            'users_login_status' => $row['users_login_status'],

        ]);
    }
}
