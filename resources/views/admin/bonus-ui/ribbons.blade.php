@extends('layouts.admin.master')

@section('title')Ribbons
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Ribbons</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
		<li class="breadcrumb-item active">Ribbons</li>
	@endcomponent

	<div class="container-fluid">
		<!-- ribbon left (default) side-->
		<div class="row">
			<div class="col-sm-12 col-xl-12">
				<div class="card">
					<div class="card-header">
						<h5>Colored breadcrumb</h5>
						<span>use class <code>.breadcrumb-colored .bg-primary</code></span>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="card ribbon-wrapper">
									<div class="card-body">
										<div class="ribbon ribbon-primary ribbon-space-bottom">Ribbon</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="card ribbon-wrapper">
									<div class="card-body">
										<div class="ribbon ribbon-primary ribbon-space-bottom">Ribbon</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="card ribbon-wrapper">
									<div class="card-body">
										<div class="ribbon ribbon-primary ribbon-space-bottom">Ribbon</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- demo ribbon end here-->
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-primary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-secondary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-success">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-info">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-warning">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-danger">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ribbon right side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-primary ribbon-right">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-secondary ribbon-right">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-success ribbon-right">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-info ribbon-right">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-warning ribbon-right">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-danger ribbon-right">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ribbon vertical left side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-left-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-primary ribbon-vertical-left"><i class="icofont icofont-love"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-left-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-secondary ribbon-vertical-left"><i class="icon-gift"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-left-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-success ribbon-vertical-left"><i class="icon-signal"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ribbon vertical right side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-right-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-primary ribbon-vertical-right"><i class="fa fa-chain-broken"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-right-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-secondary ribbon-vertical-right"><i class="fa fa-ticket"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-right-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-success ribbon-vertical-right"><i class="fa fa-taxi"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- bookmark ribbon left side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-primary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-secondary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-success">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- bookmark ribbon right side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-right card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-right ribbon-primary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-right card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-right ribbon-secondary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-right card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-right ribbon-success">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ribbon bookmark vertical left side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-left-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i class="icofont icofont-love"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-left-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-secondary"><i class="icon-gift"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-left-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-success"><i class="icon-signal"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ribbon bookmark vertical right side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-right-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-primary"><i class="icofont icofont-love"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-right-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-secondary"><i class="icon-gift"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-vertical-right-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-success"><i class="icon-signal"></i></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- bookmark ribbon left side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-clip ribbon-primary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-clip ribbon-secondary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper card">
					<div class="card-body">
						<div class="ribbon ribbon-clip ribbon-success">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- bookmark ribbon right side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-right card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-right ribbon-right ribbon-primary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-right card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-right ribbon-right ribbon-secondary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-right card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-right ribbon-right ribbon-success">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- bookmark ribbon left side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-bottom card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-bottom ribbon-primary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-bottom card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-bottom ribbon-secondary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-bottom card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-bottom ribbon-success">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- bookmark ribbon left side-->
		<div class="row">
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-bottom card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-bottom-right ribbon-primary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-bottom card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-bottom-right ribbon-secondary">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-14 col-md-6 col-lg-4">
				<div class="ribbon-wrapper-bottom card">
					<div class="card-body">
						<div class="ribbon ribbon-clip-bottom-right ribbon-success">Ribbon</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
					</div>
				</div>
			</div>
		</div>
	</div>	

@push('scripts') 
@endpush

@endsection