<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;

abstract class  TaskFetcherAbstract
{
    protected $endpoint;
    protected $propertyNameForCustomId;
    protected $propertyNameForEstimatedDuration;
    protected $propertyNameForDefficulty;



    public function  execute(): array
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

    protected function formatTasks($leedTasks): array
    {
        $tasks = [];
        foreach ($leedTasks as $leedTask) {
            $tasks[] = [
                'custome_id' => $leedTask[$this->propertyNameForCustomId],
                'estimated_duration' => $leedTask[$this->propertyNameForEstimatedDuration],
                'difficulty' => $leedTask[$this->propertyNameForDefficulty],
            ];
        }
        return $tasks;
    }
}
