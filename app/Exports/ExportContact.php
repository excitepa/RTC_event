<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportContact implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Contact::select('full_name', 'email', 'subject', 'message', 'created_at', 'updated_at')->get();
    }

    public function headings(): array
    {
        return[
            'Full Name', 
            'Email', 
            'Subject', 
            'Message', 
            'Created at', 
            'Modified at', 
        ];
    }
}
