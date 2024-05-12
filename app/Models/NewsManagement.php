<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsManagement extends Model
{
    use HasFactory;

   protected $fillable = [
        'title',
        'content',
        'autherName',
        'publisheDate',
        'newsType',
        'created_at',
        'updated_at',
        'deleted_at'
   ];


}
