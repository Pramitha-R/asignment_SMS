@extends('layout')
@section('content')
<div style="padding-top:10px; width:800px"  >
    <div class="col-sm-8 offset-sm-2">

        <h2 style="padding-left:flex;   background-color: blue;" class="card-header"  >Customer Registration</h2>
        <br>
        <div>
            <form action="store" method="post">
                {{csrf_field()}}
                
                <div class="mb-2 row">
                    <label for="title" class="col-sm-2 col-form-label"><b>Title</b></label>
                    <div class="col-sm-10">
                        <select name="title"  class="col-sm-10" style="width:210px" aria-label="from-select-sm example">
                            <option class="from-control" value="Mr.">Mr.</option>
                            <option class="from-control" value="Mrs.">Mrs.</option>
                            <option class="from-control" value="Miss">Miss.</option>
                        </select>    
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="fname" class="col-sm-2 col-form-label"><b>First Name:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control" name="fname"/>
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="lname" class="col-sm-2 col-form-label"><b>Last Name:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control" name="lname"/>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="gender" class="col-sm-2 col-form-label"><b>Gender:</b></label>
                    <div class="col-sm-10">
                        <select name="gender"  class="col-sm-10" style="width:210px" aria-label="from-select-sm example">
                            <option class="from-control" value="m">Male</option>
                            <option class="from-control" value="f">Female</option>
                        </select>    
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="nic" class="col-sm-2 col-form-label"><b>NIC:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control" name="nic"/>
                    </div>
                </div>


                <div class="mb-2 row">
                    <label for="address" class="col-sm-2 col-form-label"><b>Address:</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="from-control" name="address"/>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="mobile" class="col-sm-2 col-form-label"><b>Mobile No:</b></label>
                    <div class="col-sm-10">
                        <input type="number" class="from-control" name="mobile"/>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="password" class="col-sm-2 col-form-label"><b>password:</b></label>
                    <div class="col-sm-10">
                        <input type="password" class="from-control" name="password"/>
                    </div>
                </div>

                <div class="mb-2 row">
                    <label for="password" class="col-sm-2 col-form-label"><b>Re-password:</b></label>
                    <div class="col-sm-10">
                        <input type="password" class="from-control" name="re-password"/>
                    </div>
                </div>
            
                <div style="padding-left:250px ; ">
                    <button type="submit" class="btn btn-primary"><b>Add</b></button>
                    <a href="/" class="btn btn-primary"><b>Clear</b></a>
                </div>

            </form>
            
        </div>
</div>
</div>
            
@endsection
