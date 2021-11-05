<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class FilterAbstract
{
    protected $request;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function filter(Builder $builder)
    {
        foreach ($this->getFilters() as $filter => $value) {
            $this->resolveFilter($filter)->filter($builder, $value);
        }

        return $builder;
    }

    public function add(array $filters)
    {
        $this->filters = array_merge($this->filters, $filters);

        return $this;
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }

    protected function getFilters()
    {
        return $this->filterFilters();
    }

    protected function filterFilters()
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }
}
