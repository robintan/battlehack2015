@extends('app')

@section('content')
<div class="container">
<div class="panel">

    <div class="row list merchant-list">
        <div class="col-xs-3">
            <div class="merchant-img" style="background-image:url(http://media-cdn.tripadvisor.com/media/photo-s/04/78/3c/91/kfc-kentucky-fried-chicken.jpg)">
            </div>
        </div>
        <div class="col-xs-9">
            <div class="row">
                <div class="col-xs-9">
                    <h3 class="merchant-name">{{$merchantInfo->name}}</h3>
                    <p class="merchant-desc">{{$merchantInfo->description}}</p>
                    <span class="glyphicon glyphicon-phone-alt push-right"></span>{{$merchantInfo->phone_number}}
                    <br/>
                    <span class="glyphicon glyphicon glyphicon-envelope push-right"></span>{{$merchantInfo->email}}
                </div>
                <div class="col-xs-3">
                    <div class="merchant-queue-wrapper">
                        <div class="merchant-queue">
                            <h4><span>{{$merchantInfo->queueing}}</span></h4>
                            <label>in the queue</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div role="tabpanel">
        <div class="row">
            <div class="col-xs-8">
                @foreach($items as $item)
                <div class="row">
                    <div class="col-xs-3">
                        <img src="{{$item->image_url}}" style="width:100%;">
                    </div>
                    <div class="col-xs-9" style="padding:10px;">
                        <p>{{$item->description}}</p>
                        <p>{{$item->price}}</p>
                        <div class="row">
                            <div class="col-xs-5">
                                <input type="number" class="col-sm-3 input-sm form-control" placeholder="Qty">
                            </div>
                            <div class="col-xs-7">
                                <button class="btn btn-sm btn-success">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-xs-4 sidebar">
                <h4>Your Order</h4>
                <div class="row" ng-repeat="item in selectedFood">
                    <div class="col-xs-3">
                        <img src="http://static->dezeen->com/uploads/2013/03/dezeen_3D-printed-food-by-Janne-Kytannen_5->jpg" style="width:100%;">
                    </div>
                    <div class="col-xs-9" style="padding:10px;">
                        <p>Mock</p>
                        <p>SGD 100, 000</p>
                        <p>Qty: </p>
                        <button class="btn btn-sm btn-danger">Remove</button>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Confirm Order and Queue
                </button>
            </div>
        </div>
    </div>

    <tab heading="See the Queue List">
        <div class="row list">
            <div class="col-xs-10">
                <div class="headshot" style="background-image:url(../images/default-avatar.jpg);"></div>
                <h3>Name</h3>
                <p>Booking ID</p>
            </div>
            <div class="col-xs-2">
                <label class="label label-info">7 pax <span class="glyphicon glyphicon-user"></span></label>
            </div>
        </div>
    </tab>

    </tabset>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ready to Queue</h4>
                </div>
                <div class="modal-body">
                    <p>You want a table for
                        <input type="text" placeholder="2" size="2" style="text-align:center;outline:none;border: 1px solid #337ab7;"> person(s).</p>
                    <div class="divider"></div>
                    <p>You will receive a reminder 15 minutes before the table is ready for your dining at {{$merchantInfo->name}}</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="cust-name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email-adrress" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone-number" placeholder="Mobile Phone No.">
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary">Get Your Queue Number</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection