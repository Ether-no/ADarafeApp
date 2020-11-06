<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id_tags';
    protected $fillable = ['id_tags','nombre','tag_slug'];
    protected $dates = ['created_at', 'updated_at'];
}
