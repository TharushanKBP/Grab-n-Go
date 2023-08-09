<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'photo',
        'status',
        'is_parent',
        'parent_id',
        'added_by'
    ];

    public function parent_info()
    {
        return $this->hasOne('App\Models\Category', 'id', 'parent_id');
    }

    public static function getAllCategory()
    {
        return  Category::orderBy('id', 'DESC')->with('parent_info')->paginate(10);
    }
}
