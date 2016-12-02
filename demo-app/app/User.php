<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use HipsterJazzbo\Landlord\BelongsToTenants;

class User extends Authenticatable
{
    use Notifiable;
    use BelongsToTenants;
    
    //no timestamp fields in db
    public $timestamps=false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'tenant_id',
    ];

    
}
