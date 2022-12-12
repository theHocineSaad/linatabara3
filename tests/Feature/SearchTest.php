<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Wilaya;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_cannot_search_without_blood_group()
    {
        $response = $this->get('/donors/search');
        $response->assertSessionHasErrors();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_can_search_with_blood_group_only()
    {
        $this->seed();
        $user = User::factory(1)->create()->first();
        $response = $this->get('/donors/search?blood_group=' . $user->blood_group_id);
        $response->assertSeeText($user->phone);
    }
}
