<?php

namespace App\Http\Controllers\web;

use App\Models\Newsletter;
use App\Rules\EventRegister;
use App\Mail\InquiryMail;
use App\Mail\ZeptoMailTest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ResourceLead as MailResourceLead;
use App\Mail\VideoResourceLead;
use App\Http\Controllers\Controller;
use App\Mail\SponsorInquiry as MailSponsorInquiry;
use App\Mail\VIPMail;
use App\Mail\DelegateMail;
use App\Models\Attendees;
use App\Models\Contact;
use App\Models\ResourceLead;
use App\Mail\Contact as MailContact;
use App\Models\SponsorInquiry;
use App\Models\VIP;
use App\Models\Delegate;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Illuminate\Support\Facades\Log;
use Egulias\EmailValidator\EmailValidator;
use Illuminate\Validation\Rule;
use Egulias\EmailValidator\Validation\MultipleValidationWithAnd;
use Egulias\EmailValidator\Validation\RFCValidation;
use Egulias\EmailValidator\Validation\DNSCheckValidation;

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

            return redirect()->back()->with('success', "You have successfully subscribed for updates.");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
            
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }

    public function inquiry(Request $request)
    {
        try {

            try {

                $request->validate([
                    'full_name' => 'bail|required|string',
                    'company' => 'bail|required|string',
                    'email' => 'bail|required|email',
                    'phone' => 'bail|required|regex:/^[0-9]+$/',
                    'package' => 'bail|required|string',
                    'message' => 'bail|nullable',
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
            $sponsor_inquiry->company = $request->company;
            $sponsor_inquiry->email = $request->email;
            $sponsor_inquiry->phone = $request->phone;
            $sponsor_inquiry->package = $request->package;
            $sponsor_inquiry->message = $request->message;
            $sponsor_inquiry->save();
            
            try {
                Mail::to($sponsor_inquiry->email)->send(new InquiryMail($sponsor_inquiry));
                Mail::to(['padeniyi@excitepanacea.com'])->send(new MailSponsorInquiry($sponsor_inquiry));

                // if (count(Mail::failures()) > 0) {
                //     Log::error('Mail failed to send', Mail::failures());
                // } else {
                //     Log::info('Mail sent successfully to ' . $sponsor_inquiry->email);
                // }

            } catch (\Exception $e) {
                Log::error("Email sending exception: " . $e->getMessage());
            }

            return redirect()->route('inquiry.successful')->with("success", "Thank you for reaching out");
            // return redirect()->back()->with('success', "Your request has been submitted successfully.");
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
    //         try {
    //             $request->validate([
    //                 // 'full_name' => 'bail|required|string',
    //                 'full_name' => ['required', 'regex:/^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$/'],
    //                 // 'email' => 'bail|required|email|unique:attendees,email',
    //                 'email' => [
    //                     'bail',
    //                     'required',
    //                     'email',
    //                     Rule::unique('attendees')->where(function ($query) {
    //                         return $query->where('event_year', date('Y'));
    //                     }),
    //                 ],
    //                 'phone' => 'bail|required|regex:/^[0-9]+$/',
    //                 'company' => 'bail|required|string',
    //                 'industry' => 'bail|required|string|not_in:Choose your industry',
    //                 'attendance_days' => 'required|array', // Ensure at least one day is selected
    //                 'attendance_days.*' => 'in:Day 1,Day 2', // Validate individual values in the array
    //                 'job_title' => 'bail|required|string',
    //                 'country' => 'bail|string',
    //                 'about_webinar' => 'bail|required|string|not_in:How did you hear about the event',
    //                 'message' => 'bail|string',
    //                 'g-recaptcha-response' => ['required', new EventRegister],
    //             ]);
    //         } catch (ValidationException $e) {
    //             if ($e->validator->errors()->has('g-recaptcha-response')) {
    //                 return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
    //                             ->withInput();
    //             }
    //             return back()->withErrors($e->validator)->withInput()->withFragment('registertestForm');
    //         }

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
    //             $attendee->event_year = date('Y');
    //             $attendee->attendance_days = json_encode($request->attendance_days);
    //             $attendee->save();
    //             // dd($attendee);

    //             try {
    //                 Mail::to($attendee->email)->send(new ZeptoMailTest($attendee));
    //             } catch (\Exception $e) {
    //                 Log::error("Email sending failed: " . $e->getMessage());
    //             }

    //             return redirect()->route('event.registered')->with("success", "Your have successfully regsitered!");
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
            try {
                // $request->validate([
                //     'full_name' => ['required', 'regex:/^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$/'],
                //     'email' => [
                //         'bail',
                //         'required',
                //         'email',
                //         Rule::unique('attendees')->where(function ($query) {
                //             return $query->where('event_year', date('Y'));
                //         }),
                //     ],
                //     'phone' => 'bail|required|regex:/^[0-9]+$/',
                //     'company' => 'bail|required|string',
                //     'industry' => 'bail|required|string|not_in:Choose your industry',
                //     'attendance_days' => 'required|array',
                //     'attendance_days.*' => 'in:Day 1,Day 2',
                //     'job_title' => 'bail|required|string',
                //     'country' => 'bail|string',
                //     'about_webinar' => 'bail|required|string|not_in:How did you hear about the event',
                //     'message' => 'bail|string',
                //     'g-recaptcha-response' => ['required', new EventRegister],

                // ]);
                // dd($request);
                $request->validate([
                    'full_name' => ['required', 'string', 'min:2'],
                    
                    // 'email' => [
                    //     'bail',
                    //     'required',
                    //     'email',
                    //     Rule::unique('attendees')->where(function ($query) {
                    //         return $query->where('event_year', date('Y'));
                    //     }),
                    // ],
                    'email' => [
                        'bail',
                        'required',
                        'email',
                        function ($attribute, $value, $fail) {
                            $blockedDomains = [
                                'gmail.com',
                                'hotmail.com',
                                'outlook.com',
                                'live.com',
                                'msn.com',
                                'yahoo.com',
                                'ymail.com',
                                'rocketmail.com',
                                'aol.com',
                                'icloud.com',
                                'me.com',
                                'mac.com',
                                'protonmail.com',
                                'zoho.com',
                                'gmx.com',
                                'mail.com'
                            ];
                    
                            $domain = strtolower(substr(strrchr($value, "@"), 1));
                    
                            if (in_array($domain, $blockedDomains)) {
                                $fail('Please use your company email address.');
                            }
                        },
                        Rule::unique('attendees')->where(function ($query) {
                            return $query->where('event_year', date('Y'));
                        }),
                    ],

                    'phone' => ['required', 'regex:/^\+?[0-9]{7,15}$/'],

                    'company' => ['required', 'string', 'min:2'],

                    'country' => ['required', 'string'],

                    'industry' => ['required', 'string', 'not_in:Industry'],

                    'company_size' => ['required', 'string'],

                    'job_title' => ['required', 'string'],

                    'seniority_level' => ['required', 'string', 'not_in:Seniority level'],

                    'attendance_days' => ['required', 'array'],
                    'attendance_days.*' => ['in:Day 1,Day 2'],

                    'about_webinar' => ['required', 'string', 'not_in:How did you hear about the event'],

                    'industry_other' => 'nullable|required_if:industry,Other|string',
                    'seniority_other' => 'nullable|required_if:seniority_level,Others|string',
                    'about_webinar_other' => 'nullable|required_if:about_webinar,Others|string',

                    'g-recaptcha-response' => ['required', new EventRegister],
                ]);

            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('g-recaptcha-response')) {
                    return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
                                ->withInput();
                }
                return back()->withErrors($e->validator)->withInput()->withFragment('registertestForm');
            }

            $industry = $request->industry === 'Other'
                ? $request->industry_other
                : $request->industry;

            $seniority = $request->seniority_level === 'Others'
                ? $request->seniority_other
                : $request->seniority_level;

            $about = $request->about_webinar === 'Others'
                ? $request->about_webinar_other
                : $request->about_webinar;

                $attendee = new Attendees();

                $attendee->full_name = $request->full_name;
                $attendee->email = $request->email;
                $attendee->phone = $request->phone;
                $attendee->company = $request->company;
                $attendee->industry = $industry;
                $attendee->company_size = $request->company_size;
                $attendee->job_title = $request->job_title;
                $attendee->seniority_level = $seniority;
                $attendee->event_year = date('Y');
                $attendee->country = $request->country;
                $attendee->about_webinar = $about;

                $attendee->attendance_days = json_encode($request->attendance_days);

                $attendee->save();

                try {
                    Mail::to($attendee->email)->send(new ZeptoMailTest($attendee));
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('event.registered')->with("success", "Your have successfully regsitered!");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }
    
    // public function resources_lead(Request $request)
    // {
    //     try {
    //         // dd($request);
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
    //                 'download.day1', now()->addMinutes(60), ['email' => $request->email]
    //             );

    //             $day2Url = URL::temporarySignedRoute(
    //                 'download.day2', now()->addMinutes(60), ['email' => $request->email]
    //             );

    //             Mail::to($resource_lead->email)->send(new MailResourceLead($resource_lead, $day1Url, $day2Url));
    //         } catch (\Exception $e) {
    //             Log::error("Email sending failed: " . $e->getMessage());
    //         }
    //         // dd($contact);

    //         return redirect()->route('resources.success')->with('success', "You have successfully submitted a request.");
    //         // return redirect()->back()->with([
    //         //     'success', "You have successfully submitted a request",
    //         //     'download_url' => $request->presentation_url
    //         // ]);
    //         // return response()->download(public_path($request->presentation_url));
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
                'phone' => 'bail|required|string',
                'g-recaptcha-response' => ['required', new EventRegister],
                // 'resource_type' => 'required|in:download,video,video1',
                'resource_type' => 'required',
                'session_type' => 'nullable|string',
                'video_url' => 'nullable|url',
            ]);
            
            // $resource_lead = ResourceLead::where('email', $request->email)->first();

            $lead = ResourceLead::create([
                'full_name'    => $request->full_name,
                'email'        => $request->email,
                'company'      => $request->company,
                'role'         => $request->role,
                'phone'        => $request->phone,
                // 'resource_type'=> $request->resource_type,
                // 'session_type' => $request->session_type,
                'lead_source'  => $request->lead_source,
            ]);

            if ($request->resource_type === 'download') {
                $day1Url = URL::temporarySignedRoute('download.day1', now()->addMinutes(60), ['email' => $request->email]);
                $day2Url = URL::temporarySignedRoute('download.day2', now()->addMinutes(60), ['email' => $request->email]);

                try {
                    Mail::to($lead->email)->send(new MailResourceLead($lead, $day1Url, $day2Url));
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('resources.success')->with('success', "Presentation links sent to your email.");
                
            } elseif ($request->resource_type === 'sitdown') {

                try {
                    Mail::to($lead->email)->send(
                        new VideoResourceLead($lead, 'emails.sit_down_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            
            } elseif ($request->resource_type === 'video1') {

                try {
                    Mail::to($lead->email)->send(
                        new VideoResourceLead($lead, 'emails.video1_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }
            
            elseif ($request->resource_type === 'video2') {

                try {
                    Mail::to($lead->email)->send(
                        new VideoResourceLead($lead, 'emails.video2_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }
            
            elseif ($request->resource_type === 'video3') {

                try {
                    Mail::to($lead->email)->send(
                        new VideoResourceLead($lead, 'emails.video3_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }
            
            elseif ($request->resource_type === 'video5') {

                try {
                    Mail::to($lead->email)->send(
                        new VideoResourceLead($lead, 'emails.video5_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }
            
            elseif ($request->resource_type === 'video6') {

                try {
                    Mail::to($lead->email)->send(
                        new VideoResourceLead($lead, 'emails.video6_resources_lead')
                    );
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('video.resources.success')
                                ->with('success', "A link to the session has been sent to your email.");
            }
            
            elseif ($request->resource_type === 'keynote1') {

                try {
                    Mail::to($lead->email)->send(
                        new VideoResourceLead($lead, 'emails.keynote1_resources_lead')
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
    
    public function vip_submit(Request $request)
    {
        // dd($request);
        try {
            try {
                $request->validate([
                    // 'full_name' => 'bail|required|string',
                    'full_name' => ['required', 'regex:/^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$/'],
                    'email' => 'bail|required|email|unique:vip,email',
                    'company' => 'bail|required|string',
                    'job_title' => 'bail|required|string',
                    'attendance_days' => 'required|array',
                    'attendance_days.*' => 'in:Day 1,Day 2,Day 1 and 2',
                    'g-recaptcha-response' => ['required', new EventRegister],
                ]);

            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('g-recaptcha-response')) {
                    return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
                                ->withInput();
                }
                return back()->withErrors($e->validator)->withInput()->withFragment('vipForm');
            }

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
            // if (isset($emailValidation['is_valid_format']['value']) && $emailValidation['is_valid_format']['value'] === true) {
                // Email is valid, proceed with registration
                $vip = new VIP();
                $vip->full_name = $request->full_name;
                $vip->email = $request->email;
                $vip->company = $request->company;
                $vip->job_title = $request->job_title;
                $vip->attendance_days = json_encode($request->attendance_days);
                $vip->save();

                try {
                    Mail::to($vip->email)->send(new VIPMail($vip));
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('vip.registered')->with("success", "Your have successfully confirmed!");

                // return redirect()->back()->with('success', "You have successfully registered for the webinar.");
            // } else {
            //     // Invalid email format
            //     return back()->with('danger', "Invalid email address, please try again.");
            // }
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }


    }
    
    public function delegate_submit(Request $request)
    {
        // dd($request);
        try {
            try {
                $request->validate([
                    // 'full_name' => 'bail|required|string',
                    'full_name' => ['required', 'regex:/^[A-Za-z]{2,}\s+[A-Za-z]{2,}.*$/'],
                    'email' => 'bail|required|email|unique:vip,email',
                    'company' => 'bail|required|string',
                    'job_title' => 'bail|required|string',
                    'attendance_days' => 'required|array',
                    'attendance_days.*' => 'in:Day 1,Day 2,Day 1 and 2',
                    'g-recaptcha-response' => ['required', new EventRegister],
                ]);

            } catch (ValidationException $e) {
                if ($e->validator->errors()->has('g-recaptcha-response')) {
                    return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed. Please try again.'])
                                ->withInput();
                }
                return back()->withErrors($e->validator)->withInput()->withFragment('vipForm');
            }

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
            // if (isset($emailValidation['is_valid_format']['value']) && $emailValidation['is_valid_format']['value'] === true) {
                // Email is valid, proceed with registration
                $delegate = new Delegate();
                $delegate->full_name = $request->full_name;
                $delegate->email = $request->email;
                $delegate->company = $request->company;
                $delegate->job_title = $request->job_title;
                $delegate->attendance_days = json_encode($request->attendance_days);
                $delegate->save();

                try {
                    Mail::to($delegate->email)->send(new DelegateMail($delegate));
                } catch (\Exception $e) {
                    Log::error("Email sending failed: " . $e->getMessage());
                }

                return redirect()->route('delegate.registered')->with("success", "Your have successfully confirmed!");

                // return redirect()->back()->with('success', "You have successfully registered for the webinar.");
            // } else {
            //     // Invalid email format
            //     return back()->with('danger', "Invalid email address, please try again.");
            // }
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }


    }
    
    public function eventRegistered($year = null)
    {
        return view('web.event-success', compact('year'));
    }
    
    public function inquirySuccessful($year = null)
    {
        return view('web.inquiry-successful', compact('year'));
    }
    
    public function vipRegistered($year = null)
    {
        return view('web.vip-success', compact('year'));
    }
    
    public function delegateRegistered($year = null)
    {
        return view('web.delegate-success', compact('year'));
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
            //dd($contact);

            return redirect()->back()->with('success', "You have successfully submitted a request");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
            
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }
    
    public function downloadDay1(Request $request)
    {
        $path = public_path('assets/resources/margins_of_trust_the_informal_economy_inclusion_and_the_future_of_west_african_commerce.pdf');
        return response()->download($path, 'Margins of Trust: The Informal Economy, Inclusion and the Future of West African Commerce.pdf');
    }

    public function downloadDay2(Request $request)
    {
        $path = public_path("assets/resources/the_sovereignty_of_scale_how_mastering_integrated_supply_chains_creates_regional_dominance_in_fmcg.pdf");
        return response()->download($path, "The Sovereignty of Scale: How Mastering Integrated Supply Chains Creates Regional Dominance in FMCG.pdf");
    }
    
    public function resources_success($year = null)
    {
        return view('web.event-resources-success', compact('year'));

    }

    
    // public function render($request, Throwable $exception)
    // {
    //     if ($exception instanceof InvalidSignatureException) {
    //         return response()->view('errors.link-expired', [], 403);
    //     }

    //     return parent::render($request, $exception);
    // }
}
