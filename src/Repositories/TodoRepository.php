<?php

namespace Elc\Todo\Repositories;

use Elc\Todo\Models\Todo;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Http\Request;
use Response;

interface TodoRepository
{
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}
