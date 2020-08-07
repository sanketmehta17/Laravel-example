<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);

        // $response = $this->get('/');

        // $response->assertStatus(200);

        // Artisan::command('question', function () {
        //     $name = $this->ask('What is your name?');
        
        //     $language = $this->choice('Which language do you program in?', [
        //         'PHP',
        //         'Ruby',
        //         'Python',
        //     ]);
        
        //     $this->line('Your name is '.$name.' and you program in '.$language.'.');
        // });
    }

    /**
     * Test a console command.
     *
     * @return void
     */
    public function testConsoleCommand()
    {
        // $this->artisan('ask')
        //     ->expectsQuestion('What is your name?', 'Taylor Otwell')
        //     ->expectsQuestion('Which language do you program in?', 'PHP')
        //     ->expectsOutput('Your name is Taylor Otwell and you program in PHP.')
        //     ->assertExitCode(0);
    }
}
