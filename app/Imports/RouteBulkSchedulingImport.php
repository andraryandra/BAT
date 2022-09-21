<?php

namespace App\Imports;

use App\Models\RouteBulkScheduling;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RouteBulkSchedulingImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RouteBulkScheduling([
            'route_bulk_scheduling_teritory' => $row['route_bulk_scheduling_teritory'],
            'route_bulk_scheduling_trade_approach' => $row['route_bulk_scheduling_trade_approach'],
            'route_bulk_scheduling_route' => $row['route_bulk_scheduling_route'],
            'route_bulk_scheduling_route_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['route_bulk_scheduling_route_date']),

        ]);
    }
}
