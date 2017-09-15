<?php


namespace Tests\Feature\Testimonials;


use App\Testimonials\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class TestimonialImageUploadTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function an_image_can_be_uploaded_and_attached_to_a_testimonial()
    {
        $this->disableExceptionHandling();

        $testimonial = factory(Testimonial::class)->create();

        $response = $this->asLoggedInUser()->post('/admin/testimonials/' . $testimonial->id . '/image', [
            'image' => UploadedFile::fake()->image('testpic.jpg')
        ]);
        $response->assertStatus(200);

        $this->assertCount(1, $testimonial->fresh()->getMedia('model-image'));
    }

    /**
     *@test
     */
    public function a_testimonial_image_can_be_deleted()
    {
        $this->disableExceptionHandling();

        $testimonial = factory(Testimonial::class)->create();
        $testimonial->setImage(UploadedFile::fake()->image('testpic.jpg'));

        $response = $this->asLoggedInUser()
                         ->json('DELETE', '/admin/testimonials/' . $testimonial->id . '/image');
        $response->assertStatus(200);

        $this->assertCount(0, $testimonial->fresh()->getMedia('model-image'));
    }
}