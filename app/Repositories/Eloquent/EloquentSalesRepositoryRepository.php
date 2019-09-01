<?php

namespace App\Repositories\Eloquent;

use App\Sale;
use App\Repositories\Contracts\SalesRepositoryRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentSalesRepositoryRepository extends AbstractRepository implements SalesRepositoryRepository
{
    public function entity()
    {
        return Sale::class;
    }

    public function createOrUpdate(array $data)
    {
        $this->entity->updateOrCreate($data);
    }
}
