@extends('layouts.admin.master')

@section('title')Styling Tables
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Bootstrap Styling Tables</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Styling Tables</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Defult Styling</h5>
						<span>use class <code>table table-styling</code> inside table element</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table table-styling">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Table head options</h5>
						<span>Use class<code>.table-primary</code> inside thead tr element.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="table-primary">
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Table head options With Primary Background</h5>
						<span>
							Use background classes<code>.bg-*</code>and <code>table-primary</code>,<code>table-secondary</code>,<code>table-success</code>,<code>table-danger</code> ,<code>table-info</code>,<code>table-warning</code> to make
							custom <code>thead</code> background. You can also use Stack Admin color palette classes for background.
						</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="bg-primary">
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive">
								<table class="table">
									<thead class="table-success">
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Table Footer Styling</h5>
						<span>
							Use class
							<code>table-info</code>
							,<code>table-success</code>,<code>table-success</code>,<code>table-info</code>,<code>table-danger</code>,<code>table-primary</code>,<code>table-secondary</code>,<code>table-light</code>,<code>table-active</code>and
							also use <code>bg-*</code> inside tfoot element.
						</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive table-border-radius">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
									</tbody>
									<tfoot class="table-success">
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Custom Table Color</h5>
						<span>Use class<code>table-*</code> inside table element.</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive table-border-radius">
								<table class="table table-styling table-primary">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Custom Table Color with Hover and Stripped</h5>
						<span>
							Use class<code>table-hover, table-striped table-*</code>
							<code>table-info</code>,<code>table-success</code>,<code>table-success</code>,<code>table-info</code>,<code>table-danger</code>,<code>table-primary</code>,<code>table-secondary</code>,<code>table-light</code>,
							<code>table-active</code> inside table element.
						</span>
					</div>
					<div class="card-block row">
						<div class="col-sm-12 col-lg-12 col-xl-12">
							<div class="table-responsive table-border-radius">
								<table class="table table-styling table-hover table-striped table-primary">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">First Name</th>
											<th scope="col">Last Name</th>
											<th scope="col">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry</td>
											<td>the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	@endpush

@endsection