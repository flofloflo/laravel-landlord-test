<?php
namespace App\Http\Middleware;

use Auth;
use Closure;
use Landlord;
use App\Tenant;

class TenantScope
{
    public function handle($request, Closure $next, $guard = null)
    {
        //check if scope should be restricted or user is logged in
        if(Auth::guard($guard)->check() OR ($request->input("tenant") AND is_numeric($request->input("tenant")))) 
        {
            //set tenant scope manually
            if($request->input("tenant") AND is_numeric($request->input("tenant")))
            {
                //get tenant_id and restrict scope
                Landlord::addTenant('tenant_id', $request->input("tenant"));
            }
            else //set tenant scope to user tenant
            {
                Landlord::addTenant('tenant_id', Auth::user()->tenant_id);
            }
        }
        return $next($request);
    }
}
