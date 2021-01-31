<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Phone;
use App\Models\HobbyUser;
use App\Models\PhoneMany;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Phone::factory(5)->create();
        PhoneMany::factory(10)->create();
        $this->call(HobbySeeder::class);
        HobbyUser::factory(10)->create();
    }
}
