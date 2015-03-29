@extends('app')

@section('content')
<div class="container">
	<div class="panel">

		<div class="row list merchant-list" ng-repeat="merchant in merchantList">
			<div class="col-xs-3">
				<div class="merchant-img" style="background-image:url(http://media-cdn.tripadvisor.com/media/photo-s/04/78/3c/91/kfc-kentucky-fried-chicken.jpg)">
				</div>
			</div>
			<div class="col-xs-9">
				@foreach($merchants as $merchant)
				<div class="row">
					<div class="col-xs-9">
						<h3 class="merchant-name">{{$merchant->name}}</h3>
						<p class="merchant-desc">{{$merchant->description}}</p>
						<span class="glyphicon glyphicon-phone-alt push-right"></span>{{$merchant->phone_number}}<br/>
						<span class="glyphicon glyphicon glyphicon-envelope push-right"></span>{{$merchant->email}}
					</div>
					<div class="col-xs-3">
						<div class="merchant-queue-wrapper">
							<div class="merchant-queue">
								<h4><span>{{$merchant->queueing}} / {{$merchant->queue_size}}</span></h4>
								<label>in the queue</label>
							</div>
							<a href="/merchants/{{$merchant->id}}" class="btn-success btn-sm btn">Queue Now</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
