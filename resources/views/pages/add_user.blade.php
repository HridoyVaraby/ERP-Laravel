@extends('layouts.appnev')

@section('content')
	
	<!-- Add Borrower Section -->
	<div class="row Add_collector">
		<div class="col-md-12">
			<form role="form" class="form-horizontal form-groups-bordered">
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Username
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Address
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Phone No
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Email Address*
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Required">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Select Role
					</label>
					<div class="col-md-6">
						<select name="role">
							<option value="manager">Manager</option>
							<option value="admin">Admin</option>
							</select>
					</div>
				</div>

				<div class="Submit_Button_ col-md-6 text-right">
					<button class="btn btn-success">Add User</button>
				</div>
			</form>
		</div>
	</div>
	

@endsection