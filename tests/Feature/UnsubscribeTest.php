<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('unsubscribes a user successfully', function () {
    // Arrange: Create a user with subscribed = 1
    $user = User::factory()->create([
        'subscribed' => 1,
    ]);

    // Act: Make a request to the unsubscribe route
    $this->get('/user/unsubscribe/' . $user->uuid);

    // Assert: Check that the user is now unsubscribed
    $this->assertDatabaseHas('users', [
        'uuid' => $user->uuid,
        'subscribed' => 0,
    ]);
});
