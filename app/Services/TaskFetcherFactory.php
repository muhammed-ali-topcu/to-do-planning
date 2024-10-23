<?php

namespace App\Services;

use App\Models\Provider;


class TaskFetcherFactory
{


    public static function make(Provider $provider): TaskFetcherAbstract
    {

        $fetcher =          $provider->getFetcher();

        return $fetcher;
    }

}
