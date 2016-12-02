<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use HipsterJazzbo\Landlord\BelongsToTenants;

class Employee extends Model
{
    use BelongsToTenants;
    //no timestamp fields in db
    public $timestamps=false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
}
