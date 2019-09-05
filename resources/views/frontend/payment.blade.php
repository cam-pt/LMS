@extends('frontend.layouts.app')
<style type="text/css">
    
    body{
    background:#DCDCDC;
}
.mainForm{
    margin-top: 20px;
    background:#ffffff;
    border-radius: 10px;
    border-style:none;
    outline: none;
    padding:40px;
    margin-bottom: 120px;
}
.invoice{
    background:rgba(87,111,175,0.1);
    border-radius: 10px;
    border-style:none;
    outline: none;

}
.SubForm{
    background:#DCDCDC;
    border-radius: 10px;
    border-style:none;
    outline: none;
    padding-left:0 !important;
    padding-right:0 !important;
    
    
}
.push{
    height:0 !important;
}
.topText{
    text-align:right;
}
.topTitle{
    margin-top:0px;
}
.subtotal{
    background:#576faf;
    color:#ffffff;
    border-radius:0 0 10px 10px;
}
.frmData{
    margin:20px;
    display: block;
}
.quotebox{
    background-color: #F0F0F0;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    
    color: #000000;
    display: block;
    font-family: "Palatino", Georgia, "Times New Roman", Times,serif;
    font-size: 14px;
    line-height: 16px;
    margin: 10px 10px 20px;
    padding: 20px;
}
.secure{
    margin-top:30px;
    vertical-align: bottom;
}

</style>


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@foreach ($courses as $key => $value)

<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 mainForm">
        <div class="col-md-6 col-lg-6">
            <div class="col-md-12 col-lg-12">
                <img src="{{url('/public/logo.png')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-12 col-lg-12 SubForm">
                <table class="table invoice">
                    <thead>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->price }} $</td>
                            <td>1</td>
                            <td>{{ $value->price }} $</td>
                        </tr>
                        <tr class="subtotal">
                            <td class="leftAlign">
                                <span class="totalPrice">Subtotal</span>
                            </td>
                            <td colspan="2"></td>
                            <td></td>
                            <td>{{ $value->price }} $</td>
                        </tr>
                    </tbody>
                </table>
                <h4><b>Enter Your Details Below</b></h4>
                <div class="col-lg-6 col-md-12 pull-right">
                <form action="{{url('/payments/bank')}}" class="form-inline frmData" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group pull-right">
                        <input type="hidden" name="course_id" value="{{ $value->id }}">
                        <label for="">* First Name</label>
                        <input type="text" name="fname" id="" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">* Last Name</label>
                        <input type="text" name="lname" id="" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">Company Name</label>
                        <input type="text" name="cname" id="" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">* Address - Line 1</label>
                        <input type="text" name="adr" id="" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">Address - Line 2</label>
                        <input type="text" name="adrt" id="" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">* City</label>
                        <input type="text" name="city" id="" class="form-control" required>
                    </div>
                    
                    <div class="form-group pull-right">
                        <label for="">Zip Code</label>
                        <input type="number" name="zip" id="" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">* Country</label>
                        <select class="form-control" name="country" required>
                            <option value="1">Please select one</option>
                            <option value="2">Cambodia</option>
                            <option value="3">Yemen</option>
                            <option value="4">Zambia</option>
                            <option value="5">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">* Phone Number</label>
                        <input type="text" name="pnum" id="" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <label for="">* Email</label>
                        <input type="email" name="eadr" id="" class="form-control" required>
                    </div>
                    <input type="submit" value="Join Now" class="btn btn-primary btn-block">
                </form>
                </div>
                
                <table class="table invoice">
                    <thead>
                        <th>Order Summary</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="totalPrice">Subtotal</span>
                            </td>
                            <td colspan="2"></td>
                            <td></td>
                            <td>{{ $value->price }} $</td>
                        </tr>
                        <tr class="subtotal">
                            <td>
                                <span class="totalPrice">Total charged today</span>
                            </td>
                            <td colspan="2"></td>
                            <td></td>
                            <td>{{ $value->price }} $</td>
                        </tr>
                    </tbody>
                </table>
                
                <div style="padding: 20px 20px 0px; color: #000; font-size: 14px; line-height: 18px; text-align: left;">
                    <strong>IMPORTANT:</strong>
                    Please click the "Join Now" button only once.
                    If for some reason your order is not processed,
                    please contact support to complete your order by
                    <a href="#">clicking here</a>.</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="pull-right topText">
                <p><strong>Need help?</strong><br>
                    <a href="#" target="_blank">Email Customer Service</a>
                </p>
            </div>
            <div class="col-md-12 topTitle">
                <div id="productInformation">
                    <h2 id="columnTitle">In <em>{{ $value->title }}</em>, you’ll learn:</h2>
                    <div class="clear"></div>
                    <p><?=$value->subtitle?></p>
                    <p><?=$value->description;?></p>
                  
                   @foreach ($comment as $com)
                    <div class="quotebox" style="margin: 10px 0px 15px; padding: 10px;">
                        <p>"{{$com->comment}}"</p>
                        <p><strong><em>— {{$com->first_name}} {{$com->last_name}}</em></strong></p>
                    </div>
                    @endforeach
                    <div class="seal-wrapper centered" align="center"><img alt="Satisfaction guaranteed ribbon"
                            src="{{url('img/Guarantee.jpg')}}"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 secure">
            <div class="col-md-3">
                <img src="{{url('img/lock.jpg')}}" class="pull-right img-responsive" alt="">
            </div>
            <div class="col-md-3 text-center">
                <h3>Secure</h3>
                <h4>Checkout</h4>
                <p>You can trust us!</p>
            </div>
            <div class="col-md-3">
                <img src="{{url('img/creditCards.jpg')}}" class="img-responsive" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{url('img/secure90x72.png')}}" class="img-responsive" alt="">
            </div>
            
            
            
        </div>
    </div>
@endforeach
@endsection



