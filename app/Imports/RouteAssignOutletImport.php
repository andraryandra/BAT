<?php

namespace App\Imports;

use App\Models\RouteAssignOutlet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RouteAssignOutletImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RouteAssignOutlet([
            'route_assign_outlet_order' => $row['route_assign_outlet_order'],
            'route_assign_outlet_customer_number' => $row['route_assign_outlet_customer_number'],
            'route_assign_outlet_customer_name' => $row['route_assign_outlet_customer_name'],
            'route_assign_outlet_address' => $row['route_assign_outlet_address'],

        ]);
    }
}
