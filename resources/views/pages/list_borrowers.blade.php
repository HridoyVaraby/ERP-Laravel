@extends('layouts.appnev')

@section('content')
	
	<!--main body-->
	<div class="row">
		<div class="col-sm-12">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">List of Borrowers</div>

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
							<th>Name</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Loan Taken (BDT)</th>
							<th>Pending Loan (BDT)</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>1</td>
							<td>Sakib Al Hasan</td>
							<td>Dhaka</td>
							<td>01737010194</td>
							<td>30,000 </td>
							<td>20,000 </td>
							
						</tr>

						<tr>
							<td>1</td>
							<td>Sakib Al Hasan</td>
							<td>Dhaka</td>
							<td>01737010194</td>
							<td>30,000 </td>
							<td>20,000</td>
						</tr>

						<tr>
							<td>1</td>
							<td>Sakib Al Hasan</td>
							<td>Dhaka</td>
							<td>01737010194</td>
							<td>30,000 </td>
							<td>20,000 </td>
						</tr>
						<tr>
							<td>1</td>
							<td>Sakib Al Hasan</td>
							<td>Dhaka</td>
							<td>01737010194</td>
							<td>30,000</td>
							<td>20,000</td>
						</tr>
						
					</tbody>
				</table>
			</div>

		</div>

	</div>


@endsection