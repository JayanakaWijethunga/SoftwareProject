<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_official extends Model
{
    protected $fillable = [
        'ssn','obranch','dept','des',
    ];
}
