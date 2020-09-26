<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['name', 'email', 'password', 'gender', 'dateofbirth', 'address'];
}
