<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

abstract class Filter
{
    public function handle(Builder $builder, Closure $next)
    {
        if (!request()->has($this->filterName())) {
            return $next($builder);
        }

        return $next($this->applyFilter($builder));
    }

    /**
     * applyFilter
     *
     * @param  Builder $builder
     * @return Builder
     */
    protected abstract function applyFilter(Builder $builder): Builder;

    /**
     * filterName
     *
     * @return string
     */
    protected function filterName(): string
    {
        return Str::snake(class_basename($this));
    }
}
