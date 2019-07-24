@extends('layouts.appnev')

@section('content')
	
	<!--main body-->
	<div class="row">
		<div class="col-sm-12">
	
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">List of User</div>
	
					<div class="panel-options">
						<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>
	
				<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Role</th>
						</tr>
					</thead>
	
					<tbody>
						<tr>
							<td>1</td>
							<td>Hridoy Varaby</td>
							<td>hridoy@varabit.com</td>
							<td>01722895295</td>
							<td>Admin</td>
						</tr>
	
						<tr>
							<td>1</td>
							<td>Towhidul Islam Bilash</td>
							<td>Dhaka</td>
							<td>01737010144</td>
							<td>Admin</td>
						</tr>

						<tr>
							<td>1</td>
							<td>Muine Al Yamine</td>
							<td>Sherpur</td>
							<td>01737010125</td>
							<td>Manager</td>
						</tr>	
					</tbody>
				</table>
			</div>
	
		</div>
	
	</div>

@endsection