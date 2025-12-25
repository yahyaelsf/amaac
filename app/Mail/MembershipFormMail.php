<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
class MembershipFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;
    public $uploadedFiles ;
    public function __construct($data, $uploadedFiles  = [])
    {
        $this->data = $data;
        $this->uploadedFiles  = $uploadedFiles ;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Membership Application',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.membership-form',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
     public function attachments(): array
    {
        $attachments = [];

        foreach ($this->uploadedFiles as $file) {
            $attachments[] = Attachment::fromPath(
                $file->getRealPath()
            )->as(
                $file->getClientOriginalName()
            );
        }

        return $attachments;
    }
}
