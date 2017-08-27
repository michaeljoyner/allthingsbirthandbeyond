<?php


namespace Tests\Feature;


use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * @test
     */
    public function an_email_is_sent_on_successful_submission_of_the_contact_form()
    {
        $this->disableExceptionHandling();
        Mail::fake();

        $response = $this->post('/contact', [
            'name'    => 'TEST NAME',
            'email'   => 'test@example.com',
            'phone'   => 'TEST PHONE',
            'enquiry' => 'TEST MESSAGE'
        ]);

        $response->assertStatus(302);
        $response->assertSessionMissing('errors');

        Mail::assertSent(ContactMessage::class, function ($mail) {
            return
                $mail->name === 'TEST NAME' &&
                $mail->email === 'test@example.com' &&
                $mail->phone === 'TEST PHONE' &&
                $mail->enquiry === 'TEST MESSAGE';
        });
    }
}