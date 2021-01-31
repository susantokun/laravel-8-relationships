<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobbies = [
            'Renang',
            'Membaca',
            'Editing Video',
            'Koding',
            'Rebahan',
            'Makan',
            'Tidur',
            'Menembak',
            'Badminton',
            'Voli',
        ];

        foreach ($hobbies as $value) {
            Hobby::create([
                'name' => $value,
            ]);
        }
    }
}
