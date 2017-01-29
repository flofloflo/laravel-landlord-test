<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Tenant;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create two dummy tenants
        Tenant::create(["id"=>1]);
        Tenant::create(["id"=>2]);
        //create 6 dummy users
        for($i=1;$i<7;$i++)
        {
            //even users are assigend to tenant 1
            User::create(["name"=>"User ".$i,"email"=>"mail".$i."@abc.de","password"=>bcrypt("secret"),"tenant_id"=>$i%2+1]);
        }
    }
}
