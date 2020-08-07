<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $this->assertTrue(true);
    
        $response = $this->get('/');

        $response->assertStatus(200);
    }
        /**
     * Test a console command.
     *
     * @return void
     */
    public function testConsoleCommand()
    {
        $this->artisan('question')
            ->expectsQuestion('What is your name?', 'Taylor Otwell')
            ->expectsQuestion('Which language do you program in?', 'PHP')
            ->expectsOutput('Your name is Taylor Otwell and you program in PHP.')
            ->assertExitCode(0);
    }
}
