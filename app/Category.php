<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $fillable = ['name'];
    public $timestamps = true;

    public function articles() {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
