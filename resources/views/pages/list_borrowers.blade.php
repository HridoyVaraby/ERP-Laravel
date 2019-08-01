@extends('layouts.appnev')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">List of borrowers</div>

					<div class="panel-options">
						<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
						<a href="{{ url('/add-borrower')}}" data-rel="plus"><i class="entypo-plus"></i></a>
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>

				@if (session('delete_status'))
					<div class="alert alert-danger">
						{{ session('delete_status') }}
					</div>
				@endif
						
				<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>#</th>
							<th>borrower Name</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@forelse ($borrowers as $borrower)
						<tr>
							<td>{{$loop->index + 1}}</td>
							<td>{{$borrower->borrower_name}}</td>
							<td>{{$borrower->borrower_address}}</td>
							<td>0{{$borrower->borrower_phone}}</td>
							<td class="btn-group">
								<a href="{{ url('/edit/product') }}/{{$borrower->id}}" class="btn btn-sm btn-info">Edit</a>
								<a href="{{ url('/delete/product') }}/{{$borrower->id}}" class="btn btn-sm btn-danger">Delete</a>
							</td>
						</tr>
						@empty
							<tr class="text-center">
								<td colspan="5">No data found.</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>

		</div>

	</div>


@endsection