@extends('layouts.appnev')

@section('content')
	
	<div class="row">
		<div class="col-sm-12">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">List of Collectors</div>

					<div class="panel-options">
						<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
						<a href="{{ url('/add-collector')}}" data-rel="plus"><i class="entypo-plus"></i></a>
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
							<th>Collector Name</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Collection Area</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						@forelse ($collectors as $collector)
						<tr>
							<td>{{$loop->index + 1}}</td>
							<td>{{$collector->collector_name}}</td>
							<td>{{$collector->collector_address}}</td>
							<td>0{{$collector->collector_phone}}</td>
							<td>{{$collector->collector_email}}</td>
							<td>{{$collector->collection_area}}</td>
							<th class="btn-group">
								<a href="{{ url('/edit/product') }}/{{$collector->id}}" class="btn btn-sm btn-info">Edit</a>
								<a href="{{ url('/delete/product') }}/{{$collector->id}}" class="btn btn-sm btn-danger">Delete</a>
							</th>
						</tr>
						@empty
							<tr class="text-center">
								<td colspan="7">No data found.</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>

		</div>

	</div>


@endsection