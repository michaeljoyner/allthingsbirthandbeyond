<?php

namespace Tests\Unit\Testimonials;

use App\Testimonials\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestimonialsTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function a_testimonial_can_be_published()
    {
        $testimonial = factory(Testimonial::class)->create(['published' => false]);

        $testimonial->publish();

        $this->assertTrue($testimonial->fresh()->published);
    }

    /**
     *@test
     */
    public function a_testimonial_can_be_retracted()
    {
        $testimonial = factory(Testimonial::class)->create(['published' => true]);

        $testimonial->retract();

        $this->assertFalse($testimonial->fresh()->published);
    }

    /**
     *@test
     */
    public function a_testimonial_can_be_presented_as_a_jsonable_array()
    {
        $testimonial = factory(Testimonial::class)->create([
            'client' => 'Jack and Jill Test',
            'body' => 'Test body of testimonial',
            'published' => true
        ]);

        $expected = [
            'id' => $testimonial->id,
            'client' => 'Jack and Jill Test',
            'body' => 'Test body of testimonial',
            'published' => true,
            'thumb_img' => Testimonial::DEFAULT_IMAGE_SRC
        ];

        $this->assertEquals($expected, $testimonial->toJsonableArray());
    }
}