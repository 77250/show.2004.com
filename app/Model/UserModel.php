<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    protected $table = "classs";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $guarded = [];
}
