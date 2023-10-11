@extends('layouts.ledger.master')

@section('title')Moon Extraction Observed
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Moon Extraction Observed</h3>
		@endslot
		<li class="breadcrumb-item">Home</li>
		<li class="breadcrumb-item">Extractions</li>
		<li class="breadcrumb-item active">Moon Extraction Observed</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <!-- Zero Configuration  Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
						<h5>Moon Extraction Observed</h5>
						<span>Observed Miners on this moon.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
									<th>Character Name</th>
									<th>Corporation</th>
									<th>Alliance</th>
									<th>Ore</th>
									<th>Quantity</th>
									<th>Date</th>
	                                </tr>
	                            </thead>
                                 @foreach($observed->observed as $miner)
								<tr>
									<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/characters/{{ $miner->character_id }}/portrait?size=32" alt="" data-original-title="" title=""> {{ $miner->character->name }}</td>
									<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/corporations/{{ $miner->recorded_corporation_id }}/logo?size=32" alt="" data-original-title="" title=""> {{ $miner->character->corporation->name }}</td>
                                    @if(isset($miner->character->corporation->alliance_id))
                                    <td><img class="img-fluid rounded-circle" src="https://images.evetech.net/alliances/{{ $miner->character->corporation->alliance_id }}/logo?size=32" alt="" data-original-title="" title=""> {{ $miner->character->corporation->alliance->name }}</td>
                                    @else
                                    <td></td>
                                    @endif
                        			<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/types/{{ $miner->type->typeID }}/icon?size=32" alt="" data-original-title="" title=""> {{ $miner->type->typeName }}</td>
                                    <td>{{ number_format($miner->quantity,2) }}</td>
									<td>{{ $miner->last_updated }}</td>
								</tr>
                            @endforeach
	                            <tbody>

                                </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
	@endpush

@endsection