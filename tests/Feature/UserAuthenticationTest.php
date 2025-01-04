<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\Attributes\Test;

class UserAuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    // }

    /* @test*/
    use RefreshDatabase;
    #[Test]
    public function unauthenticated_user_can_access_home(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    #[Test]
    public function it_registers_a_user()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'testpass123',
            'password_confirmation' => 'testpass123',
        ]);

        $response->assertRedirect('/');
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }
    #[Test]
    public function it_logs_in_a_user()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    #[Test]
    public function it_logs_out_a_user()
    {
        $user = User::factory()->create();

        // $this->actingAs($user);

        $response = $this->post('/logout');

        $response->assertRedirect('/');
        $this->assertGuest();
    }
}
