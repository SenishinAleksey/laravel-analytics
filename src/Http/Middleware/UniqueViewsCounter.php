<?php

namespace SenishinAleksey\LaravelAnalytics\Http\Middleware;

use Closure;
use SenishinAleksey\LaravelAnalytics\Traits\UniqueViewsCounterTrait;

class UniqueViewsCounter
{
    use UniqueViewsCounterTrait;

    public function handle($request, Closure $next)
    {
        $this->run($request);

        return $next($request);
    }
}
