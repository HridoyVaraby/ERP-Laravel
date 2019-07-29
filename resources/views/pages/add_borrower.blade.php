@extends('layouts.appnev')

@section('content')
<!-- Add Borrower Section -->
<div class="row Add_borrower">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						Add Borrower
					</div>
					<div class="panel-options">
						<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg" ><i class="entypo-cog"></i ></a>
						<a href="{{ url('/list-borrowers')}}" data-rel="list"><i class="entypo-list"></i></a>
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
					<form role="form" class="form-horizontal form-groups" action="{{ url('/add-borrower-insert')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">
								Borrower Name
							</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="field-A" name="borrower_name" placeholder="Enter borrower name" value="{{ old('borrower_name') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">
								Borrower Address
							</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="field-A" name="borrower_address" placeholder="Enter borrower address" value="{{ old('borrower_address') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">
								Borrower Phone No
							</label>
							<div class="col-md-4">
								<input type="tel" pattern="[0-9]{11}" class="form-control" id="field-A" name="borrower_phone" placeholder="Enter borrower phone no" value="{{ old('borrower_phone') }}">
							</div>
							<div class="col-md-4">
								<p class="text-muted">Example: 01722895296</p>
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
<!-- Add borrower section Ends --

@endsection