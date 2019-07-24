@extends('layouts.appnev')

@section('content')

	<!-- Add Collection Section -->
	<div class="row Add_collector">
		<div class="col-md-12">
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

			<form role="form" class="form-horizontal form-groups-bordered" action="{{ url('/add-collector-insert')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Collector Name
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" name="name" placeholder="Enter collector name" value="{{ old('name') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Collector Address
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" name="address" placeholder="Enter collector address" value="{{ old('address') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Collector Phone No
					</label>
					<div class="col-md-6">
						<input type="tel" pattern="[0-9]{11}" class="form-control" id="field-A" name="phone" placeholder="Enter collector phone no" value="{{ old('phone') }}">
						<br>
						<small class="text-muted">Example: 01722895295</small>
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Collector Email (Not required)
					</label>
					<div class="col-md-6">
						<input type="email" class="form-control" id="field-A" name="email" placeholder="Enter email address" value="{{ old('email') }}">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Collection Area (Not required)
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" name="area" placeholder="Enter collector's working area" value="{{ old('area') }}">
					</div>
				</div>

				<div class="Submit_Button_ col-md-6 text-right">
					<button class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Add Collector section Ends --


@endsection
