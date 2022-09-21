<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'product_name' => $row['product_name'],
            'product_number' => $row['product_number'],
            'product_status' => $row['product_status'],
            'product_uom_high' => $row['product_uom_high'],
            'product_uom_mid' => $row['product_uom_mid'],
            'product_high_to_mid' => $row['product_high_to_mid'],
            'product_mid_to_low' => $row['product_mid_to_low'],
            'product_manufacture' => $row['product_manufacture'],
            'product_category' => $row['product_category'],
            'product_start_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['product_start_date']),
            'product_end_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['product_end_date']),
            'product_sales_uom' => $row['product_sales_uom'],
            'product_uom_low' => $row['product_uom_low'],
            'product_magnitude_of_low' => $row['product_magnitude_of_low'],
            'product_signature_start_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['product_signature_start_date']),
            'product_signature_end_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['product_signature_end_date']),

        ]);
    }
}
