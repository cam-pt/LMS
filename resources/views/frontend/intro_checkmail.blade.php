@extends('frontend.layouts.app')

@section('content')
<div class="row push" style="padding-top:70px;padding-bottom:250px;">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
        <h2>WELCOME TO ENROLL THIS COURSE PLEASE GO TO CHECK YOUR MAILBOX BELOW</h2>
        <h3 style="color:#0B1121;"><i class="glyphicon glyphicon-envelope"></i> &nbsp;{{$email}}</h3>
        </div>
    </div>
</div>
@endsection