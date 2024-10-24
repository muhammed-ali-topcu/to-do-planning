<?php

namespace App\Services;


class Provider2Fetcher extends TaskFetcherAbstract
{

    public function __construct()
    {
        $this->endpoint = "http://localhost/mocks/provider-2-tasks";
        $this->propertyNameForCustomId = "id";
        $this->propertyNameForEstimatedDuration = "sure";
        $this->propertyNameForDefficulty = "zorluk";
    }



}
