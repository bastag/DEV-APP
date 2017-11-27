<title>Create Order</title>

<?php $__env->startSection('mainPane'); ?>    
		<!-- ORDER FORM -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
						<div class="card">
							<div class="content">
								<?php echo Form::open(['url' => 'create-order/submit']); ?>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<?php echo e(Form::label('jobname', 'Job Name')); ?>

												<?php echo e(Form::text('jobname', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter'])); ?>

											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<?php echo e(Form::label('jobtype', 'Job Type')); ?>

												<?php echo e(Form::text('jobtype', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter'])); ?>

											</div>
										</div>
									</div>
							</div>
													
							<div class="header">
								<h4 class="title">Specifications</h4>
							</div>
							<!-- FORM CONTENT -->
							<div class="content">
								<form autocomplete="on">
								  <div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<?php echo e(Form::label('quantity', 'Quantity')); ?>

												<div class="container">
													<div class="count-input space-bottom">
													<a class="incr-btn" data-action="decrease" href="#">–</a>
													<?php echo e(Form::text('quantity', '1', ['class' => 'quantity'])); ?>

													<a class="incr-btn" data-action="increase" href="#">&plus;</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<?php echo e(Form::label('numPages', 'Number of Pages')); ?>

												<div class="container">
													<div class="count-input space-bottom">
													<a class="incr-btn" data-action="decrease" href="#">–</a>
													<?php echo e(Form::text('quantity', '1', ['class' => 'quantity'])); ?>

													<a class="incr-btn" data-action="increase" href="#">&plus;</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<label><b>Stocks</b></label>
										<div class="row">
										<div class="col-md-4">
										  <div class="form-group">
										  <?php echo e(Form::label('cover_color', 'Cover: ')); ?>

										  <?php echo e(Form::select('cover_color',  
										  ['Colored' => 'Colored',
										  'Grayscale' => 'Grayscale'], 'Colored', ['class' => 'form-control border-input'])); ?>

										<br><br>
										  </div>
									  </div>
									  
									  <div class="col-md-4">
										  <div class="form-group">
										  <?php echo e(Form::label('inside_color', 'Inside: ')); ?>

										  <?php echo e(Form::select('inside_color',  
										  ['Colored' => 'Colored',
										  'Grayscale' => 'Grayscale'], 'Colored', ['class' => 'form-control border-input'])); ?>

										<br><br>
										  </div>
									  </div>
								  	</div>

									<div class="row">
									  <div class="col-md-6">
										  <div class="form-group">
											  <?php echo e(Form::label('job_sample', 'Job Sample')); ?>

												<?php echo e(Form::file('myFile')); ?>

										  </div>
									  </div>
								  </div>
								  
								  <div class="row">
									  <div class="col-lg-6">
										  <div class="form-group">
											 <?php echo e(Form::label('size', 'Size')); ?>

											 <?php echo e(Form::text('size', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter'])); ?>

										  </div>
									  </div>
								  </div>
								  
								  <div class="row">
									  <div class="col-lg-6">
										  <div class="form-group">
											  <?php echo e(Form::label('papertype', 'Paper Type')); ?>

											 <?php echo e(Form::text('size', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter'])); ?>

										  </div>
									  </div>
								  </div>

								  <div class="row">
									  <div class="col-md-6">
										  <div class="form-group">
										 	 <?php echo e(Form::label('date_due', 'Date Due')); ?>

											 <?php echo e(Form::date('date_due', \Carbon\Carbon::now(), ['class' => 'form-control border-input'])); ?>

										  </div>
									  </div>
								  </div>
								  
								  <div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<?php echo e(Form::label('lamination', 'Lamination')); ?>

											<?php echo e(Form::text('lamination', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter'])); ?>

										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<?php echo e(Form::label('binding', 'Binding')); ?>

											<?php echo e(Form::text('binding', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter'])); ?>

										</div>
									</div>
									</div>


								  <div class="row">
									  <div class="col-md-12">
										  <div class="form-group">
										  	<?php echo e(Form::label('comments', 'Comments')); ?>

											<?php echo e(Form::textarea('comments', '', ['class' => 'form-control border-input', 'placeholder' => 'Here can be your description', 'row' => 5])); ?>

										  </div>
									  </div>
								  </div>
								  <div class="text-center">
								  	<?php echo e(Form::submit('Submit Order', ['class' => 'btn btn-info btn-fill btn-wd'])); ?>

								  </div>
								  <?php echo Form::close(); ?>

								  <div class="clearfix"></div>
								  </div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>