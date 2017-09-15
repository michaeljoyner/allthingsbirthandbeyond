<?php


namespace Tests\Feature\Blog;


use Dymantic\Articles\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class PublishingArticlesTest extends TestCase
{
    use RefreshDatabase;

    /**
     *@test
     */
    public function an_article_can_be_published()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create(['is_draft' => true, 'published_on' => null]);

        $response = $this->asLoggedInUser()->json('POST', '/admin/published-articles', [
            'id' => $article->id
        ]);
        $response->assertStatus(200);

        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'is_draft' => false,
        ]);
    }

    /**
     * @test
     */
    public function an_article_can_be_published_for_a_future_date()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create(['is_draft' => true, 'published_on' => null]);

        $response = $this->asLoggedInUser()->json('POST', '/admin/published-articles', [
            'id' => $article->id,
            'publish_date' => Carbon::parse('+3 days')->format('Y-m-d')
        ]);
        $response->assertStatus(200);

        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'is_draft' => false,
        ]);

        $this->assertTrue($article->fresh()->published_on->isSameDay(Carbon::parse('+3 days')));
    }

    /**
     *@test
     */
    public function an_article_can_be_retracted()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create(['is_draft' => false, 'published_on' => Carbon::parse('-2 days')]);

        $response = $this->asLoggedInUser()->json('DELETE', '/admin/published-articles/' . $article->id);
        $response->assertStatus(200);

        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'is_draft' => true,
        ]);
    }
}