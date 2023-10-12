<?php

namespace Database\Seeders;

use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            User::factory(20)->create();

            $this->command->info('Users have been added.');
        } catch (Exception $e) {
            Log::channel('error')->error('UserSeeder failed: ' . $e->getMessage());
            $this->command->error('UserSeeder failed: ' . $e->getMessage());
        }
    }
}
