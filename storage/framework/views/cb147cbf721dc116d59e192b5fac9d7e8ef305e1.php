<title> Update Invoice </title>

<?php $__env->startSection('mainPane'); ?>
        <!-- ORDER FORM -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Order History</h4>
                            </div>
                            <!-- FORM CONTENT -->
															<div class="container-fluid">

																 <h1><i class="ti-receipt"></i> Invoice <small> (click on order for details)</small> </h1>

																 <hr>

																 <div class="col-sm-12 ">
																		 <div>
                                                                           <div class = 'result pull-right'>
                                                                                <p> Invoice # </p>
                                                                           </div>
                                                                           <h1> LCSC Flyers </h1> <br>
                                                                           <div>
                                                                               <img src="assets/img/background.jpg" alt="..."/
                                                                                align = 'right' width = '150' height = '150'>
                                                                            </div>
                                                                                <p> <strong>Unit Price:</strong> PhP 50.00 </p>
                                                                           <p> <strong>Quantity:</strong> 25000 </p>
                                                                          
                                                                           <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <?php echo e(Form::label('del_date', 'Delivery Date')); ?>

                                                                                        <?php echo e(Form::date('date_due', \Carbon\Carbon::now(), ['class' => 'form-control border-input'])); ?>

                                                                                    </div>
                                                                                    <div>
                                                                                    	<?php echo e(Form::submit('Set', ['class' => 'btn btn-info btn-fill'])); ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                           <br>
                                                                           <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                            <?php echo e(Form::label('invoice_fee', 'Price')); ?>

                                                                                 <?php echo e(Form::text('invoice_fee', 'PhP 10000.00', ['class' => 'form-control border-input', 'disabled placeholder'])); ?>

                                                                                    </div>
                                                                                <div>
                                                                                <?php echo e(Form::submit('Paid', ['class' => 'btn btn-success btn-fill'])); ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div>    
                                                                        
																		 <ul class="pagination pull-right">
                                                                             <li><a href="#">« Return</a></li>
                                                                    </div>                                                                         </ul>                                                                         
																 </div>



															</div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>