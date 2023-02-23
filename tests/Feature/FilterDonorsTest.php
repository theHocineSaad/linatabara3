<?php

namespace Tests\Feature;

use App\Models\BloodGroup;
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

    /**
     * @test
     */
    public function it_get_all_donors_filtered_by_blood_group(): void
    {
        $bloodGroupOne = BloodGroup::where('id', 1)->first();
        $userOne = User::factory()->create(['blood_group_id' => $bloodGroupOne->id]);

        $bloodGroupTwo = BloodGroup::where('id', 2)->first();
        $userTwo = User::factory()->create(['blood_group_id' => $bloodGroupTwo->id]);


        $response = $this->get("/donors?blood_group={$bloodGroupOne->id}");

        $response->assertSee($userOne->phone);
        $response->assertDontSee($userTwo->phone);

    }

    /**
     * @test
     */
    public function it_get_all_donors_filtered_by_wilaya(): void
    {
        $userOne = User::factory()->create(['wilaya_id' => '14']);
        $userTwo = User::factory()->create(['wilaya_id' => '16']);

        $response = $this->get("/donors?wilaya=14");

        $response->assertSee($userOne->phone);
        $response->assertDontSee($userTwo->phone);

    }

}
