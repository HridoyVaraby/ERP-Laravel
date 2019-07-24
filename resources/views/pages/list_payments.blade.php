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
							<th>Date</th>
							<th>Borrower Name</th>
							<th>Payment Amount</th>
							<th>Remaining Due</th>
							<th>Collector Name</th>
						</tr>
					</thead>
	
					<tbody>
						<tr>
							<td>1</td>
							<td>02-06-2019</td>
							<td>Sakib Al Hasan</td>
							<td>750</td>
							<td>29250</td>
							<td>Khudesa Begum </td>								
						</tr>
	
						<tr>
							<td>1</td>
							<td>02-06-2019</td>
							<td>Sakib Al Hasan</td>
							<td>750</td>
							<td>29250</td>
							<td>Khudesa Begum </td>								
						</tr>

						<tr>
							<td>1</td>
							<td>02-06-2019</td>
							<td>Sakib Al Hasan</td>
							<td>750</td>
							<td>29250</td>
							<td>Khudesa Begum </td>								
						</tr>

						<tr>
							<td>1</td>
							<td>02-06-2019</td>
							<td>Sakib Al Hasan</td>
							<td>750</td>
							<td>29250</td>
							<td>Khudesa Begum </td>								
						</tr>
						
					</tbody>
				</table>
			</div>
	
		</div>
	
	</div>
	
	<br />

@endsection