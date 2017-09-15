<?php


namespace Tests\Feature\Blog;


use Dymantic\Articles\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdatingArticlesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function an_articles_info_can_be_updated()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create([
            'title'       => 'OLD TITLE',
            'description' => 'OLD DESCRIPTION',
            'intro'       => 'OLD INTRO'
        ]);

        $response = $this->asLoggedInUser()->json('POST', '/admin/articles/' . $article->id, [
            'title'       => 'NEW TITLE',
            'description' => 'NEW DESCRIPTION',
            'intro'       => 'NEW INTRO'
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'title'       => 'NEW TITLE',
            'description' => 'NEW DESCRIPTION',
            'intro'       => 'NEW INTRO'
        ]);
    }

    /**
     * @test
     */
    public function updating_an_article_still_requires_a_title()
    {
        $article = factory(Article::class)->create([
            'title'       => 'OLD TITLE',
        ]);

        $response = $this->asLoggedInUser()->json('POST', '/admin/articles/' . $article->id, [
            'description' => 'NEW DESCRIPTION',
            'intro'       => 'NEW INTRO'
        ]);

        $response->assertStatus(422);
        $this->assertArrayHasKey('title', $response->decodeResponseJson()['errors']);

        $this->assertDatabaseHas('articles', ['id' => $article->id, 'title' => 'OLD TITLE']);
    }

    /**
     *@test
     */
    public function updating_an_article_returns_its_data()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create([
            'title'       => 'OLD TITLE',
            'description' => 'OLD DESCRIPTION',
            'intro'       => 'OLD INTRO'
        ]);

        $response = $this->asLoggedInUser()->json('POST', '/admin/articles/' . $article->id, [
            'title'       => 'NEW TITLE',
            'description' => 'NEW DESCRIPTION',
            'intro'       => 'NEW INTRO'
        ]);

        $response->assertStatus(200);

        $this->assertEquals($article->fresh()->toJsonableArray(), $response->decodeResponseJson());
    }

    /**
     *@test
     */
    public function an_articles_body_may_be_updated()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create(['body' => 'OLD BODY']);

        $response = $this->asLoggedInUser()->json('POST', '/admin/articles/' . $article->id . '/body', [
            'body' => 'NEW BODY'
        ]);
        $response->assertStatus(200);

        $this->assertDatabaseHas('articles', [
            'id' => $article->id,
            'body' => 'NEW BODY'
        ]);
    }

    /**
     *@test
     */
    public function updating_the_article_body_returns_the_new_body()
    {
        $this->disableExceptionHandling();
        $article = factory(Article::class)->create(['body' => 'OLD BODY']);

        $response = $this->asLoggedInUser()->json('POST', '/admin/articles/' . $article->id . '/body', [
            'body' => 'NEW BODY'
        ]);
        $response->assertStatus(200);
        $this->assertEquals(['body' => 'NEW BODY'], $response->decodeResponseJson());
    }
}