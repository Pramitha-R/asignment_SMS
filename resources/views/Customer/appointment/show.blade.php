@extends('Customer/show')
@section('customer_dashboard')


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
<table style="border: 1px solid;" >
        <tr >
            <th  style="border: 1px solid;">Appointment ID</th>
            <th style="border: 1px solid;">Staff</th>
            <th style="border: 1px solid;">Date</th>
            <th style="border: 1px solid;">Time</th>
            <th style="border: 1px solid;">status</th>
        </tr>
        @foreach ($book as $b)
        <tr style="border: 1px solid;">
            <td style="border: 1px solid;">{{ $b->AppointmentId}}</td>
            <td style="border: 1px solid;">{{ $b->staff }}</td>
            <td style="border: 1px solid;">{{ $b->date }}</td>
            <td style="border: 1px solid;">{{ $b->time }}</td>
            <td style="border: 1px solid;">{{ $b->status }}</td>
        </tr>
        @endforeach
    </table>
@endsection