<?php


namespace Tests\Feature\Testimonials;


use App\Testimonials\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestimonialsUpdateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function an_existing_testimonial_can_be_updated()
    {
        $this->disableExceptionHandling();
        $testimonial = factory(Testimonial::class)->create([
            'client' => 'Original client',
            'body'   => 'Original body'
        ]);

        $response = $this->asLoggedInUser()
                         ->json('POST', '/admin/testimonials/' . $testimonial->id, [
                             'client' => 'New client',
                             'body'   => 'New body'
                         ]);
        $response->assertStatus(200);

        $this->assertDatabaseHas('testimonials', [
            'id'     => $testimonial->id,
            'client' => 'New client',
            'body'   => 'New body'
        ]);
    }

    /**
     * @test
     */
    public function updating_a_testimonial_successfully_responds_with_the_updated_model()
    {
        $this->disableExceptionHandling();
        $testimonial = factory(Testimonial::class)->create([
            'client' => 'Original client',
            'body'   => 'Original body'
        ]);

        $response = $this->asLoggedInUser()
                         ->json('POST', '/admin/testimonials/' . $testimonial->id, [
                             'client' => 'New client',
                             'body'   => 'New body'
                         ]);
        $response->assertStatus(200);

        $response->assertJson([
            'id'     => $testimonial->id,
            'client' => 'New client',
            'body'   => 'New body'
        ]);
    }
}