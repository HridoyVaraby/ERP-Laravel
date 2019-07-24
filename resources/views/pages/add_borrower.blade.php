@extends('layouts.appnev')

@section('content')
	<div class="row Add_Borrower">
		<div class="col-md-12">
			<form role="form" class="form-horizontal form-groups-bordered">
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Name
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
						Phone
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label">
						Borrow Return
					</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="field-A" placeholder="Placeholder">
					</div>
				</div>

				<div class="Submit_Button_ col-md-6 text-right">
					<button class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Add Borrower section Ends -->
@endsection