<?php

namespace App\Imports;

use App\Models\NewCustomer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NewCustomerImport implements ToModel, WithHeadingRow
{

    private $rows = 0;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        ++$this->rows;
        return new NewCustomer([
            'new_customer_type' => $row['new_customer_type'],
            'new_customer_status' => $row['new_customer_status'],
            'new_customer_shopper_channel' => $row['new_customer_shopper_channel'],
            'new_customer_name' => $row['new_customer_name'],
            'new_customer_outlet_type' => $row['new_customer_outlet_type'],
            'new_customer_outlet_subtype' => $row['new_customer_outlet_subtype'],
            'new_customer_outlet_teritory' => $row['new_customer_outlet_teritory'],
        ]);
    }

    public function getRowCount(): int
    {
        return $this->rows;
    }
}
