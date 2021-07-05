<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    protected $fillable = ['name', 'user_id', 'category_id', 'title', 'description', 'image'];
    public $timestamps = true;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
