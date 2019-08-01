@extends('layouts.appnev')

@section('content')

	<!-- Add Collection Section -->
	<div class="row Add_collector">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">
					<div class="panel-heading">
						<div class="panel-title">
							Add Collector
						</div>
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg" ><i class="entypo-cog"></i ></a>
							<a href="{{ url('/list-collectors')}}" data-rel="list"><i class="entypo-list"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>

							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif
							@foreach ($errors->all() as $error)
								<div class="alert alert-danger">
									<li>{{ $error }}</li>
								</div>
							@endforeach
		

					<div class="panel-body">
						<form role="form" class="form-horizontal form-groups" action="{{ url('/add-collector-insert')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Collector Name
								</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="field-A" name="collector_name" placeholder="Enter collector name" value="{{ old('collector_name') }}">
								</div>
							</div>
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Collector Address
								</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="field-A" name="collector_address" placeholder="Enter collector address" value="{{ old('collector_address') }}">
								</div>
							</div>
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Collector Phone No
								</label>
								<div class="col-md-4">
									<input type="tel" pattern="[0-9]{11}" class="form-control" id="field-A" name="collector_phone" placeholder="Enter collector phone no" value="{{ old('collector_phone') }}">
								</div>
								<div class="col-md-4">
									<p class="text-muted">Example: 01722895296</p>
								</div>
							</div>
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Collector Email (Not required)
								</label>
								<div class="col-md-6">
									<input type="email" class="form-control" id="field-A" name="collector_email" placeholder="Enter email address" value="{{ old('collector_email') }}">
								</div>
							</div>
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Collection Area
								</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="field-A" name="collection_area" placeholder="Enter collector's working area" value="{{ old('collection_area') }}" required>
								</div>
							</div>

							<div class="Submit_Button_ col-md-6 text-right">
								<button class="btn btn-success">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
	</div>
	<!-- Add Collector section Ends --


@endsection
