<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, array $search) {
        if(isset($search['search']) ? $search['search'] : false) {
            return $query->where('img', 'like', '%' . $search['search'] . '%');
        }
    }
}
