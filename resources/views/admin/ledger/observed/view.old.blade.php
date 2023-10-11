@extends('layouts.ledger.master')

@section('title')Moon Extraction Observed
 {{ $title }}
@endsection

@push('css')
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
            		<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Moon Extraction Observed</h5>
						<span>Observed Miners on this moon.</span>
					</div>
					<div class="table-responsive">
						<table class="table table-border-horizontal">
							<thead>
								<tr>
									<th scope="col">Character Name</th>
									<th scope="col">Corporation</th>
									<th scope="col">Alliance</th>
									<th scope="col">Ore</th>
									<th scope="col">Quantity</th>
									<th scope="col">Date</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($observed->observed as $miner)
								<tr>
									<th scope="row"><img class="img-fluid rounded-circle" src="https://images.evetech.net/characters/{{ $miner->character_id }}/portrait?size=32" alt="" data-original-title="" title=""> {{ $miner->character->name }}</th>
									<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/corporations/{{ $miner->recorded_corporation_id }}/logo?size=32" alt="" data-original-title="" title=""> {{ $miner->character->corporation->name }}</td>
                                    @if(isset($miner->character->corporation->alliance_id))
                                    <td><img class="img-fluid rounded-circle" src="https://images.evetech.net/alliances/{{ $miner->character->corporation->alliance_id }}/logo?size=32" alt="" data-original-title="" title=""> {{ $miner->character->corporation->alliance->name }}</td>
                                    @else
                                    <td></td>
                                    @endif
                        			<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/types/{{ $miner->type->typeID }}/icon?size=32" alt="" data-original-title="" title=""> {{ $miner->type->typeName }}</td>
                                    <td>{{ $miner->quantity }}</td>
								</tr>
                            @endforeach
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