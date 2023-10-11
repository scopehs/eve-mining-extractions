<?php $__env->startSection('title'); ?>Moon Extraction Observed
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Moon Extraction Observed</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Home</li>
		<li class="breadcrumb-item">Extractions</li>
		<li class="breadcrumb-item active">Moon Extraction Observed</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
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
                                 <?php $__currentLoopData = $observed->observed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $miner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/characters/<?php echo e($miner->character_id); ?>/portrait?size=32" alt="" data-original-title="" title=""> <?php echo e($miner->character->name); ?></td>
									<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/corporations/<?php echo e($miner->recorded_corporation_id); ?>/logo?size=32" alt="" data-original-title="" title=""> <?php echo e($miner->character->corporation->name); ?></td>
                                    <?php if(isset($miner->character->corporation->alliance_id)): ?>
                                    <td><img class="img-fluid rounded-circle" src="https://images.evetech.net/alliances/<?php echo e($miner->character->corporation->alliance_id); ?>/logo?size=32" alt="" data-original-title="" title=""> <?php echo e($miner->character->corporation->alliance->name); ?></td>
                                    <?php else: ?>
                                    <td></td>
                                    <?php endif; ?>
                        			<td><img class="img-fluid rounded-circle" src="https://images.evetech.net/types/<?php echo e($miner->type->typeID); ?>/icon?size=32" alt="" data-original-title="" title=""> <?php echo e($miner->type->typeName); ?></td>
                                    <td><?php echo e(number_format($miner->quantity,2)); ?></td>
									<td><?php echo e($miner->last_updated); ?></td>
								</tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            <tbody>

                                </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ledger.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/scopeh.co.uk/calendar.mindstar.technology/resources/views/admin/ledger/observed/view.blade.php ENDPATH**/ ?>