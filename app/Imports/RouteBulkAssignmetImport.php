<?php

namespace App\Imports;

use App\Models\RouteBulkAssignment;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RouteBulkAssignmetImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RouteBulkAssignment([
            'route_bulk_assignment_trade_approach' => $row['route_bulk_assignment_trade_approach'],
            'route_bulk_assignment_teritory' => $row['route_bulk_assignment_teritory'],
            'route_bulk_assignment_route' => $row['route_bulk_assignment_route'],
            'route_bulk_assignment_customer_number' => $row['route_bulk_assignment_customer_number'],
            'route_bulk_assignment_customer_name' => $row['route_bulk_assignment_customer_name'],
            'route_bulk_assignment_order' => $row['route_bulk_assignment_order'],
            'route_bulk_assignment_address' => $row['route_bulk_assignment_address'],

        ]);
    }
}
