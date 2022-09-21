<?php

namespace App\Imports;

use App\Models\RouteSetup;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RouteSetupImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RouteSetup([
            'route_setup_teritory' => $row['route_setup_teritory'],
            'route_setup_route' => $row['route_setup_route'],
            'route_setup_status' => $row['route_setup_status'],
        ]);
    }
}
