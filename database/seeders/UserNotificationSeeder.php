<?php

namespace Database\Seeders;

use App\Models\UserNotification;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class UserNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            UserNotification::factory(20)->create();

            $this->command->info('User Notifications have been added.');
        } catch (Exception $e) {
            Log::channel('error')->error('UserNotificationSeeder failed: ' . $e->getMessage());
            $this->command->error('UserNotificationSeeder failed: ' . $e->getMessage());
        }
    }
}
