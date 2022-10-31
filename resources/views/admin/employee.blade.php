@extends('admin/dashboard')
@section('admin_dashboard')



<div>
    <h2><a class="btn btn-primary" style="text-align:right ;" href="{{url('clickCreate')}}">Create Employee</a></h2>
</div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
<table style="border: 1px solid;" >
        <tr >
            <th  style="border: 1px solid;">Emp ID</th>
            <th style="border: 1px solid;">First Name</th>
            <th style="border: 1px solid;">Last Name</th>
            <th style="border: 1px solid;">Address</th>
            <th style="border: 1px solid;">Mobile No </th>
            <th   colspan="2"></th>
        </tr>
        @foreach ($employee as $emp)
        <tr style="border: 1px solid;">
            <td style="border: 1px solid;">{{ $emp->empId}}</td>
            <td style="border: 1px solid;">{{ $emp->fname }}</td>
            <td style="border: 1px solid;">{{ $emp->lname }}</td>
            <td style="border: 1px solid;">{{ $emp->address }}</td>
            <td style="border: 1px solid;">{{$emp->mobile}}</td>
            <td ><a class="btn btn-info" href="{{url('edit',$emp->id)}}" style="background-color:green">edit</a></td>
            <td ><a class="btn btn-info" href="{{url('destroy',$emp->id)}}" style="background-color:red">Delete</a></td>
        </tr>
        @endforeach
    </table>


@endsection