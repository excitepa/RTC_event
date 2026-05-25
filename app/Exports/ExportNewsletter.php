<?php

namespace App\Exports;

use App\Models\Newsletter;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportNewsletter implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Newsletter::select('email', 'created_at', 'updated_at')->get();
    }

    public function headings(): array
    {
        return[
            'Email', 
            'Created at', 
            'Modified at', 
        ];
    }
}
