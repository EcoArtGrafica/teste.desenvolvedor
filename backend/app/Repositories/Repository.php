<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Repository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function resolveModel(): Builder
    {
        return $this->model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id, $columns = '*')
    {
        return $this->model->find($id, $columns);
    }

    public function store(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * Faz o update do model passando o id e um array de par de chave e valor
     *
     * @param mixed $id
     * @param array $data
     * @return boolean
     */
    public function update($id, array $data): bool
    {
        $model = $this->find($id);

        $model->fill($data);

        return $model->save();
    }
    /**
     * Destroy the models for the given IDs.
     *
     * @param mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $model = $this->find($id);

        return $model->destroy($id);
    }
}
