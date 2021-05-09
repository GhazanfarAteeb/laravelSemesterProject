@extends('layouts.app')
@section('profilePic',$profilePic)

@section('content')
<section class="content-wrapper">
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1>Add Item</h1>
            </div>
            <div class="col-sm-2"><a href="/Users" class="pull-right"></a></div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="/addCustomerMenuPost" method="post">
                        @csrf
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Order ID</h4>
                                </label>
                                <input type="text" class="form-control" name="orderID">
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
                                <input type="text" class="form-control" name="itemName">
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
                                <input type="text" class="form-control" name="quantity">
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
                                <input type="text" class="form-control" name="unitPrice">
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
                                        <button class="btn btn-lg btn-success" name="Done" type="submit" value="Done">
                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                            Done
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group ml-3">
                                    <div class="col-xs-4">
                                        <br>
                                        <button class="btn btn-lg btn-info" name="AddMore" type="submit" value="AddMore">
                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                            Add More
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
