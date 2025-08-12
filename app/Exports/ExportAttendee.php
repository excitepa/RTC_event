<?php

namespace App\Exports;

use App\Models\Attendees;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportAttendee implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Attendees::select('full_name', 'email', 'phone', 'company', 'industry', 'job_title', 'country', 'about_webinar', 'message', 'created_at', 'updated_at')->get();
    }

    public function headings(): array
    {
        return[
            'Full Name', 
            'Email', 
            'Phone', 
            'Company', 
            'Industry', 
            'Job Title', 
            'Country', 
            'How you heard about the webinar', 
            'Message', 
            'Created at', 
            'Modified at', 
        ];
    }
}
