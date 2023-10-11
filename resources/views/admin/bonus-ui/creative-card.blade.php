@extends('layouts.admin.master')

@section('title')Creative Card
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Creative Card</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
		<li class="breadcrumb-item active">Creative Card</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-l-primary">
						<h5>Border left</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-r-secondary">
						<h5>Border right</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-t-success">
						<h5>Border top</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-b-info">
						<h5>Border bottom</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-l-warning">
						<h5>Border color state</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-l-danger">
						<h5>Border color state</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-l-light">
						<h5>Border color state</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-l-primary">
						<h5>Border color state</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-l-secondary border-2">
						<h5>Border color state</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header b-l-primary border-3">
						<h5>Border color state</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card card-absolute">
					<div class="card-header bg-primary">
						<h5 class="text-white">Absolute Style</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card card-absolute">
					<div class="card-header bg-secondary">
						<h5 class="text-white">Color state</h5>
					</div>
					<div class="card-body">
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	

@push('scripts') 
@endpush

@endsection