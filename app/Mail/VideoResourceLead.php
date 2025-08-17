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
    protected $lead, $videoLink, $viewName;

    /**
     * Create a new message instance.
     */
    public function __construct($resource_lead, $viewName = 'emails.video_resources_lead')
    {
        //
        $this->lead = $resource_lead;
        $this->viewName = $viewName;
        // $this->videoLink = $videoLink;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your RTM Video Resource is Ready!',
            from: new Address('noreply@excitepanacea.site', config('app.name'))
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->viewName,
            with: [
                'lead' => $this->lead,
                'videoLink' => $this->videoLink,
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
