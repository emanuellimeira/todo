<?php

namespace Elc\Todo\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = ['user_id', 'completed', 'todo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
