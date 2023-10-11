<?php $__env->startSection('title'); ?>Moon Extraction Breakdown
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Moon Extraction Breakdown</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Home</li>
		<li class="breadcrumb-item">Extractions</li>
		<li class="breadcrumb-item active">Moon Extraction Breakdown</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
            		<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Moon Extraction Breakdown</h5>
						<span>The Moon Breakdown is calculated on refined mineral and moon goo values from Jita's 7 day rolling average at max refine of 89.34%</span>
					</div>
					<div class="table-responsive">
						<table class="table table-border-horizontal">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First Name</th>
									<th scope="col">Last Name</th>
									<th scope="col">Username</th>
									<th scope="col">Role</th>
									<th scope="col">Country</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">5</th>
									<td>Ram Jacob</td>
									<td>Thornton</td>
									<td>@twitter</td>
									<td>admin</td>
									<td>IND</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/bootstrap/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.min.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.ledger.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/scopeh.co.uk/calendar.mindstar.technology/resources/views/admin/ledger/extraction/view.blade.php ENDPATH**/ ?>