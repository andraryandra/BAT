<?php

namespace App\Imports;

use App\Models\UsersRole;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UsersRoleImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UsersRole([
            'status_type_role' => $row['status_type_role'],
            'status_check_role' => $row['status_check_role'],
        ]);
    }
}
