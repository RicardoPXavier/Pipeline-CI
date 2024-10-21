<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Carbon\Carbon;

class UserTest extends TestCase
{
    use RefreshDatabase;

    
    public function it_calculates_the_correct_age()
    {
       
        $user = User::factory()->create(['birthdate' => Carbon::createFromFormat('Y-m-d', '2000-01-01')]);

        
        $expectedAge = now()->year - 2000; 


        $this->assertEquals($expectedAge, $user->calculateAge());
    }
}
