@extends('layout')
@section('content')
<div style="padding-top:10px; width:800px"  >
    <div class="col-sm-8 offset-sm-2">

        <h2 style="padding-left:flex;   background-color: blue;" class="card-header"  >Stylish Saloon</h2>
        <br>
        <div>
            <form action="checkLogin" method="post">
                {{csrf_field()}}
                <div class="mb-2 row">
                    <label for="username" class="col-sm-2 col-form-label"><b>UserName:</b></label>
                    <div class="col-sm-10">
                        <input type="username" class="from-control" name="username"/>
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="password" class="col-sm-2 col-form-label"><b>password:</b></label>
                    <div class="col-sm-10">
                        <input type="password" class="from-control" name="password"/>
                    </div>
                </div>
            
                <div style="padding-left:250px ; ">
                    <button type="submit" class="btn btn-primary"><b>Login</b></button>
                </div>

            </form>
            <div class="mp-3 row">
                    <a  href="/register">Register!</a>
            </div>
        </div>
</div>
</div>
            
@endsection
