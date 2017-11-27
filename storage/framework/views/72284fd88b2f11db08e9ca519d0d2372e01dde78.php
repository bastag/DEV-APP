<title> Invoices </title>
	<?php $__env->startSection('mainPane'); ?>
        <!-- ORDER FORM -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Invoices</h4>
                            </div>
                            <!-- FORM CONTENT -->
															<div class="container-fluid">

																 <h1><i class="ti-receipt"></i> Invoices <small> (click on order for details)</small> </h1>

																 <hr>

																 <table class="table table-hover">
																	 <thead>
																		 <tr>
																			 <th>Invoice #</th>
                                                                             <th>Date</th>
                                                                             <th>Job Title</th>
                                                                             <th>Agent</th>
                                                                             <th>Job Price</th>
                                                                             <th>Delivery Date</th>
                                                                             <th>Status</th>
																		 </tr>
																	 </thead>
																	 <?php if($count=count($invoices)>1): ?>
	 																	<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	 <tbody>
                                                                        <tr onclick="window.location='view-invoice';">
																			 																			 <td><?php echo e($invoice->id); ?></td>
																																						 <td><?php echo e($invoice->created_at); ?></td>
                                                                             <td><?php echo e($invoice->order_id); ?></td>
                                                                             <td><?php echo e($invoice->quotation_id); ?></td>
                                                                             <td><?php echo e($invoice->amount_paid); ?></td>
                                                                             <td><?php echo e($invoice->updated_at); ?></td>
                                                                             <td><a><?php echo e($invoice->order_status); ?></a></td>
																		 </tr>
																		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																	 <?php else: ?>
																	 <tr>
																			 <td><h1>No Orders</h1></td>
																	 </tr>

																	 </tbody>
																	 <?php endif; ?>
																 </table>

																 <div class="col-sm-12 ">
																		 <div class="result pull-left"><strong>Showing 1 to 2 of max</strong></div>

																		 <ul class="pagination pull-right">
																			 <li><a href="#">«</a></li>
																			 <li class = 'active'><a href="#1">1</a></li>
																			 <li><a href="#2">2</a></li>
																			 <li><a href="#3">3</a></li>
																			 <li><a href="#4">4</a></li>
																			 <li><a href="#5">5</a></li>
																			 <li><a href="#2">»</a></li>
																		 </ul>

																 </div>
															</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>