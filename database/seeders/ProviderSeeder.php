<?php

namespace Database\Seeders;

use App\Models\Provider;
use App\Services\Provider1Fetcher;
use App\Services\Provider2Fetcher;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $providersInfo = [
            [
                'name' => 'Provider-1',
                'fetcher_class' => Provider1Fetcher::class,
                'key_for_custome_id' => 'id',
                'key_for_defficulty' => 'value',
                'key_for_estimated_duration' => 'estimated_duration',
                'url' => 'http://localhost/mocks/provider-1-tasks',
            ],
            [
                'name' => 'Provider-1',
                'fetcher_class' => Provider2Fetcher::class,
                'key_for_custome_id' => 'id',
                'key_for_defficulty' => 'zorluk',
                'key_for_estimated_duration' => 'sure',
                'url' => 'http://localhost/mocks/provider-2-tasks',
            ],


        ];

        foreach ($providersInfo as $providerInfo) {
            Provider::create($providerInfo);
        }
    }
}
