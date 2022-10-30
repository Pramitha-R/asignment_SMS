@extends('Customer/show')
@section('customer_dashboard')

<form action="{{url('store')}}" method="post">
    @csrf
    <div class="mb-2 row">
        <label for="" class="col-sm-2 col-form-label"><b>Appointment ID: </b></label>
        <div class="col-sm-10">
            <input type="text" class="from-control" name="service"/>
        </div>
    </div>

    <div class="mb-2 row">
        <label for="staff" class="col-sm-2 col-form-label"><b>staff</b></label>
        <div class="col-sm-10">
            <select name="staff"  class="col-sm-10" style="width:210px" aria-label="from-select-sm example">
            @foreach($employee as $emp)
                <option class="from-control" name="staff" value="{{$emp->fname}}">{{$emp->fname}} </option>
                
            @endforeach
            </select>    
        </div>
    </div>

    <div class="mb-2 row">
        <label for="date" class="col-sm-2 col-form-label"><b>Date:</b></label>
        <div class="col-sm-10">
            <input type="date" class="from-control" name="date"/>
        </div>
    </div>
    <div class="mb-2 row">
        <label for="time" class="col-sm-2 col-form-label"><b>Time:</b></label>
        <div class="col-sm-10">
            <input type="time" class="from-control" name="time"/>
        </div>
    </div>

    <div class="mb-2 row">
        <label for="service" class="col-sm-2 col-form-label"><b>Service</b></label>
        <div class="col-sm-10">
            @foreach($service as $s)
                <input type="checkbox"  name="service" value="{{$s->service}}">
                <label for=""> {{$s->service}}</label><br>
                <input type="hidden" name="{{$s->id}}" >
            @endforeach
        </div>
    </div>
    
    
    <div style="padding-left:250px ; ">
        <button type="submit" class="btn btn-primary"><b>Book</b></button>
        <a href="" class="btn btn-primary"><b>Clear</b></a>
    </div>

    
</form>
@endsection