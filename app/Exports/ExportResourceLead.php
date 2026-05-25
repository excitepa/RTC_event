<?php

namespace App\Exports;

use App\Models\ResourceLead;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportResourceLead implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
        //
        public function collection()
        {
            //
            return ResourceLead::select('full_name', 'email', 'company', 'role', 'created_at', 'updated_at')->get();
        }

        public function headings(): array
        {
            return[
                'Full Name', 
                'Email', 
                'Company', 
                'Role/Job Title', 
                'Created at', 
                'Modified at', 
            ];
        }
}
