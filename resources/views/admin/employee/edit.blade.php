@extends('admin/dashboard')
@section('admin_dashboard')

<form action="{{url('/update',$employee->id)}}" method="post">
    @csrf
    <div class="mb-2 row">
        <label for="empId" class="col-sm-2 col-form-label"><b>Emp Id:</b></label>
        <div class="col-sm-10">
            <input type="text" class="from-control" name="empId" value="{{$employee->empId}}"/>
        </div>
    </div>

    <div class="mb-2 row">
        <label for="title" class="col-sm-2 col-form-label"><b>Title</b></label>
        <div class="col-sm-10">
            <select name="title"  class="col-sm-10" style="width:210px" aria-label="from-select-sm example" value="{{$employee->title}}">
                <option class="from-control" value="Mr.">Mr.</option>
                <option class="from-control" value="Mrs.">Mrs.</option>
                <option class="from-control" value="Miss">Miss.</option>
            </select>    
        </div>
    </div>
    <div class="mb-2 row">
        <label for="fname" class="col-sm-2 col-form-label"><b>First Name:</b></label>
        <div class="col-sm-10">
            <input type="text" class="from-control" name="fname" value="{{$employee->fname}}"/>
        </div>
    </div>
    <div class="mb-2 row">
        <label for="lname" class="col-sm-2 col-form-label"><b>Last Name:</b></label>
        <div class="col-sm-10">
            <input type="text" class="from-control" name="lname" value="{{$employee->lname}}"/>
        </div>
    </div>

    <div class="mb-2 row">
        <label for="address" class="col-sm-2 col-form-label"><b>Address:</b></label>
        <div class="col-sm-10">
            <input type="text" class="from-control" name="address" value="{{$employee->address}}"/>
        </div>
    </div>

    <div class="mb-2 row">
        <label for="mobile" class="col-sm-2 col-form-label"><b>Mobile No:</b></label>
        <div class="col-sm-10">
            <input type="number" class="from-control" name="mobile" value="{{$employee->mobile}}"/>
        </div>
    </div>

    <div class="mb-2 row">
        <label for="password" class="col-sm-2 col-form-label"><b>password:</b></label>
        <div class="col-sm-10">
            <input type="password" class="from-control" name="password" value="{{$employee->password}}"/>
        </div>
    </div>
            
    <div style="padding-left:250px ; ">
        <button type="submit" class="btn btn-primary"><b>Update</b></button>
        <a href="/create_employee" class="btn btn-primary"><b>Clear</b></a>
    </div>

    
</form>
@endsection