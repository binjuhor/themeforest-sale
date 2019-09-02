<?php

namespace App\Repositories\Contracts;

interface SalesRepositoryRepository
{
    public function updateOrCreate(array $data);
}
