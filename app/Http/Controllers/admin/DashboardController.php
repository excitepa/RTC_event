<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use App\Models\Attendees;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\SponsorInquiry;
use App\Exports\ExportAttendee;
use App\Models\ResourceLead;
use App\Exports\ExportResourceLead;
use App\Exports\ExportContact;
use App\Exports\ExportNewsletter;
use App\Exports\ExportSponsorInquiry;
use App\Models\VIP;
use App\Models\Code;
use Carbon\Carbon;
use App\Exports\CodesExport;
use App\Exports\ExportVip;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        try
        {   
            // $registrants = Attendees::get()->count();
            $registrants = Attendees::where('created_at', '>=', Carbon::now()->startOfYear())->count();
            $newsletters = Newsletter::get()->count();
            $sponsor_inquiries = SponsorInquiry::get()->count();
            $contacts = Contact::get()->count();
            return view('admin.dashboard', compact('registrants', 'newsletters', 'sponsor_inquiries', 'contacts'));
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function attendee()
    {
        try
        {   
            // $attendees = Attendees::get();
            $attendees = Attendees::where('created_at', '>=', Carbon::now()->startOfYear())
                                    ->orderBy('created_at', 'desc')
                                    ->get();
            return view('admin.attendee', compact('attendees'));
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }
    
    public function resource_lead()
    {
        try
        {   
            $resource_leads = ResourceLead::orderBy('created_at', 'desc')
                                            ->get();
            return view('admin.resources_lead', compact('resource_leads'));
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function export_attendee()
    {
        try{
            return Excel::download(new ExportAttendee, 'attendees.xlsx');

        } catch (ValidationException $e)
        {
            return redirect()->back()->with('danger', $e->validator->errors()->first());
        } catch (\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());

        }
    }
    
    public function export_resource_lead()
    {
        try{
            return Excel::download(new ExportResourceLead, 'resource_lead.xlsx');

        } catch (ValidationException $e)
        {
            return redirect()->back()->with('danger', $e->validator->errors()->first());
        } catch (\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());

        }
    }
    
    public function vip()
    {
        try
        {   
            $vips = VIP::orderBy('created_at', 'desc')
                        ->get();
            return view('admin.vip', compact('vips'));
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function export_vip()
    {
        try{
            return Excel::download(new ExportVip, 'vip.xlsx');

        } catch (ValidationException $e)
        {
            return redirect()->back()->with('danger', $e->validator->errors()->first());
        } catch (\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());

        }
    }

    public function newsletter()
    {
        try
        {   
            $newsletters = Newsletter::orderBy('created_at', 'desc')
                                        ->get();
            return view('admin.newsletter', compact('newsletters'));
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function export_newsletter()
    {
        try{
            return Excel::download(new ExportNewsletter, 'newsletters.xlsx');

        } catch (ValidationException $e)
        {
            return redirect()->back()->with('danger', $e->validator->errors()->first());
        } catch (\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());

        }
    }

    public function sponsor_inquiry()
    {
        try
        {   
            $sponsor_inquiries = SponsorInquiry::orderBy('created_at', 'desc')
                                                ->get();
            return view('admin.sponsor_inquiry', compact('sponsor_inquiries'));
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function export_sponsor_inquiry()
    {
        try{
            return Excel::download(new ExportSponsorInquiry, 'potential_sponsors.xlsx');

        } catch (ValidationException $e)
        {
            return redirect()->back()->with('danger', $e->validator->errors()->first());
        } catch (\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());

        }
    }

    public function contact()
    {
        try
        {   
            $contacts = Contact::orderBy('created_at', 'desc')
                                ->get();
            return view('admin.contact', compact('contacts'));
        } catch(\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());
        }
    }

    public function export_contact()
    {
        try{
            return Excel::download(new ExportContact, 'contacts.xlsx');

        } catch (ValidationException $e)
        {
            return redirect()->back()->with('danger', $e->validator->errors()->first());
        } catch (\Exception $e)
        {
            return redirect()->back()->with('danger', $e->getMessage());

        }
    }
    
    public function generateAndDownload()
    {
        Code::truncate();

        $generatedCodes = [];

        while (count($generatedCodes) < 1000) {
            // Generate a 4-digit random number (from 0000 to 9999), padded with leading zeros
            $randomNumber = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $code = 'RTM' . $randomNumber;

            // Ensure no duplicates
            if (!in_array($code, $generatedCodes)) {
                $generatedCodes[] = $code;
            }
        }

        // Save to DB
        foreach ($generatedCodes as $code) {
            Code::create(['code' => $code]);
        }

        // Export as CSV using Maatwebsite
        return Excel::download(new CodesExport, 'codes.csv');
    }
}
