@extends('admin/dashboard')
@section('admin_dashboard')

<div>
    <h2><a class="btn btn-primary"  href="/addservice">Add New Service</a></h2>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
<table style="border: 1px solid;" >
        <tr >
            <th  style="border: 1px solid;">Service</th>
            <th style="border: 1px solid;">Duration</th>
            <th style="border: 1px solid;">Price</th>
            <th   colspan="2"></th>
        </tr>
        @foreach ($service as $s)
        <tr style="border: 1px solid;">
            <td style="border: 1px solid;">{{ $s->service}}</td>
            <td style="border: 1px solid;">{{ $s->duration }}</td>
            <td style="border: 1px solid;">{{ $s->price }}</td>
           
            <td ><a class="btn btn-info" href="{{url('edit',$s->id)}}" style="background-color:green">edit</a></td>
            <td ><a class="btn btn-info" href="{{url('destroyservice',$s->id)}}" style="background-color:red">Delete</a></td>
        </tr>
        @endforeach
    </table>


@endsection