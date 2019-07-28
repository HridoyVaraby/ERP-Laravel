@extends('layouts.appnev')

@section('content')
	
	<!-- Add Company Details Section Section -->
	<div class="row Add_company_details">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary" data-collapsed="0">
					<div class="panel-heading">
						<div class="panel-title">
							Edit Company Details
						</div>
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg" ><i class="entypo-cog"></i ></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>

						@if (session('updatestatus'))
							<div class="alert alert-success">
								{{ session('updatestatus') }}
							</div>
						@endif
						@foreach ($errors->all() as $error)
							<div class="alert alert-danger">
								<li>{{ $error }}</li>
							</div>
						@endforeach
		

					<div class="panel-body">
						<form role="form" class="form-horizontal form-groups" action="{{ url('/add-company-insert')}}" method="post" enctype="multipart/form-data" >
							@csrf
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Company Name
								</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="field-A" name="company_name" value="{{ $single_company_info->company_name }}" >
								</div>
							</div>
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Company Address
								</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="field-A" name="company_address" value="{{ $single_company_info->company_address }}" >
								</div>
							</div>
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Company Phone No
								</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="field-A" name="company_phone" value="{{ $single_company_info->company_phone }}">
								</div>
							</div>
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Company Email Address
								</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="field-A" name="company_email" value="{{ $single_company_info->company_email }}" >
								</div>
							</div>
								<input type="hidden" class="form-control" id="field-A" name="id" value="{{ $single_company_info->id }}" >

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">
									Upload Company Logo
								</label>
								<div class="col-md-6">
									<input type="file" name="logo" accept="image/*" class="form-control-file" id="field-A" value="{{ $single_company_info->logo }}">
								</div>
								<img src="{{asset('assets/images')}}/{{ $single_company_info->logo }}" alt="">
							</div> 

							<div class="Submit_Button_ col-md-6 text-right">
								<button class="btn btn-success">Submit</button>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection