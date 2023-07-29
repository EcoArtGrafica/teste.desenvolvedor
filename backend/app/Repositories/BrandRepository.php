<?php


namespace App\Repositories;

use App\Models\Brand;

class BrandRepository extends Repository
{
    protected $model;

    public function __construct(Brand $model)
    {
        $this->model = $model;
    }
}
