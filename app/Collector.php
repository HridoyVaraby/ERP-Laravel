<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collector extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'email', 'phone', 'address', 'area'];
}