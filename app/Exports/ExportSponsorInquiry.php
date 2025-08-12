<?php

namespace App\Exports;

use App\Models\SponsorInquiry;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSponsorInquiry implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return SponsorInquiry::select('full_name', 'email', 'phone', 'package', 'message', 'created_at', 'updated_at')->get();
    }

    public function headings(): array
    {
        return[
            'Full Name', 
            'Email', 
            'Phone', 
            'Package', 
            'Message', 
            'Created at', 
            'Modified at', 
        ];
    }
}
