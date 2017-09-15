<?php


namespace Tests\Feature\Blog;


use Dymantic\Articles\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeletingArticlesTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function an_article_can_be_deleted()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create();

        $response = $this->asLoggedInUser()->json('DELETE', '/admin/articles/' . $article->id);
        $response->assertStatus(302);
        $response->assertRedirect('/admin/articles');

        $this->assertDatabaseMissing('articles', ['id' => $article->id]);
    }
}