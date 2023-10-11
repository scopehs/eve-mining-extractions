@extends('layouts.admin.master')

@section('title')Steps
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Steps</h3>
		@endslot
		<li class="breadcrumb-item">Advance</li>
		<li class="breadcrumb-item active">Steps</li>
	@endcomponent

    <div class="container-fluid">
		<div class="row">
			<!-- basic u-steps-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default Step</h5>
					</div>
					<div class="card-body">
						<div class="u-steps row">
							<div class="u-step col-sm-4">
								<span class="u-step-number">1</span>
								<div class="u-step-desc">
									<span class="u-step-title">Shopping</span>
									<p>Choose what you want</p>
								</div>
							</div>
							<div class="u-step col-sm-4 current">
								<span class="u-step-number">2</span>
								<div class="u-step-desc">
									<span class="u-step-title">Billing</span>
									<p>Pay for the bill</p>
								</div>
							</div>
							<div class="u-step col-sm-4">
								<span class="u-step-number">3</span>
								<div class="u-step-desc">
									<span class="u-step-title">Getting</span>
									<p>Waiting for the goods</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- u-step with icon-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Step with icon</h5>
					</div>
					<div class="card-body">
						<div class="u-steps row">
							<div class="u-step col-md-4">
								<span class="u-step-icon icon-shopping-cart-full" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Shopping</span></div>
							</div>
							<div class="u-step col-md-4 current">
								<span class="u-step-icon icon-notepad" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Billing</span></div>
							</div>
							<div class="u-step col-md-4">
								<span class="u-step-icon icon-time" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Getting</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- u-step with icon-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Step States</h5>
						<span>A u-step with classname <code>.done</code> A u-step with classname <code>.error</code>A u-step with classname <code>.current</code>A u-step with classname <code>.disabled</code></span>
					</div>
					<div class="card-body">
						<div class="row row-lg">
							<div class="col-xl-3 col-lg-6">
								<div class="u-step done bg-primary">
									<span class="u-step-number txt-primary">1</span>
									<div class="u-step-desc">
										<span class="u-step-title">Getting</span>
										<p class="text-light">Waiting for the goods</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 steps-md-mt">
								<div class="u-step error bg-secondary">
									<span class="u-step-number txt-secondary">2</span>
									<div class="u-step-desc">
										<span class="u-step-title">Getting</span>
										<p class="text-light">Waiting for the goods</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 lg-mt">
								<div class="u-step current bg-success">
									<span class="u-step-number txt-success">3</span>
									<div class="u-step-desc">
										<span class="u-step-title">Getting</span>
										<p>Waiting for the goods</p>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 lg-mt">
								<div class="u-step disabled">
									<span class="u-step-number">4</span>
									<div class="u-step-desc">
										<span class="u-step-title">Getting</span>
										<p>Waiting for the goods</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- u-step with icon-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Step Sizing</h5>
						<span>A step with classname <code>.u-steps-xs</code><code>.u-steps-sm</code><code>.u-steps-lg</code></span>
					</div>
					<div class="card-body">
						<div class="u-steps row u-steps-xs steps-sizing-sm-mb">
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-shopping-cart" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Shopping</span></div>
							</div>
							<div class="u-step col-md-4 current">
								<span class="u-step-icon icon wb-pluse" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Billing</span></div>
							</div>
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-time" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Getting</span></div>
							</div>
						</div>
						<div class="u-steps row u-steps-sm steps-sizing-sm-mb">
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-shopping-cart" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Shopping</span></div>
							</div>
							<div class="u-step col-md-4 current">
								<span class="u-step-icon icon wb-pluse" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Billing</span></div>
							</div>
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-time" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Getting</span></div>
							</div>
						</div>
						<div class="u-steps row steps-sizing-sm-mb">
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-shopping-cart" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Shopping</span></div>
							</div>
							<div class="u-step col-md-4 current">
								<span class="u-step-icon icon wb-pluse" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Billing</span></div>
							</div>
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-time" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Getting</span></div>
							</div>
						</div>
						<div class="u-steps row u-steps-lg">
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-shopping-cart" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Shopping</span></div>
							</div>
							<div class="u-step col-md-4 current">
								<span class="u-step-icon icon wb-pluse" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Billing</span></div>
							</div>
							<div class="u-step col-md-4">
								<span class="u-step-icon icon wb-time" aria-hidden="true"></span>
								<div class="u-step-desc"><span class="u-step-title">Getting</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Vertical Step</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-4">
								<div class="u-steps u-steps-vertical">
									<div class="u-step">
										<span class="u-step-number">1</span>
										<div class="u-step-desc">
											<span class="u-step-title">Shopping</span>
											<p>Choose what you want</p>
										</div>
									</div>
									<div class="u-step current">
										<span class="u-step-number">2</span>
										<div class="u-step-desc">
											<span class="u-step-title">Billing</span>
											<p>Pay for the bill</p>
										</div>
									</div>
									<div class="u-step">
										<span class="u-step-number">3</span>
										<div class="u-step-desc">
											<span class="u-step-title">Getting</span>
											<p>Waiting for the goods</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default Pearls Steps</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="u-pearl done col-4"><span class="u-pearl-number">1</span><span class="u-pearl-title">Account Info</span></div>
							<div class="u-pearl current col-4"><span class="u-pearl-number">2</span><span class="u-pearl-title">Billing Info</span></div>
							<div class="u-pearl col-4"><span class="u-pearl-number">3</span><span class="u-pearl-title">Confirmation</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Pearls Steps with icon</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="u-pearl done col-4">
								<div class="u-pearl-icon"><i class="icon-shopping-cart" aria-hidden="true"></i></div>
								<span class="u-pearl-title">Account Info</span>
							</div>
							<div class="u-pearl current col-4">
								<div class="u-pearl-icon"><i class="icon-write" aria-hidden="true"></i></div>
								<span class="u-pearl-title">Billing Info</span>
							</div>
							<div class="u-pearl col-4">
								<div class="u-pearl-icon"><i class="icon-check" aria-hidden="true"></i></div>
								<span class="u-pearl-title">Confirmation</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Pearls Step Sizing</h5>
						<span>A Pearls step with classname <code>.u-pearls-xs</code><code>.u-pearls-sm</code><code>.u-pearls-lg</code></span>
					</div>
					<div class="card-body">
						<div class="u-pearls-xs row mb-5">
							<div class="u-pearl done col-4"><span class="u-pearl-number">1</span><span class="u-pearl-title">Account Info</span></div>
							<div class="u-pearl current col-4"><span class="u-pearl-number">2</span><span class="u-pearl-title">Billing Info</span></div>
							<div class="u-pearl col-4"><span class="u-pearl-number">3</span><span class="u-pearl-title">Confirmation</span></div>
						</div>
						<div class="u-pearls-sm row mb-5">
							<div class="u-pearl done col-4"><span class="u-pearl-number">1</span><span class="u-pearl-title">Account Info</span></div>
							<div class="u-pearl current col-4"><span class="u-pearl-number">2</span><span class="u-pearl-title">Billing Info</span></div>
							<div class="u-pearl col-4"><span class="u-pearl-number">3</span><span class="u-pearl-title">Confirmation</span></div>
						</div>
						<div class="row mb-5">
							<div class="u-pearl done col-4"><span class="u-pearl-number">1</span><span class="u-pearl-title">Account Info</span></div>
							<div class="u-pearl current col-4"><span class="u-pearl-number">2</span><span class="u-pearl-title">Billing Info</span></div>
							<div class="u-pearl col-4"><span class="u-pearl-number">3</span><span class="u-pearl-title">Confirmation</span></div>
						</div>
						<div class="u-pearls-lg row">
							<div class="u-pearl done col-4"><span class="u-pearl-number">1</span><span class="u-pearl-title">Account Info</span></div>
							<div class="u-pearl current col-4"><span class="u-pearl-number">2</span><span class="u-pearl-title">Billing Info</span></div>
							<div class="u-pearl col-4"><span class="u-pearl-number">3</span><span class="u-pearl-title">Confirmation</span></div>
						</div>
					</div>
				</div>
			</div>
			<!-- u-step with icon-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Pearls Step States</h5>
						<span>A pearls step states with different class<code>.done</code><code>.currunt</code><code>.error</code><code>.disabled</code></span>
					</div>
					<div class="card-body">
						<div class="row mb-5">
							<div class="u-pearl current col-4">
								<div class="u-pearl-icon">1</div>
								<span class="u-pearl-title">Account Info</span>
							</div>
							<div class="u-pearl disabled col-4">
								<div class="u-pearl-icon">2</div>
								<span class="u-pearl-title">Billing Info</span>
							</div>
							<div class="u-pearl disabled col-4">
								<div class="u-pearl-icon">3</div>
								<span class="u-pearl-title">Confirmation</span>
							</div>
						</div>
						<div class="row mb-5">
							<div class="u-pearl done col-4">
								<div class="u-pearl-icon">1</div>
								<span class="u-pearl-title">Account Info</span>
							</div>
							<div class="u-pearl current col-4">
								<div class="u-pearl-icon">2</div>
								<span class="u-pearl-title">Billing Info</span>
							</div>
							<div class="u-pearl disabled col-4">
								<div class="u-pearl-icon">3</div>
								<span class="u-pearl-title">Confirmation</span>
							</div>
						</div>
						<div class="row mb-5">
							<div class="u-pearl done col-4">
								<div class="u-pearl-icon">1</div>
								<span class="u-pearl-title">Account Info</span>
							</div>
							<div class="u-pearl current error col-4">
								<div class="u-pearl-icon">2</div>
								<span class="u-pearl-title">Billing Info</span>
							</div>
							<div class="u-pearl disabled col-4">
								<div class="u-pearl-icon">3</div>
								<span class="u-pearl-title">Confirmation</span>
							</div>
						</div>
						<div class="row">
							<div class="u-pearl done col-4">
								<div class="u-pearl-icon">1</div>
								<span class="u-pearl-title">Account Info</span>
							</div>
							<div class="u-pearl done col-4">
								<div class="u-pearl-icon">2</div>
								<span class="u-pearl-title">Billing Info</span>
							</div>
							<div class="u-pearl current col-4">
								<div class="u-pearl-icon">3</div>
								<span class="u-pearl-title">Confirmation</span>
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