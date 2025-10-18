<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['country', 'address', 'postcode', 'idCode','birthday', 'facebook', 'linkedin', 'phones', 'mobile', 'home', 'interests'];
}
