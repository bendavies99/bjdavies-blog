<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use App\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostTests extends TestCase
{
    use DatabaseMigrations;
    /**
     * Test to see if users can see other posts
     * @test
     * @return void
     */
    public function canUsersSeeBlogPosts()
    {
        $title = "How To: Cook";
        $user = factory(User::class)->create(['name' => 'Ben Davies', 'super' => true]);
        $post = factory(Post::class)->make(['slug' => 'how-to', 'title' => $title]);

        $this->assertTrue($user->can('create', Post::class));
        $user->posts()->save($post);

        $response = $this->get('/post/how-to');
        $response->assertViewIs('post.show');
        $response->assertViewHas('post');
        $response->assertSeeText($title);
        $response->assertSeeText($post->body);
        $response->assertSeeText($user->name);
    }
}
