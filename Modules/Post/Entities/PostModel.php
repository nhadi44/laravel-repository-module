<?php

namespace Modules\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostModel extends Model
{
    use HasFactory;

//    protected $fillable = [];
    protected $guarded = ['id'];
    protected static function newFactory()
    {
        return \Modules\Post\Database\factories\PostModelFactory::new();
    }
}
