<?php

namespace Elc\Todo\Repositories;

use Elc\Todo\Models\Todo;

interface TodoRepository
{
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}
