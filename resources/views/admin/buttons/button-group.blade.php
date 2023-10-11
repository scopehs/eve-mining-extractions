@extends('layouts.admin.master')

@section('title')Button Group
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Button Group</h3>
		@endslot
		<li class="breadcrumb-item">Buttons</li>
		<li class="breadcrumb-item active">Button Group</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Basic button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-primary" type="button">Left</button>
									<button class="btn btn-primary" type="button">Middle</button>
									<button class="btn btn-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-secondary" type="button">Left</button>
									<button class="btn btn-secondary" type="button">Middle</button>
									<button class="btn btn-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-success" type="button">Left</button>
									<button class="btn btn-success" type="button">Middle</button>
									<button class="btn btn-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-info" type="button">Left</button>
									<button class="btn btn-info" type="button">Middle</button>
									<button class="btn btn-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-warning" type="button">Left</button>
									<button class="btn btn-warning" type="button">Middle</button>
									<button class="btn btn-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-danger" type="button">Left</button>
									<button class="btn btn-danger" type="button">Middle</button>
									<button class="btn btn-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-light" type="button">Left</button>
									<button class="btn btn-light" type="button">Middle</button>
									<button class="btn btn-light" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-dark" type="button">Left</button>
									<button class="btn btn-dark" type="button">Middle</button>
									<button class="btn btn-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Edges button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-primary" type="button">Left</button>
									<button class="btn btn-primary" type="button">Middle</button>
									<button class="btn btn-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-secondary" type="button">Left</button>
									<button class="btn btn-secondary" type="button">Middle</button>
									<button class="btn btn-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-success" type="button">Left</button>
									<button class="btn btn-success" type="button">Middle</button>
									<button class="btn btn-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-info" type="button">Left</button>
									<button class="btn btn-info" type="button">Middle</button>
									<button class="btn btn-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-warning" type="button">Left</button>
									<button class="btn btn-warning" type="button">Middle</button>
									<button class="btn btn-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-danger" type="button">Left</button>
									<button class="btn btn-danger" type="button">Middle</button>
									<button class="btn btn-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-light" type="button">Left</button>
									<button class="btn btn-light" type="button">Middle</button>
									<button class="btn btn-light" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-dark" type="button">Left</button>
									<button class="btn btn-dark" type="button">Middle</button>
									<button class="btn btn-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Flat button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-primary" type="button">Left</button>
									<button class="btn btn-primary" type="button">Middle</button>
									<button class="btn btn-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-secondary" type="button">Left</button>
									<button class="btn btn-secondary" type="button">Middle</button>
									<button class="btn btn-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-success" type="button">Left</button>
									<button class="btn btn-success" type="button">Middle</button>
									<button class="btn btn-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-info" type="button">Left</button>
									<button class="btn btn-info" type="button">Middle</button>
									<button class="btn btn-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-dark" type="button">Left</button>
									<button class="btn btn-dark" type="button">Middle</button>
									<button class="btn btn-dark" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-warning" type="button">Left</button>
									<button class="btn btn-warning" type="button">Middle</button>
									<button class="btn btn-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-danger" type="button">Left</button>
									<button class="btn btn-danger" type="button">Middle</button>
									<button class="btn btn-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-light" type="button">Left</button>
									<button class="btn btn-light" type="button">Middle</button>
									<button class="btn btn-light" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-dark" type="button">Left</button>
									<button class="btn btn-dark" type="button">Middle</button>
									<button class="btn btn-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>large Button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-primary btn-lg" type="button">Left</button>
									<button class="btn btn-primary btn-lg" type="button">Middle</button>
									<button class="btn btn-primary btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-secondary btn-lg" type="button">Left</button>
									<button class="btn btn-secondary btn-lg" type="button">Middle</button>
									<button class="btn btn-secondary btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-success btn-lg" type="button">Left</button>
									<button class="btn btn-success btn-lg" type="button">Middle</button>
									<button class="btn btn-success btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-info btn-lg" type="button">Left</button>
									<button class="btn btn-info btn-lg" type="button">Middle</button>
									<button class="btn btn-info btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-warning btn-lg" type="button">Left</button>
									<button class="btn btn-warning btn-lg" type="button">Middle</button>
									<button class="btn btn-warning btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-danger btn-lg" type="button">Left</button>
									<button class="btn btn-danger btn-lg" type="button">Middle</button>
									<button class="btn btn-danger btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-light btn-lg" type="button">Left</button>
									<button class="btn btn-light btn-lg" type="button">Middle</button>
									<button class="btn btn-light btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-dark btn-lg" type="button">Left</button>
									<button class="btn btn-dark btn-lg" type="button">Middle</button>
									<button class="btn btn-dark btn-lg" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>large Edges Button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-primary btn-lg" type="button">Left</button>
									<button class="btn btn-primary btn-lg" type="button">Middle</button>
									<button class="btn btn-primary btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-secondary btn-lg" type="button">Left</button>
									<button class="btn btn-secondary btn-lg" type="button">Middle</button>
									<button class="btn btn-secondary btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-success btn-lg" type="button">Left</button>
									<button class="btn btn-success btn-lg" type="button">Middle</button>
									<button class="btn btn-success btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-info btn-lg" type="button">Left</button>
									<button class="btn btn-info btn-lg" type="button">Middle</button>
									<button class="btn btn-info btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-warning btn-lg" type="button">Left</button>
									<button class="btn btn-warning btn-lg" type="button">Middle</button>
									<button class="btn btn-warning btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-danger btn-lg" type="button">Left</button>
									<button class="btn btn-danger btn-lg" type="button">Middle</button>
									<button class="btn btn-danger btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-light btn-lg" type="button">Left</button>
									<button class="btn btn-light btn-lg" type="button">Middle</button>
									<button class="btn btn-light btn-lg" type="button">Right</button>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-dark btn-lg" type="button">Left</button>
									<button class="btn btn-dark btn-lg" type="button">Middle</button>
									<button class="btn btn-dark btn-lg" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Outline Custom button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-primary" type="button">Left</button>
									<button class="btn btn-primary" type="button">Middle</button>
									<button class="btn btn-outline-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-secondary" type="button">Left</button>
									<button class="btn btn-secondary" type="button">Middle</button>
									<button class="btn btn-outline-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-success" type="button">Left</button>
									<button class="btn btn-success" type="button">Middle</button>
									<button class="btn btn-outline-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-info" type="button">Left</button>
									<button class="btn btn-info" type="button">Middle</button>
									<button class="btn btn-outline-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-warning" type="button">Left</button>
									<button class="btn btn-warning" type="button">Middle</button>
									<button class="btn btn-outline-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-danger" type="button">Left</button>
									<button class="btn btn-danger" type="button">Middle</button>
									<button class="btn btn-outline-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-light txt-dark" type="button">Left</button>
									<button class="btn btn-light" type="button">Middle</button>
									<button class="btn btn-outline-light txt-dark" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-dark" type="button">Left</button>
									<button class="btn btn-dark" type="button">Middle</button>
									<button class="btn btn-outline-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Outline custom button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-primary" type="button">Left</button>
									<button class="btn btn-outline-primary" type="button">Middle</button>
									<button class="btn btn-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-secondary" type="button">Left</button>
									<button class="btn btn-outline-secondary" type="button">Middle</button>
									<button class="btn btn-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-success" type="button">Left</button>
									<button class="btn btn-outline-success" type="button">Middle</button>
									<button class="btn btn-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-info" type="button">Left</button>
									<button class="btn btn-outline-info" type="button">Middle</button>
									<button class="btn btn-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-warning" type="button">Left</button>
									<button class="btn btn-outline-warning" type="button">Middle</button>
									<button class="btn btn-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-danger" type="button">Left</button>
									<button class="btn btn-outline-danger" type="button">Middle</button>
									<button class="btn btn-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-light" type="button">Left</button>
									<button class="btn btn-outline-light txt-dark" type="button">Middle</button>
									<button class="btn btn-light" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-dark" type="button">Left</button>
									<button class="btn btn-outline-dark" type="button">Middle</button>
									<button class="btn btn-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Outline button group</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-primary" type="button">Left</button>
									<button class="btn btn-outline-primary" type="button">Middle</button>
									<button class="btn btn-outline-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-secondary" type="button">Left</button>
									<button class="btn btn-outline-secondary" type="button">Middle</button>
									<button class="btn btn-outline-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-success" type="button">Left</button>
									<button class="btn btn-outline-success" type="button">Middle</button>
									<button class="btn btn-outline-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-info" type="button">Left</button>
									<button class="btn btn-outline-info" type="button">Middle</button>
									<button class="btn btn-outline-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-warning" type="button">Left</button>
									<button class="btn btn-outline-warning" type="button">Middle</button>
									<button class="btn btn-outline-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-danger" type="button">Left</button>
									<button class="btn btn-outline-danger" type="button">Middle</button>
									<button class="btn btn-outline-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-light txt-dark" type="button">Left</button>
									<button class="btn btn-outline-light txt-dark" type="button">Middle</button>
									<button class="btn btn-outline-light txt-dark" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button class="btn btn-outline-dark" type="button">Left</button>
									<button class="btn btn-outline-dark" type="button">Middle</button>
									<button class="btn btn-outline-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Outline Edges button</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-primary" type="button">Left</button>
									<button class="btn btn-outline-primary" type="button">Middle</button>
									<button class="btn btn-outline-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-secondary" type="button">Left</button>
									<button class="btn btn-outline-secondary" type="button">Middle</button>
									<button class="btn btn-outline-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-success" type="button">Left</button>
									<button class="btn btn-outline-success" type="button">Middle</button>
									<button class="btn btn-outline-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-info" type="button">Left</button>
									<button class="btn btn-outline-info" type="button">Middle</button>
									<button class="btn btn-outline-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-warning" type="button">Left</button>
									<button class="btn btn-outline-warning" type="button">Middle</button>
									<button class="btn btn-outline-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-danger" type="button">Left</button>
									<button class="btn btn-outline-danger" type="button">Middle</button>
									<button class="btn btn-outline-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-light txt-dark" type="button">Left</button>
									<button class="btn btn-outline-light txt-dark" type="button">Middle</button>
									<button class="btn btn-outline-light txt-dark" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-group-pill" role="group" aria-label="Basic example">
									<button class="btn btn-outline-dark" type="button">Left</button>
									<button class="btn btn-outline-dark" type="button">Middle</button>
									<button class="btn btn-outline-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Outline flat button</h5>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-primary" type="button">Left</button>
									<button class="btn btn-outline-primary" type="button">Middle</button>
									<button class="btn btn-outline-primary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-secondary" type="button">Left</button>
									<button class="btn btn-outline-secondary" type="button">Middle</button>
									<button class="btn btn-outline-secondary" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-success" type="button">Left</button>
									<button class="btn btn-outline-success" type="button">Middle</button>
									<button class="btn btn-outline-success" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-info" type="button">Left</button>
									<button class="btn btn-outline-info" type="button">Middle</button>
									<button class="btn btn-outline-info" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-warning" type="button">Left</button>
									<button class="btn btn-outline-warning" type="button">Middle</button>
									<button class="btn btn-outline-warning" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-danger" type="button">Left</button>
									<button class="btn btn-outline-danger" type="button">Middle</button>
									<button class="btn btn-outline-danger" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-light txt-dark" type="button">Left</button>
									<button class="btn btn-outline-light txt-dark" type="button">Middle</button>
									<button class="btn btn-outline-light txt-dark" type="button">Right</button>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-group-square" role="group" aria-label="Basic example">
									<button class="btn btn-outline-dark" type="button">Left</button>
									<button class="btn btn-outline-dark" type="button">Middle</button>
									<button class="btn btn-outline-dark" type="button">Right</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Radio button group</h5>
						<span>Add <code>.active</code> for active state and<code>.disabled</code> class or <code>disabled="disabled"</code> attribute</span>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-radio">
									<div class="btn-group" data-bs-toggle="buttons">
										<div class="btn btn-primary">
											<div class="radio radio-primary">
												<input id="radio7" type="radio" name="radio1" value="option1" />
												<label for="radio7">Option 1</label>
											</div>
										</div>
										<div class="btn btn-primary active">
											<div class="radio radio-primary">
												<input id="radio8" type="radio" name="radio1" value="option1" checked="" />
												<label for="radio8">Option 2</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-radio">
									<div class="btn-group" data-bs-toggle="buttons">
										<div class="btn btn-secondary">
											<div class="radio radio-secondary">
												<input id="radio11" type="radio" name="radio2" value="option1" />
												<label for="radio11">Option 1</label>
											</div>
										</div>
										<div class="btn btn-secondary active">
											<div class="radio radio-secondary">
												<input id="radio12" type="radio" name="radio2" value="option1" checked="" />
												<label for="radio12">Option 2</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-radio">
									<div class="btn-group" data-bs-toggle="buttons">
										<div class="btn btn-success">
											<div class="radio radio-success">
												<input id="radio13" type="radio" name="radio3" value="option1" />
												<label for="radio13">Option 1</label>
											</div>
										</div>
										<div class="btn btn-success active">
											<div class="radio radio-success">
												<input id="radio14" type="radio" name="radio3" value="option1" checked="" />
												<label for="radio14">Option 2</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-radio">
									<div class="btn-group" data-bs-toggle="buttons">
										<div class="btn btn-info">
											<div class="radio radio-info">
												<input id="radio15" type="radio" name="radio4" value="option1" />
												<label for="radio15">Option 1</label>
											</div>
										</div>
										<div class="btn btn-info active">
											<div class="radio radio-info">
												<input id="radio16" type="radio" name="radio4" value="option1" checked="" />
												<label for="radio16">Option 2</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-radio">
									<div class="btn-group" data-bs-toggle="buttons">
										<div class="btn btn-warning">
											<div class="radio radio-warning">
												<input id="radio17" type="radio" name="radio5" value="option1" />
												<label for="radio17">Option 1</label>
											</div>
										</div>
										<div class="btn btn-warning active">
											<div class="radio radio-warning">
												<input id="radio18" type="radio" name="radio5" value="option1" checked="" />
												<label for="radio18">Option 2</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12">
								<div class="btn-radio">
									<div class="btn-group" data-bs-toggle="buttons">
										<div class="btn btn-danger">
											<div class="radio radio-danger">
												<input id="radio20" type="radio" name="radio6" value="option1" />
												<label for="radio20">Option 1</label>
											</div>
										</div>
										<div class="btn btn-danger active">
											<div class="radio radio-danger">
												<input id="radio22" type="radio" name="radio6" value="option1" checked="" />
												<label for="radio22">Option 2</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-4 col-md-6 col-sm-12 button-group-mb-sm">
								<div class="btn-radio">
									<div class="btn-group" data-bs-toggle="buttons">
										<div class="btn btn-light txt-dark">
											<div class="radio radio-light">
												<input id="radio23" type="radio" name="radio7" value="option1" />
												<label for="radio23">Option 1</label>
											</div>
										</div>
										<div class="btn btn-light active txt-dark">
											<div class="radio radio-light">
												<input id="radio24" type="radio" name="radio7" value="option1" checked="" />
												<label for="radio24">Option 2</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5>Check Box button group</h5>
						<span>Add <code>.active</code> for active state and <code>.disabled</code> class or <code>disabled="disabled"</code> attribute</span>
					</div>
					<div class="card-body btn-group-showcase">
						<div class="row">
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-option" data-bs-toggle="buttons">
									<div class="btn btn-primary">
										<div class="checkbox checkbox-primary">
											<input id="checkbox-primary-1" type="checkbox" />
											<label for="checkbox-primary-1">Option 1</label>
										</div>
									</div>
									<div class="btn btn-primary">
										<div class="checkbox checkbox-primary">
											<input id="checkbox-primary-2" type="checkbox" />
											<label for="checkbox-primary-2">Option 2</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-option" data-bs-toggle="buttons">
									<div class="btn btn-secondary">
										<div class="checkbox checkbox-secondary">
											<input id="checkbox-primary-3" type="checkbox" />
											<label for="checkbox-primary-3">Option 1</label>
										</div>
									</div>
									<div class="btn btn-secondary">
										<div class="checkbox checkbox-secondary">
											<input id="checkbox-primary-4" type="checkbox" />
											<label for="checkbox-primary-4">Option 2</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-option" data-bs-toggle="buttons">
									<div class="btn btn-success">
										<div class="checkbox checkbox-success">
											<input id="checkbox-primary-5" type="checkbox" />
											<label for="checkbox-primary-5">Option 1</label>
										</div>
									</div>
									<div class="btn btn-success">
										<div class="checkbox checkbox-success">
											<input id="checkbox-primary-6" type="checkbox" />
											<label for="checkbox-primary-6">Option 2</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-option" data-bs-toggle="buttons">
									<div class="btn btn-info">
										<div class="checkbox checkbox-info">
											<input id="checkbox-primary-7" type="checkbox" />
											<label for="checkbox-primary-7">Option 1</label>
										</div>
									</div>
									<div class="btn btn-info">
										<div class="checkbox checkbox-info">
											<input id="checkbox-primary-8" type="checkbox" />
											<label for="checkbox-primary-8">Option 2</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-option" data-bs-toggle="buttons">
									<div class="btn btn-warning">
										<div class="checkbox checkbox-warning">
											<input id="checkbox-warning-9" type="checkbox" />
											<label for="checkbox-warning-9">Option 1</label>
										</div>
									</div>
									<div class="btn btn-warning">
										<div class="checkbox checkbox-warning">
											<input id="checkbox-warning-10" type="checkbox" />
											<label for="checkbox-warning-10">Option 2</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12">
								<div class="btn-group btn-option" data-bs-toggle="buttons">
									<div class="btn btn-danger">
										<div class="checkbox checkbox-danger">
											<input id="checkbox-danger-11" type="checkbox" />
											<label for="checkbox-danger-11">Option 1</label>
										</div>
									</div>
									<div class="btn btn-danger">
										<div class="checkbox checkbox-danger">
											<input id="checkbox-danger-12" type="checkbox" />
											<label for="checkbox-danger-12">Option 2</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-12 button-group-mb-sm">
								<div class="btn-group btn-option" data-bs-toggle="buttons">
									<div class="btn btn-light txt-dark">
										<div class="checkbox checkbox-light">
											<input id="checkbox-light-13" type="checkbox" />
											<label for="checkbox-light-13">Option 1</label>
										</div>
									</div>
									<div class="btn btn-light txt-dark">
										<div class="checkbox checkbox-light">
											<input id="checkbox-light-14" type="checkbox" />
											<label for="checkbox-light-14">Option 2</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card height-equal">
					<div class="card-header">
						<h5>Nesting</h5>
						<span>Make nesting buttons</span>
					</div>
					<div class="card-body btn-group-wrapper">
						<div class="m-b-30">
							<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
								<button class="btn btn-primary"><i class="fa fa-bold"></i></button>
								<button class="btn btn-secondary"><i class="fa fa fa-italic"></i></button>
								<div class="btn-group" role="group">
									<button class="btn btn-light dropdown-toggle" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
									<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="#">Dropdown link</a><a class="dropdown-item" href="#">Dropdown link</a><a class="dropdown-item" href="#">Dropdown link</a><a class="dropdown-item" href="#">Dropdown link</a>
									</div>
								</div>
							</div>
						</div>
						<div class="m-b-30">
							<div class="btn-group">
								<button class="btn btn-primary"><i class="fa fa-bold"></i></button>
								<button class="btn btn-secondary"><i class="fa fa fa-italic"></i></button>
								<button class="btn btn-success"><i class="fa fa-file-image-o"></i></button>
								<button class="btn btn-info"><i class="fa fa-paperclip"></i></button>
							</div>
						</div>
						<div class="m-b-30">
							<div class="btn-group">
								<button class="btn btn-primary btn-lg"><i class="fa fa-bold"></i></button>
								<button class="btn btn-secondary btn-lg"><i class="fa fa fa-italic"></i></button>
								<button class="btn btn-success btn-lg"><i class="fa fa-file-image-o"></i></button>
								<button class="btn btn-info btn-lg"><i class="fa fa-paperclip"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card height-equal">
					<div class="card-header">
						<h5>Vertical</h5>
						<span>Make vertical buttons</span>
					</div>
					<div class="card-body btn-group-wrapper">
						<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
							<button class="btn btn-primary" type="button">Button</button>
							<button class="btn btn-secondary" type="button">Button</button>
							<div class="btn-group" role="group">
								<button class="btn btn-success dropdown-toggle" id="btnGroupVerticalDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
								<div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"><a class="dropdown-item" href="#">Dropdown link</a><a class="dropdown-item" href="#">Dropdown link</a></div>
							</div>
							<button class="btn btn-info" type="button">Button</button>
							<button class="btn btn-warning" type="button">Button</button>
							<div class="btn-group" role="group">
								<button class="btn btn-danger dropdown-toggle" id="btnGroupVerticalDrop2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
								<div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"><a class="dropdown-item" href="#">Dropdown link</a><a class="dropdown-item" href="#">Dropdown link</a></div>
							</div>
							<div class="btn-group" role="group">
								<button class="btn btn-light dropdown-toggle" id="btnGroupVerticalDrop3" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
								<div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3"><a class="dropdown-item" href="#">Dropdown link</a><a class="dropdown-item" href="#">Dropdown link</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{ asset('assets/js/height-equal.js') }}"></script>
	@endpush

@endsection