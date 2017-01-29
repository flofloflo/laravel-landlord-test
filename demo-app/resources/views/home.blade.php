@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! Your tenant id is: {{Auth::user()->tenant_id}}
                    <h2>Select scope:</h2>
                    <div class="links">
                        <a href="/">user scope</a>
                        <a href="/?tenant=1">Tenant 1</a>
                        <a href="/?tenant=2">Tenant 2</a>
                    </div>
                    <h1>Users</h1>
                    <ul>
                        @foreach(App\User::all() as $u)
                            <li>ID: {{$u->id}} - Name: {{$u->name}} - Tenant: {{$u->tenant_id}}</li>
                        @endforeach
                    </ul>
                    <h1>Employees</h1>
                    <ul>
                        @foreach(App\Employee::all() as $u)
                            <li>ID: {{$u->id}} - Name: {{$u->name}} - Tenant: {{$u->tenant_id}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
