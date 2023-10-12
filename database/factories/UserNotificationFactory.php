<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserNotification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserNotification>
 */
class UserNotificationFactory extends Factory
{
    protected $model = UserNotification::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'notification_message' => fake()->sentence,
            'scheduled_at' => fake()->unique()->time('H:i'),
            'frequency' => fake()->randomElement([
                'daily',
                'weekly',
                'monthly',
                'everyMinute',
                'everyFiveMinutes',
                'everyTenMinutes',
                'hourly',
                'quarterly',
                'yearly',
                'everyThirtyMinutes'
            ]),
        ];
    }
}
