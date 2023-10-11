@extends('layouts.ledger.master')

@section('title')Moon Extraction Breakdown
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Moon Extraction Breakdown</h3>
		@endslot
		<li class="breadcrumb-item">Home</li>
		<li class="breadcrumb-item">Extractions</li>
		<li class="breadcrumb-item active">Moon Extraction Breakdown</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
            		<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Moon Extraction Breakdown</h5>
						<span>The Moon Breakdown is calculated on refined mineral and moon goo values from Jita's 7 day rolling average at max refine of 89.34%</span>
					</div>
					<div class="table-responsive">
						<table class="table table-border-horizontal">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
									<th scope="col">Role</th>
									<th scope="col">Country</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">5</th>
									<td>Ram Jacob</td>
									<td>Thornton</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>IND</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection