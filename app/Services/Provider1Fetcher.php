<?php

namespace App\Services;


class Provider1Fetcher extends TaskFetcherAbstract
{

    public function __construct()
    {
        $this->endpoint = "http://localhost/mocks/provider-1-tasks";
        $this->propertyNameForCustomId = "id";
        $this->propertyNameForEstimatedDuration = "estimated_duration";
        $this->propertyNameForDefficulty = "value";
    }



}
