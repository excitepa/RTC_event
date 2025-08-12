<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ResourceLead extends Mailable
{
    use Queueable, SerializesModels;
    protected $lead, $day1Url, $day2Url;

    /**
     * Create a new message instance.
     */
    public function __construct($resource_lead, $day1Url, $day2Url)
    {
        //
        $this->lead = $resource_lead;
        $this->day1Url = $day1Url;
        $this->day2Url = $day2Url;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'keynote Resource',
            from: new Address('noreply@excitepanacea.site', config('app.name'))
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.resources_lead',
            with: [
                'lead' => $this->lead,
                'day1Url' => $this->day1Url,
                'day2Url' => $this->day2Url,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
