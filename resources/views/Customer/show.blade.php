@extends('layout')
@section('content')
<div class="row">
        <div  class="pull-right">
            <table>
                <tr>
                    <th><a class="btn btn-primary" style="width:240px" href="" >{{$customer->fname}}</a></th>
                    <th><a class="btn btn-primary" style="width:240px"href="{{url('bookappointment',$customer->id)}}">Book Appointment</a></th>
                    <th><a class="btn btn-primary" style="width:240px"  href="{{url('click_appointment',$customer->id)}}">Appointment</a></th>
                    <th><a class="btn btn-primary" style="width:240px" href="/logout">Logout</a></th>
                </tr>            
            </table>
        </div>
    </div>
    <div class="container">
            @yield('customer_dashboard')
    </div>
@endsection