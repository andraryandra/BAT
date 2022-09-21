<?php

namespace App\Imports;

use App\Models\Teritory;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeritoryImport implements ToModel, WithHeadingRow
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Teritory([
            'teritory_code' => $row['teritory_code'],
            'teritory_name' => $row['teritory_name'],
            'teritory_comment' => $row['teritory_comment'],
            'teritory_trade_approach' => $row['teritory_trade_approach'],
            'teritory_status' => $row['teritory_status'],
            'teritory_level' => $row['teritory_level'],
            'teritory_country' => $row['teritory_country'],
            'teritory_start_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['teritory_start_date']),
            'teritory_end_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['teritory_end_date']),
            'teritory_free_field_1' => $row['teritory_free_field_1'],
            'teritory_free_field_2' => $row['teritory_free_field_2'],
            'teritory_free_text_1' => $row['teritory_free_text_1'],
            'teritory_free_text_2' => $row['teritory_free_text_2'],

        ]);
    }
}
