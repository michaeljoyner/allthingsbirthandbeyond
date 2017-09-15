<?php


namespace Tests\Feature\Blog;


use Dymantic\Articles\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class UploadArticleImagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function an_image_can_be_uploaded_and_attached_to_an_article()
    {
        $article = factory(Article::class)->create();

        $response = $this->asLoggedInUser()->post('/admin/articles/' . $article->id . '/images', [
            'image' => UploadedFile::fake()->image('testpic.jpg')
        ]);
        $response->assertStatus(200);

        $this->assertTrue($article->fresh()->hasMedia(Article::ARTICLE_IMAGES_COLLECTION));

        $this->assertArrayHasKey('location', $response->decodeResponseJson());

        $article->clearMediaCollection();
    }
}