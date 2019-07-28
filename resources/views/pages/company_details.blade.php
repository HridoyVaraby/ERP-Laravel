@extends('layouts.appnev')

@section('content')
	
	<!-- Add Company Details Section Section -->
	<div class="row Add_company_details">
		<div class="col-md-12">
			<form role="form" class="form-horizontal form-groups-bordered">
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Company Name
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Company Address
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Company Phone No
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Company Email Address
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<!--<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Upload Company Logo
					</label>
					<div class="col-md-6">
						<input type="file" name="logo" accept="image/*" class="form-control-file" id="field-A">
					</div>
				</div> -->

				<div class="Submit_Button_ col-md-6 text-right">
					<button class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Add Company Details Section Section Ends -->

@endsection