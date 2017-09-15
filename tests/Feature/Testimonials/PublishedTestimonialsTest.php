<?php


namespace Tests\Feature\Testimonials;


use App\Testimonials\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublishedTestimonialsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_published_testimonial_can_be_created_from_an_existing_testimonial()
    {
        $this->disableExceptionHandling();
        $testimonial = factory(Testimonial::class)->create(['published' => false]);

        $response = $this->asLoggedInUser()
                         ->json('POST', '/admin/published-testimonials', [
                             'testimonial_id' => $testimonial->id
                         ]);
        $response->assertStatus(200);

        $this->assertDatabaseHas('testimonials', [
            'id'        => $testimonial->id,
            'published' => true
        ]);
    }

    /**
     *@test
     */
    public function a_published_testimonial_can_be_retracted()
    {
        $this->disableExceptionHandling();
        $testimonial = factory(Testimonial::class)->create(['published' => true]);

        $response = $this->asLoggedInUser()
                         ->json('DELETE', '/admin/published-testimonials/' . $testimonial->id);
        $response->assertStatus(200);

        $this->assertDatabaseHas('testimonials', [
            'id'        => $testimonial->id,
            'published' => false
        ]);
    }
}