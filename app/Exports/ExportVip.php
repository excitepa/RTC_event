<?php

namespace App\Exports;

use App\Models\VIP;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportVip implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return VIP::select('full_name', 'email', 'company', 'job_title', 'attendance_days', 'created_at', 'updated_at')->get();
    }

    public function headings(): array
    {
        return[
            'Full Name', 
            'Email', 
            'Company', 
            'Job Title', 
            'Attendance Days', 
            'Created at', 
            'Modified at', 
        ];
    }
}
