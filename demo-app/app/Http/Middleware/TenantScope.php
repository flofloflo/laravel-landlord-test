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
        //check if scope should be restricted
        if($request->input("tenant") AND is_numeric($request->input("tenant"))) 
        {
            //get tenant_id and restrict scope
            Landlord::addTenant('tenant_id', $request->input("tenant"));
        }
        return $next($request);
    }
}
