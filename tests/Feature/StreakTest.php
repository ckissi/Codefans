<?php

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

beforeEach(function () {
    // Run any necessary setup for your test.
    $this->user = User::factory()->create([
        'streak_count' => 0,
        'last_streak_date' => null,
    ]);
});

test('user streak increments after daily activity', function () {
    // Simulate yesterday's activity
    $this->user->update([
        'last_streak_date' => now()->subDay(),
        'streak_count' => 1,
    ]);

    // Simulate today's activity
    $response = $this->actingAs($this->user)
        ->get(route('daily-activity'));

    // Assert the response status code is successful (200)
    $response->assertStatus(200);

    // Assert streak count incremented by 1
    expect($this->user->fresh()->streak_count)->toBe(2);
});

test('user streak resets after inactivity', function () {
    // Simulate activity before yesterday
    $this->user->update([
        'last_streak_date' => now()->subDays(2),
        'streak_count' => 2,
    ]);

    // Simulate today's activity
    $response = $this->actingAs($this->user)
        ->get(route('daily-activity'));

    // Assert the response status code is successful (200)
    $response->assertStatus(200);

    // Assert streak count reset to 1
    expect($this->user->fresh()->streak_count)->toBe(1);
});

test('user streak does not change when activity is on the same day', function () {
    // Simulate today's initial activity
    $this->user->update([
        'last_streak_date' => now(),
        'streak_count' => 1,
    ]);

    // Simulate another activity on the same day
    $response = $this->actingAs($this->user)
        ->get(route('daily-activity'));

    // Assert the response status code is successful (200)
    $response->assertStatus(200);

    // Assert streak count remains unchanged
    expect($this->user->fresh()->streak_count)->toBe(1);
});

// Add more tests as needed to cover edge cases and other scenarios.
