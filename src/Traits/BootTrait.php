<?php

namespace  SenishinAleksey\LaravelAnalytics\Traits;

use Exception;
use SenishinAleksey\LaravelAnalytics\Http\Middleware\UniqueViewsCounter;
use SenishinAleksey\LaravelAnalytics\Http\Middleware\UniqueVisitorsCounter;


trait BootTrait
{
    public function starting()
    {
        $this->app['router']->aliasMiddleware('unique.views', UniqueViewsCounter::class);
        $this->app['router']->aliasMiddleware('unique.visitors', UniqueVisitorsCounter::class);

    }

}
