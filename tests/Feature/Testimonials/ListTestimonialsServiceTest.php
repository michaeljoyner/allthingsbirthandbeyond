<?php


namespace Tests\Feature\Testimonials;


use App\Testimonials\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListTestimonialsServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_list_of_all_testimonials_can_be_fetched()
    {
        $this->disableExceptionHandling();
        $testimonials = factory(Testimonial::class, 10)->create();

        $response = $this->asLoggedInUser()->json('GET', '/admin/services/testimonials');
        $response->assertStatus(200);

        $fetched_testimonials = $response->decodeResponseJson();

        $this->assertCount(10, $fetched_testimonials);

        $testimonials->each(function($testimonial) use ($fetched_testimonials) {
            $this->assertContains($testimonial->toJsonableArray(), $fetched_testimonials);
        });
    }
}