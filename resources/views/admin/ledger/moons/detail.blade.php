<div class="col-xxl-4 col-lg-6">
    <div class="project-box">
        @if(\Carbon\Carbon::parse( $extraction->chunk_arrival_time ) < now())
        <span class="badge badge-success">Extracted</span>
        @else
        <span class="badge badge-warning">Extracting</span>
        @endif
        <h6><a href="{{ route('view_extraction', $extraction->id) }}">{{ $extraction->moon->name }}</a></h6>
        <div class="media">
            <div class="media-body">
                <p>{{ $extraction->moon->solar_system->name }} - {{ $extraction->moon->constellation->name }} - {{ $extraction->moon->region->name }}<br>
                {{ $extraction->owner->name }} - ({{ $extraction->owner->ticker }}) - {{ $extraction->owner->alliance->name }}
                </p>
                <div class="row details">
                <div class="col-4"><span>Rarity</span></div>
                <div class="col-4"><span>R{{ $extraction->moon->breakdown->rarity }}</span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Extraction Duration</span></div>
                <div class="col-4"><span>{{ \Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInDays( $extraction->chunk_arrival_time ) }} days</span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Extraction Completed</span></div>
                <div class="col-4"><span>{{ \Carbon\Carbon::parse($extraction->chunk_arrival_time) }}</span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Extraction Remaining</span></div>
                <div class="col-4"><span>{{ \Carbon\Carbon::parse($extraction->chunk_arrival_time)->diffForHumans() }}</span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Estimated Value</span></div>
                <div class="col-4"><span>{{ number_format(((\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours( $extraction->chunk_arrival_time )) * ($extraction->moon->breakdown->extraction_value_day / 24)),2) }}</span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Estimated Fuel Costs</span></div>
                <div class="col-4"><span>{{ number_format(\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours( $extraction->chunk_arrival_time ) * 5 * 20000,2) }}</span></div>
                <div class="col-4"><span></span></div>
                </div>
            </div>
        </div>
        
        <div class="row details">
            <div class="col-4"><span>Breakdown</span></div>
            <div class="col-4"><span>Distribution</span></div>
            <div class="col-4"><span>Value</span></div>
            @foreach(json_decode($extraction->moon->breakdown->dna) as $breakdown)
            <div class="col-4"><span>{{ $breakdown->name }}</span></div>
            <div class="col-4">{{ number_format($breakdown->distribution * 100,2) }}%</div>
            <?php $value = 0 ?>
            @foreach($breakdown->refined as $goo)
            <?php $value += $goo->refine_1_day / 24  ?>
            @endforeach
            <div class="col-4">{{ number_format(\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours( $extraction->chunk_arrival_time ) * $value,2) }}</div>
            @endforeach

        </div>
        @if(\Carbon\Carbon::parse( $extraction->chunk_arrival_time ) < now())
        <div class="project-status mt-4">
            <div class="media mb-0">
                <p>100%</p>
                <div class="media-body text-end"><span>100.00%</span></div>
            </div>
            <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width:100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        @else
        <div class="project-status mt-4">
            <div class="media mb-0">
                <p>{{ number_format(((\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours(now())) / (\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours($extraction->chunk_arrival_time))) * 100,2) }}%</p>
                <div class="media-body text-end"><span>100.00%</span></div>
            </div>
            <div class="progress" style="height: 5px;">
                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: {{ number_format(((\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours(now())) / (\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours($extraction->chunk_arrival_time))) * 100,2) }}%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        @endif

    </div>
</div>