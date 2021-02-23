<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['name', 'email', 'company', 'phone', 'description'];
}
