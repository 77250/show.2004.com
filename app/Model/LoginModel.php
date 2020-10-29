<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = "login";
    protected $primarykey = "id";
    public $timestamps = false;
    protected $guarded = [];
}
