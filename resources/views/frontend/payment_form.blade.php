@extends('frontend.layouts.app')
<style type="text/css">
    body {
        background: #DCDCDC;
    }

    .mainForm {
        margin-top: 20px;
        background: #ffffff;
        border-radius: 10px;
        border-style: none;
        outline: none;
        padding: 40px;
        margin-bottom: 120px;
    }

    .invoice {
        background: rgba(87, 111, 175, 0.1);
        border-radius: 10px;
        border-style: none;
        outline: none;

    }

    .SubForm {
        background: #DCDCDC;
        border-radius: 10px;
        border-style: none;
        outline: none;
        padding-left: 0 !important;
        padding-right: 0 !important;


    }

    .push {
        height: 0 !important;
    }

    .topText {
        text-align: right;
    }

    .topTitle {
        margin-top: 130px;
    }

    .subtotal {
        background: #576faf;
        color: #ffffff;
        border-radius: 0 0 10px 10px;
    }

    .frmData {
        margin: 20px;
        display: block;
    }

    .quotebox {
        background-color: #F0F0F0;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);

        color: #000000;
        display: block;
        font-family: "Palatino", Georgia, "Times New Roman", Times, serif;
        font-size: 14px;
        line-height: 16px;
        margin: 10px 10px 20px;
        padding: 20px;
    }

    .secure {
        margin-top: 30px;
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
@foreach($course as $value)
<div class="col-md-8 col-md-offset-2" style="background:white;margin-top:50px;margin-bottom:100px;padding-bottom:50px;">
<div id="content">
    <div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs col-md-12" role="tablist">
            <li role="presentation" class="active"><a href="#wing" aria-controls="wing" role="tab"
                    data-toggle="tab">Wing Pay</a></li>
            <li role="presentation"><a href="#aba" aria-controls="aba" role="tab" data-toggle="tab">ABA Pay</a></li>
            <li role="presentation"><a href="#acleda" aria-controls="acleda" role="tab" data-toggle="tab">Acleda Pay</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="wing">
                <div class="col-md-3">
                    <img src="{{url('img/wing.png')}}" alt="">
                    <hr>
                    <p>
                        ACCOUNT NUMBER: <b>02410987</b><br>
                        PHONE NUMBER: <b>096 3322209</b>
                    </p>
                </div>
                <div class="col-md-6 col-md-offset-3 well col-sm-12">
                    <form action="{{url('/payment/bank')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="couseId" value="{{ $value->id }}">
                        <div class="form-group">
                            <label for="sender">Phone Sender</label><br>
                            <input type="text" name="sender" id="" class="form-control" placeholder="012 XXX XXX">
                        </div>
                        <div class="form-group">
                            <label for="sender">Code</label><br>
                            <input type="text" name="code" id="" class="form-control" placeholder="xxxxxxx">
                        </div>
                        <div class="form-group">
                            <label for="sender">Phone Reciever</label><br>
                            <input type="text" name="receiver" id="" class="form-control" placeholder="012 XXX XXX">
                        </div>
                        <div class="form-group">
                            <label for="date">
                                Date Transfer
                            </label>
                            <input type="date" name="datetr" id="" class="form-control">
                        </div>
                        <input type="hidden" name="bank" value="1">
                        <input class="btn btn-primary btn-block" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="aba">
                <div class="col-md-3">
                    <img src="{{url('img/aba.png')}}" alt="">
                    <hr>
                    <p>ACCOUNT NAME : <b>Tim Saroeun</b><br>
                        ACCOUNT NUMBER: <b>000111060</b>
                    </p>

                </div>
                <div class="col-md-6 col-md-offset-3 well col-sm-12">
                    <form action="{{url('/payment/bank')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="couseId" value="{{ $value->id }}">
                        <div class="form-group">
                            <label for="sender">Account
                                Name</label><br>
                            <input type="text" name="acName" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sender">Account
                                Number</label><br>
                            <input type="text" name="acNumber" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">
                                Date Transfer
                            </label>
                            <input type="date" name="datetr" id="" class="form-control">
                        </div>
                        <input type="hidden" name="couseId" value="{{ $value->id }}">
                        <input type="hidden" name="bank" value="2">
                        <input class="btn btn-primary btn-block" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="acleda">
                <div class="col-md-3">
                    <img src="{{url('img/acleda.png')}}" alt="">
                    <hr>
                    <p>
                        Account Name: <b>Tim Saroeun</b>
                        Account Number: <b>38550061979217</b>
                    </p>
                </div>
                <div class="col-md-6 col-md-offset-3 well col-sm-12">
                    <form action="{{url('/payment/bank')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="sender">Account
                                Name</label><br>
                            <input type="text" name="acName" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sender">Account
                                Number</label><br>
                            <input type="text" name="acNumber" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">
                                Date Transfer
                            </label>
                            <input type="date" name="datetr" id="" class="form-control">
                        </div>
                        <input type="hidden" name="couseId" value="{{ $value->id }}">
                        <input type="hidden" name="bank" value="3">
                        <input class="btn btn-primary btn-block" type="submit" value="Submit">
                    </form>
                </div>
            </div>

        </div>

    </div>


    <!-- Manule Payment -->





    <div id="ORDER_FORM_SHIPPING_ENTRY">
        <div id="orderFormShippingEntry"> </div>
    </div>
    <div id="SHIPPING_OPTIONS">
        <div id="shippingOptionsContainer"> </div>
    </div>
    <div id="PAYMENT_PLANS"> </div>

</div>

<div id="ORDER_FORM_PRODUCT_LIST" class="col-md-10 col-md-offset-1">
    <table class="table table-bordered text-center">
        <thead class="bg-primary">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>{{ $value->title }}</td>
                <td>{{ $value->price."$" }}</td>
                <td>1</td>
                <td>{{ $value->price."$" }}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="1"></td>
                <td></td>
                <td>Total</td>
                <td>{{ $value->price."$" }}</td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td></td>
                <td>Sub Total</td>
                <td>{{ $value->price."$" }}</td>
            </tr>
        </tfoot>
    </table>
</div>
</div>

@endforeach
@endsection