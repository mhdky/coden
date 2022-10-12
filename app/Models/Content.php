<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, array $search) {
        if(isset($search['search']) ? $search['search'] : false) {
            return $query->where('title', 'like', '%' . $search['search'] . '%')
                            ->orWhere('body', 'like', '%' . $search['search'] . '%');
        }
    }

    public function scopeSearchcontent($query, array $searchContent) {
        if(isset($searchContent['search-content']) ? $searchContent['search-content'] : false) {
            return $query->where('title', 'like', '%' . $searchContent['search-content'] . '%')
            ->orWhere('body', 'like', '%' . $searchContent['search-content'] . '%')
            ->orWhere('youtube_on_off', 'like', '%' . $searchContent['search-content'] . '%')
            ->orWhere('date', 'like', '%' . $searchContent['search-content'] . '%')
            ->orWhere('author', 'like', '%' . $searchContent['search-content'] . '%')            ;
        }
    }
}
