<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Carbon\Carbon;
use App\Models\User;

class UserTest extends TestCase
{
    /** @test */
    public function it_calculates_the_correct_age()
    {
        // Suponha que o usuário nasceu em 1990-01-01
        $user = new User();
        $user->date_of_birth = Carbon::create(1990, 1, 1);

        // Vamos simular que a data atual seja 2024-01-01
        Carbon::setTestNow(Carbon::create(2024, 1, 1));

        // Testar se a idade calculada é 34
        $this->assertEquals(34, $user->getAge());
    }
}
