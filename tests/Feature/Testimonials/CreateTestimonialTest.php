<?php

namespace Tests\Feature\Testimonials;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateTestimonialTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_new_testimonial_can_be_created()
    {
        $this->disableExceptionHandling();
        $testimonial_data = [
            'client' => 'Joe and Jane Soap',
            'body'   => 'This is test testimonial'
        ];

        $response = $this->asLoggedInUser()->json('POST', '/admin/testimonials', $testimonial_data);
        $response->assertStatus(201);

        $this->assertDatabaseHas('testimonials', $testimonial_data);
    }

    /**
     *@test
     */
    public function a_valid_testimonial_requires_a_client_name()
    {
        $testimonial_data = [
            'body'   => 'This is test testimonial'
        ];

        $response = $this->asLoggedInUser()->json('POST', '/admin/testimonials', $testimonial_data);
        $response->assertStatus(422);
        $this->assertArrayHasKey('client', $response->json()['errors']);

        $this->assertDatabaseMissing('testimonials', $testimonial_data);
    }

    /**
     *@test
     */
    public function a_valid_testimonial_requires_a_body()
    {
        $testimonial_data = [
            'client' => 'Jane and Joe Soap'
        ];

        $response = $this->asLoggedInUser()->json('POST', '/admin/testimonials', $testimonial_data);
        $response->assertStatus(422);
        $this->assertArrayHasKey('body', $response->json()['errors']);

        $this->assertDatabaseMissing('testimonials', $testimonial_data);
    }

    /**
     *@test
     */
    public function a_valid_testimonial_has_a_client_name_under_255_characters()
    {
        $testimonial_data = [
            'client' => str_repeat('x', 300),
            'body'   => 'This is test testimonial'
        ];

        $response = $this->asLoggedInUser()->json('POST', '/admin/testimonials', $testimonial_data);
        $response->assertStatus(422);
        $this->assertArrayHasKey('client', $response->json()['errors']);

        $this->assertDatabaseMissing('testimonials', $testimonial_data);
    }
}