@extends('admin/dashboard')
@section('admin_dashboard')

<form action="{{url('/storeService')}}" method="post">
    @csrf
    <div class="mb-2 row">
        <label for="service" class="col-sm-2 col-form-label"><b>Service: </b></label>
        <div class="col-sm-10">
            <input type="text" class="from-control" name="service"/>
        </div>
    </div>

    
    <div class="mb-2 row">
        <label for="duration" class="col-sm-2 col-form-label"><b>Duration:</b></label>
        <div class="col-sm-10">
            <input type="text" class="from-control" name="duration"/>
        </div>
    </div>
    <div class="mb-2 row">
        <label for="price" class="col-sm-2 col-form-label"><b>Amount:</b></label>
        <div class="col-sm-10">
            <input type="number" class="from-control" name="price"/>
        </div>
    </div>

    
    <div style="padding-left:250px ; ">
        <button type="submit" class="btn btn-primary"><b>Add</b></button>
        <a href="/service" class="btn btn-primary"><b>Clear</b></a>
    </div>

    
</form>
@endsection