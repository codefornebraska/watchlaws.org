<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\LegiScan\Bill;
use App\Models\Session;
use App\Models\State;

class StateTest extends TestCase
{
    /** @test */
    public function statesHaveManyBills()
    {
        $this->markTestSkipped();  // Not yet migrated

        // $state = State::factory()->create();
        // Bill::factory()->create([
        //     'state_id'    => $state->id,
        //     'description' => 'A saucy little piece of legislation.',
        // ]);

        // $this->assertInstanceOf(
        //     Bill::class,
        //     $state->bills->first()
        // );

        // $this->assertEquals(
        //     'A saucy little piece of legislation.',
        //     $state->bills->first()->description
        // );
    }
}
