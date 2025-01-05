<?php

namespace SenishinAleksey\LaravelAnalytics\Http\Middleware;


use Closure;
use SenishinAleksey\LaravelAnalytics\Traits\UniqueVisitorsCounterTrait;

class UniqueVisitorsCounter
{
    use UniqueVisitorsCounterTrait;

    public function handle($request, Closure $next)
    {
        $this->run($request);

        return $next($request);
    }
}
