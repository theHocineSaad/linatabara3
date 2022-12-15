<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class SearchTest extends TestCase
{

    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /**
     * @test
     * @return void
     */
    public function it_cannot_search_without_blood_group()
    {
        $response = $this->get('/donors/search');
        $response->assertSessionHasErrors();
    }

    /**
     * @test
     * @return void
     */
    public function it_can_search_with_blood_group_only()
    {
        $user = User::factory(1)->create()->first();
        $response = $this->get("/donors/search?blood_group={$user->blood_group_id}");
        $response->assertSeeText($user->phone);
    }

    /**
     * @test
     * @return void
     */
    public function it_can_search_with_blood_group_and_wilaya()
    {
        $user = User::factory(1)->create([
            'wilaya_id' => 1
        ])->first();
        $response = $this->get("/donors/search?blood_group={$user->blood_group_id}&wilaya={$user->wilaya_id}");
        $response->assertSeeText($user->phone);
    }

    /**
     * @test
     * @return void
     */
    public function it_can_search_with_blood_group_and_wilaya_and_daira()
    {
        $user = User::factory(1)->create([
            'wilaya_id' => 1,
            'daira_id' => 1
        ])->first();
        $response = $this->get("/donors/search?blood_group={$user->blood_group_id}&wilaya={$user->wilaya_id}&daira={$user->daira_id}");
        $response->assertSeeText($user->phone);
    }

    /**
     *
     * @return void
     */
    public function it_cannot_search_with_daira_and_without_wilaya()
    {
        // This test cant success now because for now if there is no wilaya_id it will search only by blood_group ignoring daira_id
    }
}
