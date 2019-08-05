<?php

namespace App;


use Illuminate\Database\Eloquent\Model;



class User_detail extends Model {


    protected $fillable = [
        'ssn','first_name','last_name','dob','address_line_1','address_line_2','phoneNumber'
    ];


}