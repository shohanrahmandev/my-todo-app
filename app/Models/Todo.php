<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date', 'work', 'details', 'user_id', 'complete'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
