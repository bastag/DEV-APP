<title> View Invoice </title>

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

                                                                           <h1> LCSC Flyers </h1> <br>
                                                                           <div>
                                                                               <img src="assets/img/background.jpg" alt="..."/
                                                                                align = 'right' width = '150' height = '150'>
                                                                            </div>
                                                                                <p> <strong>Unit Price:</strong> PhP 50.00 </p>
                                                                           <p> <strong>Quantity:</strong> 25000 </p>
                                                                           <p> <strong>Delivery Date:</strong> January 1, 2018 </p>
                                                                           <p> <strong>Status:</strong> Ongoing </p>
                                                                           <p> <strong>Last Payment Date:</strong> November 15, 2017 </p>

                                                                           <br>
                                                                           <p class = 'result pull-right'> <strong>Remaining Balance:</strong> 
                                                                                <br>
                                                                                <a> PhP 10000.00</a></p>
                                                                           <br><br>  
                                                                         

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