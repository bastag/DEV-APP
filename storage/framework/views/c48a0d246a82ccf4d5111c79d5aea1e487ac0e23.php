<title> Transactional Logs </title>
	<?php $__env->startSection('mainPane'); ?>
        <!-- ORDER FORM -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Transactional Logs </h4>
                            </div>
                            <!-- FORM CONTENT -->
															<div class="container-fluid">

																 <h1><i class="ti-receipt"></i> Transactions </h1>

																 <hr>

																 <table class="table table-hover">
																	 <thead>
																		 <tr>
																			 <th>Order #</th>
                                                                             <th>Date</th>
                                                                             <th>Job Title</th>
																																						 <th>Customer</th>
																																						 <?php if( Auth::user()->user_type == 'Owner'): ?>
                                                                             <th>Agent</th>
																																						 <?php endif; ?>
                                                                             <th>Job Price</th>
                                                                             <th>Price per Unit</th>
																		 </tr>
																	 </thead>
																	 <tbody>
                                                                        <tr>
																			 <td>1</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td><a>Crisostomo Ibarra</a></td>
																																						 <?php if( Auth::user()->user_type == 'Owner'): ?>
                                                                             <th> -- </th>
																																						 <?php endif; ?>
                                                                             <td>PhP -- </td>
                                                                             <td>PhP -- </td>
                                                                             </tr>

                                                                         <tr>
																			 <td>2</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
																																						 <td><a>Crisostomo Ibarra</a></td>
																																						 <?php if( Auth::user()->user_type == 'Owner'): ?>
                                                                             <td><a>Chacha Lucero</a></td>
																																						 <?php endif; ?>
                                                                             <td>PhP -- </td>
                                                                             <td>PhP -- </td>
                                                                             </tr>

																																				 <tr>
																			 <td>3</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td><td><a>Crisostomo Ibarra</a></td>
																																						 <?php if( Auth::user()->user_type == 'Owner'): ?>
                                                                             <td><a>Chacha Lucero</a></td>
																																						 <?php endif; ?>
                                                                             <td>PhP -- </td>
                                                                             <td>PhP -- </td>

                                                                         <tr>

																			 <td>4</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
																																						 <td><a>Crisostomo Ibarra</a></td>
																																						 <?php if( Auth::user()->user_type == 'Owner'): ?>
                                                                             <td><a>Chacha Lucero</a></td>
																																						 <?php endif; ?>
                                                                             <td>PhP 10000.00</td>
                                                                             <td>PhP 50.00</td></tr>
                                                                         <tr>
																			 <td>5</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
																																						 <td><a>Crisostomo Ibarra</a></td> <?php if( Auth::user()->user_type == 'Owner'): ?>
                                                                              <td><a>Chacha Lucero</a></td>
 																																						 <?php endif; ?>
																																						 <td>PhP 10000.00</td>
                                                                             <td>PhP 50.00</td>
																		 </tr>
																	 </tbody>
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