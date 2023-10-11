<div class="col-xxl-4 col-lg-6">
    <div class="project-box">
        <?php if(\Carbon\Carbon::parse( $extraction->chunk_arrival_time ) < now()): ?>
        <span class="badge badge-success">Extracted</span>
        <?php else: ?>
        <span class="badge badge-warning">Extracting</span>
        <?php endif; ?>
        <h6><a href="<?php echo e(route('view_extraction', $extraction->id)); ?>"><?php echo e($extraction->moon->name); ?></a></h6>
        <div class="media">
            <div class="media-body">
                <p><?php echo e($extraction->moon->solar_system->name); ?> - <?php echo e($extraction->moon->constellation->name); ?> - <?php echo e($extraction->moon->region->name); ?><br>
                <?php echo e($extraction->owner->name); ?> - (<?php echo e($extraction->owner->ticker); ?>) - <?php echo e($extraction->owner->alliance->name); ?>

                </p>
                <div class="row details">
                <div class="col-4"><span>Rarity</span></div>
                <div class="col-4"><span>R<?php echo e($extraction->moon->breakdown->rarity); ?></span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Extraction Duration</span></div>
                <div class="col-4"><span><?php echo e(\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInDays( $extraction->chunk_arrival_time )); ?> days</span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Extraction Completed</span></div>
                <div class="col-4"><span><?php echo e(\Carbon\Carbon::parse($extraction->chunk_arrival_time)); ?></span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Extraction Remaining</span></div>
                <div class="col-4"><span><?php echo e(\Carbon\Carbon::parse($extraction->chunk_arrival_time)->diffForHumans()); ?></span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Estimated Value</span></div>
                <div class="col-4"><span><?php echo e(number_format(((\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours( $extraction->chunk_arrival_time )) * ($extraction->moon->breakdown->extraction_value_day / 24)),2)); ?></span></div>
                <div class="col-4"><span></span></div>
                <div class="col-4"><span>Estimated Fuel Costs</span></div>
                <div class="col-4"><span><?php echo e(number_format(\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours( $extraction->chunk_arrival_time ) * 5 * 20000,2)); ?></span></div>
                <div class="col-4"><span></span></div>
                </div>
            </div>
        </div>
        
        <div class="row details">
            <div class="col-4"><span>Breakdown</span></div>
            <div class="col-4"><span>Distribution</span></div>
            <div class="col-4"><span>Value</span></div>
            <?php $__currentLoopData = json_decode($extraction->moon->breakdown->dna); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breakdown): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4"><span><?php echo e($breakdown->name); ?></span></div>
            <div class="col-4"><?php echo e(number_format($breakdown->distribution * 100,2)); ?>%</div>
            <?php $value = 0 ?>
            <?php $__currentLoopData = $breakdown->refined; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $value += $goo->refine_1_day / 24  ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4"><?php echo e(number_format(\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours( $extraction->chunk_arrival_time ) * $value,2)); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php if(\Carbon\Carbon::parse( $extraction->chunk_arrival_time ) < now()): ?>
        <div class="project-status mt-4">
            <div class="media mb-0">
                <p>100%</p>
                <div class="media-body text-end"><span>100.00%</span></div>
            </div>
            <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width:100%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <?php else: ?>
        <div class="project-status mt-4">
            <div class="media mb-0">
                <p><?php echo e(number_format(((\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours(now())) / (\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours($extraction->chunk_arrival_time))) * 100,2)); ?>%</p>
                <div class="media-body text-end"><span>100.00%</span></div>
            </div>
            <div class="progress" style="height: 5px;">
                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: <?php echo e(number_format(((\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours(now())) / (\Carbon\Carbon::parse( $extraction->extraction_start_time )->diffInHours($extraction->chunk_arrival_time))) * 100,2)); ?>%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <?php endif; ?>

    </div>
</div><?php /**PATH /var/www/vhosts/scopeh.co.uk/calendar.mindstar.technology/resources/views/admin/ledger/moons/detail.blade.php ENDPATH**/ ?>