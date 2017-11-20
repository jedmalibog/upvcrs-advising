<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Grade Summary</div>
				<div class="panel-body">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>academic year</th>
								<th>semester</th>
								<th>subjects</th>
								<th>grades</th>
								<th>credits</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($grade->academic_year); ?></td>
									<td><?php echo e($grade->semester); ?></td>
									<td><?php echo e($grade->name); ?></td>
									<td><?php echo e($grade->grade); ?></td>
									<td><?php echo e($grade->credits); ?></td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						</tbody>
						
					</table>
					
				</div>
			</div>
		</div>
		
	</div>	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>