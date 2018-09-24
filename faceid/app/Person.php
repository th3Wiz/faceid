<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = 'person';

    protected $fillable = ['name','age','gender','idcode'];

    protected $primaryKey = 'idPerson';

    public $timestamps = false;
}
