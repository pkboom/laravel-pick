<?php

namespace Pkboom\Pick\Tests;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use Pkboom\Pick\Pick;

class PickTest extends TestCase
{
    /** @test */
    public function it_add_values()
    {
        Http::fake();

        $pick = new Pick();

        $this->assertEmpty($pick->dump);

        $pick->add(1);

        $this->assertCount(1, $pick->dump);
        $this->assertSame(1, $pick->dump[0]);
    }

    /** @test */
    public function it_runs_garbage_collector()
    {
        Http::fake();

        $pick = new Pick();

        $pick->add(1);

        $pick->__destruct();

        Http::assertSent(function (Request $request) {
            return $request->url() === config('pick.pick-server') &&
                   $request['data'] === '[1]';
        });
    }
}
