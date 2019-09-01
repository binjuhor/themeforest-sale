<?php

namespace App\Repositories\Contracts;

interface SalesRepositoryRepository
{
    public function createOrUpdate(array $data);
}
