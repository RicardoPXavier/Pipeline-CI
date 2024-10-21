<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Auth\AuthenticationException;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function it_throws_an_exception_when_accessing_without_authentication()
    {
       
        $this->expectException(AuthenticationException::class);

      
        $this->get('/restricted-route'); 
    }


}
