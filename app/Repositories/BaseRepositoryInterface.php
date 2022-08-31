<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface BaseRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Collection
     */
    public function all(): Collection;
}
