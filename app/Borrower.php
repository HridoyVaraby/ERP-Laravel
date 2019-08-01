<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrower extends Model
{
    use SoftDeletes;
    protected $fillable = ['borrower_name', 'borrower_phone', 'borrower_address'];
}
