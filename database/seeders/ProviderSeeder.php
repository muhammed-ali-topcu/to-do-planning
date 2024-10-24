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
            ],
            [
                'name' => 'Provider-1',
                'fetcher_class' => Provider2Fetcher::class,
            ],


        ];

        foreach ($providersInfo as $providerInfo) {
            Provider::create($providerInfo);
        }
    }
}
