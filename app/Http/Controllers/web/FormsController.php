<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\Contact as MailContact;
use App\Mail\ResourceLead as MailResourceLead;
use App\Mail\SponsorInquiry as MailSponsorInquiry;
use App\Mail\VideoResourceLead;
use App\Mail\VIPMail;
use App\Mail\ZeptoMailTest;
use App\Models\Attendees;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\ResourceLead;
use App\Models\SponsorInquiry;
use App\Models\VIP;
use App\Rules\EventRegister;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
use Egulias\EmailValidator\Validation\MultipleValidationWithAnd;
use Egulias\EmailValidator\Validation\RFCValidation;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;
use Throwable;

class FormsController extends Controller
{
    //
    public function newsletter(Request $request)
    {
        try {
            try {

                $request->validate([
                    'email' => 'bail|required|email|unique:newsletters,email',
                    'g-recaptcha-response' => ['required', new EventRegister],
                ]);
                
                $newsletter = new Newsletter();
                $newsletter->email = $request->email;
                $newsletter->save();

            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('g-recaptcha-response')) {
                    return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
                                ->withInput();
                }
                return back()->withErrors($e->validator)->withInput();
            }

            return redirect()->back()->with('success', "You have successfully subscribed to our newsletters.");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
            
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }

    public function inquiry(Request $request)
    {
        // dd($request);
        
        try {
            try {

                $request->validate([
                    'full_name' => 'bail|required|string',
                    'email' => 'bail|required|email',
                    'phone' => 'bail|required|regex:/^[0-9]+$/',
                    'package' => 'bail|required|string',
                    'message' => 'bail|required|string',
                    'g-recaptcha-response' => ['required', new EventRegister],
                ]);
            
            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('g-recaptcha-response')) {
                    return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
                                ->withInput();
                }
                return back()->withErrors($e->validator)->withInput();
            }
            
            $sponsor_inquiry = new SponsorInquiry();
            $sponsor_inquiry->full_name = $request->full_name;
            $sponsor_inquiry->email = $request->email;
            $sponsor_inquiry->phone = $request->phone;
            $sponsor_inquiry->package = $request->package;
            $sponsor_inquiry->message = $request->message;
            $sponsor_inquiry->save();

            try {
                Mail::to($sponsor_inquiry->email)->send(new MailSponsorInquiry($sponsor_inquiry));
            } catch (\Exception $e) {
                Log::error("Email sending failed: " . $e->getMessage());
            }

            return redirect()->back()->with('success', "Your request has been submitted successfully.");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
            
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }

    // public function attendee(Request $request)
    // {
    //     try {
    //         // dd($request);
    //         $request->validate([
    //             'full_name' => 'bail|required|string',
    //             'email' => 'bail|required|email|unique:attendees,email',
    //             'phone' => 'bail|required|regex:/^[0-9]+$/',
    //             'company' => 'bail|required|string',
    //             'industry' => 'bail|required|string|not_in:Choose your industry',
    //             'attendance_days' => 'required|array', // Ensure at least one day is selected
    //             'attendance_days.*' => 'in:Day 1,Day 2', // Validate individual values in the array
    //             'job_title' => 'bail|required|string',
    //             'country' => 'bail|required|string',
    //             'about_webinar' => 'bail|required|string|not_in:How did you hear about the event',
    //             'message' => 'bail|string',
    //         ]);

    //         $email = $request->input('email');
    //         $validator = new EmailValidator();
    //         // dd($request);

    //         // Step 2: Combine RFC validation and DNS check validation
    //         $multipleValidations = new MultipleValidationWithAnd([
    //             new RFCValidation(),
    //             new DNSCheckValidation(),
    //         ]);

    //         if ($validator->isValid($email, $multipleValidations)) {
    //             // The email is valid based on both syntax and MX record check
                
    //             $attendee = new Attendees();
    //             $attendee->full_name = $request->full_name;
    //             $attendee->email = $request->email;
    //             $attendee->phone = $request->phone;
    //             $attendee->company = $request->company;
    //             $attendee->industry = $request->industry;
    //             $attendee->job_title = $request->job_title;
    //             $attendee->country = $request->country;
    //             $attendee->about_webinar = $request->about_webinar;
    //             $attendee->message = $request->message;
    //             $attendee->attendance_days = json_encode($request->attendance_days);
    //             $attendee->save();
    //             // dd($attendee);

    //             return redirect()->back()->with('success', "You have successfully registered for the webinar.");
    //         } else {
    //             return back()->with('danger', "Invalid email address, please try again");
    //         }
    //     } catch (ValidationException $th) {
    //         return back()->with('danger', $th->validator->errors()->first())->withInput();
            
    //     } catch (\Throwable $th) {
    //         return back()->with('danger', $th->getMessage())->withInput();
    //     }
    // }
    public function attendee(Request $request)
    {
        try {
            // dd($request);
            // Validate input fields first
            try {
                $request->validate([
                    // 'full_name' => 'bail|required|string',
                    'full_name' => ['required', 'regex:/^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$/'],
                    'email' => 'bail|required|email|unique:attendees,email',
                    'phone' => 'bail|required|regex:/^[0-9]+$/',
                    'company' => 'bail|required|string',
                    'industry' => 'bail|required|string|not_in:Choose your industry',
                    'attendance_days' => 'required|array',
                    'attendance_days.*' => 'in:Day 1,Day 2',
                    'job_title' => 'bail|required|string',
                    'country' => 'bail|string',
                    'about_webinar' => 'bail|required|string|not_in:How did you hear about the event',
                    'message' => 'bail|string',
                    'g-recaptcha-response' => ['required', new EventRegister],

                ]);

            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('g-recaptcha-response')) {
                    return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
                                ->withInput();
                }
                return back()->withErrors($e->validator)->withInput()->withFragment('registertestForm');
            }

            // Step 1: Validate email using Abstract API
            $email = $request->input('email');
            $apiKey = env('API_KEY'); // Replace with your API key
            $url = "https://emailvalidation.abstractapi.com/v1/?api_key=$apiKey&email=$email";

            // Initialize cURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            // Execute the request and decode the response
            $response = curl_exec($ch);
            curl_close($ch);
            $emailValidation = json_decode($response, true);
            // dd($emailValidation);

            // Check if the email is valid
            if (isset($emailValidation['is_valid_format']['value']) && $emailValidation['is_valid_format']['value'] === true) {
                // Email is valid, proceed with registration
                $attendee = new Attendees();
                $attendee->full_name = $request->full_name;
                $attendee->email = $request->email;
                $attendee->phone = $request->phone;
                $attendee->company = $request->company;
                $attendee->industry = $request->industry;
                $attendee->job_title = $request->job_title;
                $attendee->country = $request->country;
                $attendee->about_webinar = $request->about_webinar;
                $attendee->message = $request->message;
                $attendee->attendance_days = json_encode($request->attendance_days);
                $attendee->save();

                try {
                    Mail::to($attendee->email)->send(new ZeptoMailTest($attendee));
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('event.registered')->with("success", "Your have successfully regsitered!");

                // return redirect()->back()->with('success', "You have successfully registered for the webinar.");
            } else {
                // Invalid email format
                return back()->with('danger', "Invalid email address, please try again.");
            }
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }

    // public function resources_lead(Request $request)
    // {
    //     try {
    //         try {

    //             $request->validate([
    //                 'full_name' => 'bail|required|string',
    //                 'email' => 'bail|required|email',
    //                 'company' => 'bail|required|string',
    //                 'role' => 'bail|required|string',
    //                 // 'presentation_url' => 'required|string',
    //                 'g-recaptcha-response' => ['required', new EventRegister],
    //             ]);
    //         } catch (ValidationException $e) {
    //             if ($e->validator->errors()->has('g-recaptcha-response')) {
    //                 return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
    //                             ->withInput();
    //             }
    //             return back()->withErrors($e->validator)->withInput();
    //         }
    //         // dd($request);
            
    //         $resource_lead = new ResourceLead();
    //         $resource_lead->full_name = $request->full_name;
    //         $resource_lead->email = $request->email;
    //         $resource_lead->company = $request->company;
    //         $resource_lead->role = $request->role;
    //         $resource_lead->save();

    //         try {
    //             $day1Url = URL::temporarySignedRoute(
    //                 'download.day1', now()->addMinutes(3), ['email' => $request->email]
    //             );

    //             $day2Url = URL::temporarySignedRoute(
    //                 'download.day2', now()->addMinutes(3), ['email' => $request->email]
    //             );

    //             Mail::to($resource_lead->email)->send(new MailResourceLead($resource_lead, $day1Url, $day2Url));
    //         } catch (\Exception $e) {
    //             Log::error("Email sending failed: " . $e->getMessage());
    //         }
    //         // dd($contact);

    //         return redirect()->route('resources.success')->with('success', "You have successfully submitted a request.");
    //     } catch (ValidationException $th) {
    //         return back()->with('danger', $th->validator->errors()->first())->withInput();
            
    //     } catch (\Throwable $th) {
    //         return back()->with('danger', $th->getMessage())->withInput();
    //     }
    // }

    public function resources_lead(Request $request)
    {
        // dd($request);
        try {
            $request->validate([
                'full_name' => 'bail|required|string',
                'email' => 'bail|required|email',
                'company' => 'bail|required|string',
                'role' => 'bail|required|string',
                'g-recaptcha-response' => ['required', new EventRegister],
                'resource_type' => 'required|in:download,video,video1',
                'session_type' => 'nullable|string',
                'video_url' => 'nullable|url',
            ]);

            $resource_lead = new ResourceLead();
            $resource_lead->full_name = $request->full_name;
            $resource_lead->email = $request->email;
            $resource_lead->company = $request->company;
            $resource_lead->role = $request->role;
            $resource_lead->save();

            if ($request->resource_type === 'download') {
                $day1Url = URL::temporarySignedRoute('download.day1', now()->addMinutes(3), ['email' => $request->email]);
                $day2Url = URL::temporarySignedRoute('download.day2', now()->addMinutes(3), ['email' => $request->email]);

                try {
                    Mail::to($resource_lead->email)->send(new MailResourceLead($resource_lead, $day1Url, $day2Url));
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('resources.success')->with('success', "Presentation links sent to your email.");
            
            } elseif ($request->resource_type === 'video') {

                try {
                    Mail::to($resource_lead->email)->send(
                        new VideoResourceLead($resource_lead, 'emails.video_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }

             elseif ($request->resource_type === 'video1') {

                try {
                    Mail::to($resource_lead->email)->send(
                        new VideoResourceLead($resource_lead, 'emails.video1_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }

            elseif ($request->resource_type === 'video2') {

                try {
                    Mail::to($resource_lead->email)->send(
                        new VideoResourceLead($resource_lead, 'emails.video2_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }

            return back()->with('danger', 'Invalid request type.')->withInput();
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }

    public function eventRegistered()
    {
        return view('web.event-success');
    }

    public function vipRegistered()
    {
        return view('web.vip-success');
    }

    public function contact(Request $request)
    {
        try {
            // dd($request);
            try {

                $request->validate([
                    'full_name' => 'bail|required|string',
                    'email' => 'bail|required|email',
                    'subject' => 'bail|required|string',
                    'message' => 'bail|required|string',
                    'g-recaptcha-response' => ['required', new EventRegister],
                ]);
            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('g-recaptcha-response')) {
                    return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
                                ->withInput();
                }
                return back()->withErrors($e->validator)->withInput();
            }
            // dd($request);
            
            $contact = new Contact();
            $contact->full_name = $request->full_name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();

            try {
                Mail::to('events@rtmwestafrica.com')->send(new MailContact($contact));
            } catch (\Exception $e) {
                Log::error("Email sending failed: " . $e->getMessage());
            }
            // dd($contact);

            return redirect()->back()->with('success', "You have successfully submitted a request");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
            
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }

    // public function downloadKeynote($file)
    // {
    //     $allowedFiles = ['day1.pdf', 'day2.pdf'];

    //     if (!in_array($file, $allowedFiles)) {
    //         abort(403, 'Unauthorized download.');
    //     }

    //     $filePath = public_path("assets/resources/{$file}");

    //     if (File::exists($filePath)) {
    //         return response()->download($filePath);
    //     }

    //     abort(404, 'File not found.');
    // }

    // public function downloadDay1(Request $request)
    // {
    //     // Optional: validate token here
    //     // if ($request->token !== 'expected_token') { abort(403); }

    //     $path = public_path('assets/resources/day1.pdf');
    //     return response()->download($path, 'RTM-Day1-Presentation.pdf');
    // }

    // public function downloadDay2(Request $request)
    // {
    //     $path = public_path('assets/resources/day2.pdf');
    //     return response()->download($path, 'RTM-Day2-Presentation.pdf');
    // }

    public function downloadDay1(Request $request)
    {
        $path = public_path('assets/resources/day1.pdf');
        return response()->download($path, 'RTM-Day1-Presentation.pdf');
    }

    public function downloadDay2(Request $request)
    {
        $path = public_path('assets/resources/day2.pdf');
        return response()->download($path, 'RTM-Day2-Presentation.pdf');
    }

    
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof InvalidSignatureException) {
            return response()->view('errors.link-expired', [], 403);
        }

        return parent::render($request, $exception);
    }

    public function resources_success()
    {
        return view('web.event-resources-success');

    }
}
