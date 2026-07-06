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

    public function __construct($resource_lead, $viewName, $day1Url = null)
    {
        $this->lead = $resource_lead;
        $this->viewName = $viewName;
        $this->day1Url = $day1Url;
    }

    public function content(): Content
    {
        return new Content(
            view: $this->viewName,
            with: [
                'lead' => $this->lead,
                'day1Url' => $this->day1Url,
            ]
        );
    }
}
