<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';

    protected $fillable = ['username','password','name','gender'];

    protected $primaryKey = 'idUser';

    public $timestamps = false;
}
