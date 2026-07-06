<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VideoResourceLead extends Mailable
{
    use Queueable, SerializesModels;

    protected $lead;
    protected $viewName;
    protected $day1Url;
    protected $day2Url;

    public function __construct(
        $resource_lead,
        $viewName,
        $day1Url = null,
        $day2Url = null
    ) {
        $this->lead = $resource_lead;
        $this->viewName = $viewName;
        $this->day1Url = $day1Url;
        $this->day2Url = $day2Url;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'RTM Keynote Speech',
            from: new Address('noreply@excitepanacea.site', config('app.name'))
        );
    }

    public function content(): Content
    {
        return new Content(
            view: $this->viewName,
            with: [
                'lead' => $this->lead,
                'day1Url' => $this->day1Url,
                'day2Url' => $this->day2Url,
            ]
        );
    }
}
