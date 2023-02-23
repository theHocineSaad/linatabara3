<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class FilterDonorsTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    /**
     * @test
     *
     * @return void
     */
    public function it_get_all_donors()
    {
        $phoneOne = '123123123';
        User::factory()->create(['phone' => $phoneOne]);
        $phoneTwo = '321321321';
        User::factory()->create(['phone' => $phoneTwo]);

        $response = $this->get('/donors');

        $response->assertSee($phoneOne);
        $response->assertSee($phoneTwo);
    }

}
