@extends('layouts.app')
@section('profilePic',$profilePic)

@section('content')
<section class="content-wrapper">
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1>Update Item</h1>
            </div>
            <div class="col-sm-2"><a href="/Users" class="pull-right"></a></div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="/updateCustomerMenuPost" method="post">
                        @csrf
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Item ID</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$menu->id}}" name="id" readonly>
                                @error('id')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Order ID</h4>
                                </label>
                                <input type="text" class="form-control" value="{{$menu->OrderID}}" name="orderID">
                                @error('itemName')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label>
                                    <h4>Item Name</h4>
                                </label>
                                <input type="text" class="form-control" name="itemName" value="{{$menu->ItemName}}">
                                @error('itemName')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label>
                                    <h4>Quantity</h4>
                                </label>
                                <input type="text" class="form-control" name="quantity" value="{{$menu->quantity}}">
                                @error('quantity')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label>
                                    <h4>Unit Price</h4>
                                </label>
                                <input type="text" class="form-control" name="unitPrice" value="{{$menu->unitPrice}}">
                                @error('unitPrice')
                                <p class="text-danger">* This field is required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <br>
                                        <button class="btn btn-lg btn-success" name="Done" type="submit">
                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                    <hr>

                </div>
            </div>
        </div>
        <!--/tab-content-->

    </div>
    <!--/col-9-->
    </div>
</section>
<!--/row-->
@endsection
