<?php $__env->startSection('title'); ?>JS Grid Tables
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jsgrid.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>JS Grid Tables</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item active">JS Grid Tables</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Basic Scenario</h5>
	                    <span>Grid with filtering, editing, inserting, deleting, sorting and paging. Data provided by controller.</span>
	                </div>
	                <div class="card-body">
	                    <div id="basicScenario"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Sorting Scenario</h5>
	                    <span>Sorting can be done not only with column header interaction, but also with sort method.</span>
	                </div>
	                <div class="card-body">
	                    <div class="sort-panel mb-3">
	                        <label>
	                            Sorting Field:
	                            <select class="btn btn-primary dropdown-toggle btn-sm" id="sortingField">
	                                <option>Name</option>
	                                <option>Age</option>
	                                <option>Address</option>
	                                <option>Country</option>
	                                <option>Married</option>
	                            </select>
	                        </label>
	                        <div class="d-inline">
	                            <button class="btn btn-sm btn-secondary" id="sort" type="button">Sort</button>
	                        </div>
	                    </div>
	                    <div class="js-shorting" id="sorting-table"></div>
	                </div>
	            </div>
	        </div>
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Batch Delete</h5>
	                    <span>
	                        Cell content of every column can be customized with itemTemplate, headerTemplate, filterTemplate and insertTemplate functions specified in field config. This example shows how to implement batch deleting with custom
	                        field for selecting items.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div id="batchDelete"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/jsgrid/jsgrid.min.js')); ?>"></script>`
    <script src="<?php echo e(asset('assets/js/jsgrid/griddata.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jsgrid/jsgrid.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/scopeh.co.uk/calendar.mindstar.technology/resources/views/admin/tables/jsgrid-table.blade.php ENDPATH**/ ?>