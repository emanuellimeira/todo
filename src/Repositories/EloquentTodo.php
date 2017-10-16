<?php

namespace Elc\Todo\Repositories;

use Elc\Todo\Models\Todo;

class EloquentTodo implements TodoRepository
{
	private $model;
    public function __construct(Todo $model)
    {
    	$this->model = $model;
    }

    public function getAll()
    {
    	return $this->model->all();
    }

    public function getDesc()
    {
    	return $this->model->orderBy('id','desc')->get();
    }

    public function getById($id)
    {
    	return $this->model->findById($id);
    }

    public function create(array $attributes)
    {
    	return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
    	$todo = $this->model->findOrFail($id);
    	$todo->update($attributes);
    	return $todo;
    }

    public function delete($id)
    {
    	$this->getById($id)->delete();
    	return true;
    }
}
