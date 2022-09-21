<?php

namespace App\Imports;

use App\Models\RouteAssignDate;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RouteAssignDateImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RouteAssignDate([
            'route_assign_date_day' => $row['route_assign_date_day'],
            'route_assign_date_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['route_assign_date_date']),
            // 'route_assign_date_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['route_assign_date_date']),

        ]);
    }
}
