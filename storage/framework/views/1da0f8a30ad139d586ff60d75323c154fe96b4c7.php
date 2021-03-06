<title>Create Order</title>

<?php $__env->startSection('mainPane'); ?>    
		<!-- ORDER FORM -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
						<div class="card">
							<div class="content">
								<form>
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

												<?php echo e(Form::text('jobType', '', ['class' => 'form-control border-input', 'placeholder' => 'Enter'])); ?>

											</div>
										</div>
									</div>
								</form>
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
											<label>Quantity</label>
																						<div class="container">
																							<div class="count-input space-bottom">
																	<a class="incr-btn" data-action="decrease" href="#">–</a>
																	<input class="quantity" type="text" name="quantity" value="1"/>
																	<a class="incr-btn" data-action="increase" href="#">&plus;</a>
																</div>
																						</div>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label>Number of Pages</label>
																						<div class="container">
																							<div class="count-input space-bottom">
																								<a class="incr-btn" data-action="decrease" href="#">–</a>
																							  <input class="quantity" type="text" name="quantity" value="1"/>
																							  <a class="incr-btn" data-action="increase" href="#">&plus;</a>
																						  </div>
																						</div>
										</div>
									</div>
									</div>


																	<label><b>Stocks</b></label>
								  <div class="row">
									  <div class="col-md-6">
										  <div class="form-group">
											  <label>Cover:</label>
																							<select name="cars">
																							<option value="Colored">Colored</option>
																							<option value="Grayscale">Grayscale</option>
																						  </select>
																						  <br><br>
										  </div>
									  </div>
									  <div class="col-md-6">
																				<div class="form-group">
																						<label>Inside:</label>
																						<select name="cars">
																							<option value="Colored">Colored</option>
																							<option value="Grayscale">Grayscale</option>
																						</select>
																						<br><br>
																				</div>
									  </div>
								  </div>

																	<div class="row">
									  <div class="col-md-6">
										  <div class="form-group">
											  <label>Job sample:</label>
											  <input type="file" id="myFile">
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
											  <label>Paper Type</label>
															<label class="checkbox" for="checkbox1">
																		<input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
																		Unchecked
																	  </label>
																	  <label class="checkbox" for="checkbox2">
																		<input type="checkbox" value="" id="checkbox2" data-toggle="checkbox" checked>
																		Checked
																	  </label>
																	  <label class="checkbox" for="checkbox3">
																		<input type="checkbox" value="" id="checkbox3" data-toggle="checkbox" disabled>
																		Disabled unchecked
																	  </label>
																	  <label class="checkbox" for="checkbox4">
																		<input type="checkbox" value="" id="checkbox4" data-toggle="checkbox" disabled checked>
																		Disabled checked
																	  </label>
										  </div>
									  </div>
								  </div>

								  <div class="row">
									  <div class="col-md-12">
										  <div class="form-group">
										 	 <?php echo e(Form::label('date_due', 'Date Due')); ?>

											 <?php echo e(Form::date('date_due', \Carbon\Carbon::now())); ?>

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
								  
								  <div class="clearfix"></div>
								  </div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>