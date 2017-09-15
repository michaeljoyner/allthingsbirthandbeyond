<?php

namespace Tests\Feature\Blog;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateArticlesTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function a_new_article_can_be_created()
    {
        $this->disableExceptionHandling();

        $response = $this->asLoggedInUser()->post('/admin/articles/', [
            'title' => 'TEST ARTICLE',
            'description' => 'TEST DESCRIPTION',
            'intro' => 'TEST INTRO'
        ]);
        $response->assertStatus(302);
        $response->assertSessionMissing('errors');

        $this->assertDatabaseHas('articles', [
            'title' => 'TEST ARTICLE',
            'description' => 'TEST DESCRIPTION',
            'intro' => 'TEST INTRO'
        ]);
    }

    /**
     *@test
     */
    public function a_title_is_required_to_create_an_article()
    {
        $response = $this->asLoggedInUser()->post('/admin/articles/', [
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('title');
    }
}