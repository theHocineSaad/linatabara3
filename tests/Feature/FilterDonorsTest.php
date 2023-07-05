<?php

namespace Tests\Feature;

use App\Models\BloodGroup;
use App\Models\Daira;
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
        // NOTE: BloodGroupId must be different, try not change (1 and 3) to avoid OtherDonors Result
        $bloodGroupOne = BloodGroup::where('id', 1)->first();
        $userOne = User::factory()->create(['blood_group_id' => $bloodGroupOne->id]);

        $bloodGroupTwo = BloodGroup::where('id', 3)->first();
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

    /**
     * @test
     */
    public function it_get_all_donors_filtered_by_daira(): void
    {
        $this->withoutExceptionHandling();
        $userOne = User::factory()->create(['daira_id' => 1]);
        $userTwo = User::factory()->create(['daira_id' => 2]);

        $response = $this->get("/donors?daira=1");

        $response->assertSee($userOne->phone);
        $response->assertDontSee($userTwo->phone);

    }

    /**
     * @test
     */
    public function it_get_other_possible_donors(): void
    {

        $bloodGroupOne = BloodGroup::where('id', 1)->first();
        $userOne = User::factory()->create(['blood_group_id' => $bloodGroupOne->id]);

        $bloodGroupTwo = BloodGroup::where('id', 3)->first();
        $userTwo = User::factory()->create(['blood_group_id' => $bloodGroupTwo->id]);

        $bloodGroupThree = BloodGroup::where('id', 2)->first();
        $userThree = User::factory()->create(['blood_group_id' => $bloodGroupThree->id]);


        $response = $this->get("/donors?blood_group={$bloodGroupOne->id}");

        $response->assertSee($userOne->phone);
        $response->assertSee($userThree->phone);
        $response->assertDontSee($userTwo->phone);
    }
}
