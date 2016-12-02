<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    //no timestamp fields in db
    public $timestamps=false;
}
