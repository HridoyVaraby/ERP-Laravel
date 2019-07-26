<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collector extends Model
{
    use SoftDeletes;
    protected $fillable = ['collector_name', 'collector_email', 'collector_phone', 'collector_address', 'collection_area'];
}