<?php


namespace Tests\Feature\Testimonials;


use App\Testimonials\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteTestimonialsTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function an_existing_testimonial_can_be_deleted()
    {
        $this->disableExceptionHandling();
        $testimonial = factory(Testimonial::class)->create();

        $response = $this->asLoggedInUser()->json('DELETE', '/admin/testimonials/' . $testimonial->id);
        $response->assertStatus(200);

        $this->assertDatabaseMissing('testimonials', ['id' => $testimonial->id]);
    }
}