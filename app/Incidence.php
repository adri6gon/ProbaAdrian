<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    //name	lastname	phone	email	email_verified_at	image	category	description	location	state	created_at	updated_at
    protected $fillable = ['','name', 'lastname','phone','email','','image','category','description','location','state','',''];
}
