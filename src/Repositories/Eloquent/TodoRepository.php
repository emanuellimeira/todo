<?php

namespace Elc\Todo\Repositories\Eloquent;

use Elc\Todo\Models\Todo;
use Prettus\Repository\Criteria\RequestCriteria;
use Elc\Todo\Repositories\TodoRepositoryInterface;

class TodoRepository implements TodoRepositoryInterface
{
	private $todos;
    public function __construct(Todo $todos)
    {
    	$this->todos = $todos;
    }

    public function getAll()
    {
    	return $this->todos->all();
    }

    public function getDesc()
    {
    	return $this->todos->orderBy('id','desc')->get();
    }

    public function getById($id)
    {
    	return $this->todos->findOrFail($id);
    }

    public function create(array $attributes)
    {
    	return $this->todos->create($attributes);
    }

    public function update($id, array $attributes)
    {
    	$todo = $this->todos->findOrFail($id);
    	$todo->update($attributes);
    	return $todo;
    }

    public function delete($id)
    {
     //    $deletar = $this->todos->findOrFail($id);
     //    //dd($deletar);
     //    $this->todos->delete($id);
    	// return true;
    $this->todos->findOrFail($id)->delete();
    return true; 
    }
}
