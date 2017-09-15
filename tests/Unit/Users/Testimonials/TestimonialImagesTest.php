<?php


namespace Tests\Unit\Testimonials;


use App\Testimonials\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Spatie\MediaLibrary\Media;
use Tests\TestCase;

class TestimonialImagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function an_image_can_be_set_on_a_testimonial()
    {
        $testimonial = factory(Testimonial::class)->create();

        $testimonial->setImage(UploadedFile::fake()->image('testpic.jpg'));

        $this->assertCount(1, $testimonial->getMedia('model-image'));
        $this->assertContains('testpic', $testimonial->getMedia('model-image')->first()->getPath());
    }

    /**
     *@test
     */
    public function setting_the_image_returns_the_media_model()
    {
        $testimonial = factory(Testimonial::class)->create();

        $image = $testimonial->setImage(UploadedFile::fake()->image('testpic.jpg'));

        $this->assertInstanceOf(Media::class, $image);
    }

    /**
     *@test
     */
    public function a_thumb_conversion_is_created_for_the_image()
    {
        $testimonial = factory(Testimonial::class)->create();

        $testimonial->setImage(UploadedFile::fake()->image('testpic.jpg'));

        $this->assertCount(1, $testimonial->getMedia('model-image'));
        $image = $testimonial->getMedia('model-image')->first();
        $thumb_url = $image->getUrl('thumb');
        $full_url = $image->getUrl();

        $this->assertNotEquals($thumb_url, $full_url);
        $this->assertNotNull($thumb_url);
    }

    /**
     *@test
     */
    public function setting_a_second_image_will_overwrite_the_first_image()
    {
        $testimonial = factory(Testimonial::class)->create();

        $testimonial->setImage(UploadedFile::fake()->image('testpic_one.jpg'));
        $testimonial->setImage(UploadedFile::fake()->image('testpic_two.jpg'));

        $this->assertCount(1, $testimonial->getMedia('model-image'));
        $this->assertContains('testpic_two', $testimonial->getMedia('model-image')->first()->getPath());
    }

    /**
     *@test
     */
    public function the_testimonials_image_url_can_be_gotten()
    {
        $testimonial = factory(Testimonial::class)->create();

        $image = $testimonial->setImage(UploadedFile::fake()->image('testpic_one.jpg'));

        $this->assertEquals($image->getUrl(), $testimonial->fresh()->imageUrl());
        $this->assertEquals($image->getUrl('thumb'), $testimonial->fresh()->imageUrl('thumb'));
    }

    /**
     *@test
     */
    public function a_testimonial_has_a_default_image()
    {
        $testimonial = factory(Testimonial::class)->create();
        $this->assertCount(0, $testimonial->getMedia('model-image'));

        $image_src = $testimonial->imageUrl();
        $thumb_src = $testimonial->imageUrl('thumb');

        $this->assertEquals(Testimonial::DEFAULT_IMAGE_SRC, $image_src);
        $this->assertEquals(Testimonial::DEFAULT_IMAGE_SRC, $thumb_src);

    }

    /**
     *@test
     */
    public function a_testimonials_model_image_can_be_cleared()
    {
        $testimonial = factory(Testimonial::class)->create();
        $testimonial->setImage(UploadedFile::fake()->image('testpic_one.jpg'));

        $testimonial->clearModelImage();

        $this->assertCount(0, $testimonial->getMedia('model-image'));
    }

    /**
     *@test
     */
    public function a_testimonial_knows_if_it_has_a_real_image()
    {
        $testimonial = factory(Testimonial::class)->create();
        $testimonial->setImage(UploadedFile::fake()->image('testpic_one.jpg'));

        $this->assertTrue($testimonial->fresh()->hasModelImage());

        $testimonial->clearModelImage();

        $this->assertFalse($testimonial->fresh()->hasModelImage());
    }
}