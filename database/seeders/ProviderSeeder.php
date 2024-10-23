<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $providers = [
            ['name' => 'Provider-1'],
            ['name' => 'Provider-2'],

        ];
        
        foreach ($providers as $provider) {
            Provider::create($provider);
        }
    }
}
