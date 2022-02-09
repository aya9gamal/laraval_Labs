<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Article extends Model
{
    use HasFactory;
    public function Category()
    {
        
        return $this->belongsTo("App\Models\Category",'cate_id','id');
    }
}
