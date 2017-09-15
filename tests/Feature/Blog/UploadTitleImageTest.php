<?php


namespace Tests\Feature\Blog;


use Dymantic\Articles\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class UploadTitleImageTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function a_title_image_can_be_posted_to_an_article()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create();

        $response = $this->asLoggedInUser()->post('/admin/articles/' . $article->id . '/title-images', [
            'image' => UploadedFile::fake()->image('testpic.png')
        ]);
        $response->assertStatus(200);

        $this->assertTrue($article->fresh()->hasTitleImage());
    }

    /**
     *@test
     */
    public function a_title_image_can_be_cleared()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create();
        $article->setTitleImage(UploadedFile::fake()->image('testpic.jpg'));

        $response = $this
            ->asLoggedInUser()
            ->json('DELETE', '/admin/articles/' . $article->id . '/title-images/');
        $response->assertStatus(200);

        $this->assertFalse($article->fresh()->hasTitleImage());
    }
}