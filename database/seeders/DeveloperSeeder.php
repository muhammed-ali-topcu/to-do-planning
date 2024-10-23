<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developers = [
            [
                'name' => 'Dev-1',
                'speed' => 1,
            ],
            [
                'name' => 'Dev-2',
                'speed' => 2,
            ],
            [
                'name' => 'Dev-3',
                'speed' => 3,
            ],
            [
                'name' => 'Dev-4',
                'speed' => 4,
            ],
            [
                'name' => 'Dev-5',
                'speed' => 5,
            ]
        ];

        foreach ($developers as $developer) {
            Developer::create($developer);
        }
    }
}
