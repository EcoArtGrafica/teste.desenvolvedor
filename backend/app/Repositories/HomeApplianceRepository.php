<?php


namespace App\Repositories;

use App\Models\HomeAppliance;

class HomeApplianceRepository extends Repository
{
    protected $model;

    public function __construct(HomeAppliance $model)
    {
        $this->model = $model;
    }
}
