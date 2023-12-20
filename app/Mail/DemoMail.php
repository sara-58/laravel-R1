<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data =[];


    /**
     * Create a new message instance.
     */
    public function __construct($data = [])
    {
        $this->data= $data;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(Request $request): Envelope
    {
        return new Envelope(
            from: new Address($request->userEmail,$request->userName),
            subject: $this->data['title'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(Request $request): Content
    {
        return new Content(
            markdown: 'emails.demo',
            with: [
                'content' => $request->message
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

    public function postEmail(Request $request)
    {


        $data['userName'] = $request->userName; // Replace with actual user name
        $data['userEmail'] = $request->userEmail;
        $data['message'] = $request->message;
        return view('mail.myTemplate');

        
        // Mail::to('sara@example.com')->send(new DemoMail($userName, $userEmail, $message));
        // Mail::to('sara@example.com')->send(new App\Mail\DemoMail);

        //     Route::get('ticket/{name?}/{num?}', function ($name, $num = 0) {
//         $msg = 'Weclome ' . $name;
//         if ($num > 0) {
//             return $msg . ' <br>You have reserved ' . $num . ' ticket';
//         }
//         return $msg;
//     });

    }
}
