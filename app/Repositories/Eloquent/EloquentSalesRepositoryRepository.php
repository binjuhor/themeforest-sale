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

    /**
     * @param array $data
     */
    public function updateOrCreate(array $data)
    {
        $sale = $data['sale'];
        unset($data['sale']);
        $this->entity->updateOrCreate($data, ['sale' => $sale]);
    }
}
