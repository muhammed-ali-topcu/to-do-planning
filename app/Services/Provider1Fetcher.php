<?php

namespace App\Services;

use App\Models\Developer;
use App\Models\Provider;
use App\Models\Task;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;


class Provider1Fetcher extends TaskFetcherAbstract
{

    public function __construct()
    {
        $this->endpoint = "http://localhost/mocks/provider-1-tasks";
        $this->httpMethod = "GET";
        $this->propertyNameForCustomId = "id";
        $this->propertyNameForEstimatedDuration = "estimated_duration";
        $this->propertyNameForDefficulty = "value";
    }

    public function  execute():array
    {
        $response = Http::acceptJson()
            ->get($this->endpoint);

        // Handle response
        $responseBody = $response->body();
        if ($response->failed()) {
            throw new \Exception("request failed");
        }

        $leedTasks = json_decode($responseBody, true);

        return $this->formatTasks($leedTasks);
    }

}
