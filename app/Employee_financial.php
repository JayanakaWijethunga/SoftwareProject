<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_financial extends Model
{
    protected $fillable = [
        'fixed_allowances','fixed_deductions','bank','bbranch','acc',
    ];
}
