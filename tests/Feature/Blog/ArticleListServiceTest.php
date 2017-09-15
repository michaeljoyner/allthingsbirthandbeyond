<?php


namespace Tests\Feature\Blog;


use Dymantic\Articles\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleListServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_paginated_list_of_all_articles_can_be_fetched()
    {
        $this->disableExceptionHandling();
        $articles = factory(Article::class, 44)->create();

        $response = $this->asLoggedInUser()->json('GET', '/admin/services/articles');
        $response->assertStatus(200);

        $fetched_articles = $response->decodeResponseJson();

        $this->assertCount(15, $fetched_articles['articles']);

        $this->assertCount(3, $fetched_articles['page_links']);
        $this->assertEquals(1, $fetched_articles['current_page']);
    }
}