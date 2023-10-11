@extends('layouts.ledger.master')

@section('title')Upcoming Extractions
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Upcoming Extractions</h3>
		@endslot
		<li class="breadcrumb-item active">Upcoming Extractions</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row project-cards">
		<div class="col-md-12 project-list">
	            <div class="card">
	                <div class="row">
	                    <div class="col-md-6 p-0">
	                        <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
	                            <li class="nav-item">
	                                <a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>All</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="8"></line></svg>Extracting</a>
	                            </li>
	                            <li class="nav-item">
	                                <a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Extracted</a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="tab-content" id="top-tabContent">
	                        <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
	                            <div class="row">
									@if(count($extractions) > 0)
									@foreach($extractions as $extraction)
	
									@include('admin.ledger.moons.detail')
			
									@endforeach
									@else
									<p>Your corporation directorship has not added any extractions yet.</p>
									@endif
	                            </div>
	                        </div>
							<div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
							<div class="row">
									@if(count($extractions) > 0)
									@foreach($extractions as $extraction)
									@if(\Carbon\Carbon::parse( $extraction->chunk_arrival_time ) > now())
									@include('admin.ledger.moons.detail')
									@endif
									@endforeach
									@else
									<p>Your corporation directorship has not added any extractions yet.</p>
									@endif
	                            </div>
	                        </div>
							<div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
							<div class="row">
									@if(count($extractions) > 0)
									@foreach($extractions as $extraction)
									@if(\Carbon\Carbon::parse( $extraction->chunk_arrival_time ) < now())
									@include('admin.ledger.moons.detail')
									@endif
									@endforeach
									@else
									<p>Your corporation directorship has not added any extractions yet.</p>
									@endif
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
	@endpush

@endsection