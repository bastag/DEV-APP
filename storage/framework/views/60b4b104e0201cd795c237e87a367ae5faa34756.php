<title> Confirm Quotes </title>
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

																 <h1><i class="ti-receipt"></i> Quotes <small> (click on order for details)</small> </h1>

																 <hr>

																 <table class="table table-hover">
																	 <thead>
																		 <tr>
																			 <th>Quote #</th>
                                                                             <th>Job Title</th>
                                                                             <th>Agent</th>
                                                                             <th>Job Price</th>
                                                                             <th>Price per Unit</th>
                                                                             <th>Status</th>
																			 <th>Confirm</th>
																		 </tr>
																	 </thead>
																	 <tbody>
																		 <tr>
																			 <td>1</td>
                                                                             <td>La Salle Yearbook</td>
                                                                             <td><a>Nidora Zobeyala</a></td>
																			 <td>PhP 40000.00</td>
                                                                             <td>PhP 100.00</td>
                                                                             <td>In progress</td>
                                                                             <td> - </td>
																		 </tr>
																		 <tr>
																			 <td>2</td>
                                                                             <td>Ateneo Yearbook</td>
                                                                             <td><a>Divina Ursula</a></td>
                                                                             <td>PhP 300000.00</td>
                                                                             <td>PhP 3000.00</td>
                                                                             <td>Quotation ready</td>
                                                                             <td>
                                                                                 <btn class = 'btn btn-primary'><i class="ti-check"></i></btn> </li>
                                                                                 <btn class = 'btn btn-danger'><i class= "ti-close"></i></btn> </li>
                                                                            </td>
                                                                         </tr>
                                                                         <tr>
																			 <td>3</td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td><a>Chacha Lucero</a></td>
                                                                             <td>PhP 10000.00</td>
                                                                             <td>PhP 50.00</td>
                                                                             <td><a>Check invoice</a></td>
                                                                             <td>
                                                                                 <btn class = 'btn btn-primary'><i class="ti-check"></i></btn> </li>
                                                                                 <btn class = 'btn btn-danger'><i class= "ti-close"></i></btn> </li>
                                                                            </td>
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

															<!-- Modal -->
																				 <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																					 <div class="modal-dialog">
																						 <div class="modal-content">
																							 <div class="modal-header">
																								 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fa fa-times"></i></button>
																								 <h4 class="modal-title" id="myModalLabel"><i class="text-muted fa fa-shopping-cart"></i> <strong>02051</strong> - Nome do Produto </h4>
																							 </div>
																							 <div class="modal-body">

																								 <table class="pull-left col-md-8 ">
																											<tbody>
																													<tr>
																															<td class="h6"><strong>Código</strong></td>
																															<td> </td>
																															<td class="h5">02051</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Descrição</strong></td>
																															<td> </td>
																															<td class="h5">descrição do produto</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Marca/Fornecedor</strong></td>
																															<td> </td>
																															<td class="h5">Marca do produto</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Número Original</strong></td>
																															<td> </td>
																															<td class="h5">0230316</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Código N.C.M</strong></td>
																															<td> </td>
																															<td class="h5">032165</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Código de Barras</strong></td>
																															<td> </td>
																															<td class="h5">0321649843</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Unid. por Embalagem</strong></td>
																															<td> </td>
																															<td class="h5">50</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Quantidade Mínima</strong></td>
																															<td> </td>
																															<td class="h5">50</td>
																													</tr>

																													<tr>
																															<td class="h6"><strong>Preço Atacado</strong></td>
																															<td> </td>
																															<td class="h5">R$ 35,00</td>
																													</tr>

																													<tr>
																															<td class="btn-mais-info text-primary">
																																	<i class="open_info fa fa-plus-square-o"></i>
																																	<i class="open_info hide fa fa-minus-square-o"></i> informações
																															</td>
																															<td> </td>
																															<td class="h5"></td>
																													</tr>

																											</tbody>
																								 </table>


																								 <div class="col-md-4">
																										 <img src="http://lorempixel.com/150/150/technics/" alt="teste" class="img-thumbnail">
																								 </div>

																								 <div class="clearfix"></div>
																								<p class="open_info hide">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
																							 </div>

																							 <div class="modal-footer">

																								 <div class="text-right pull-right col-md-3">
																										 Varejo: <br/>
																										 <span class="h3 text-muted"><strong> R$50,00 </strong></span></span>
																								 </div>

																								 <div class="text-right pull-right col-md-3">
																										 Atacado: <br/>
																										 <span class="h3 text-muted"><strong>R$35,00</strong></span>
																								 </div>

																						 </div>
																					 </div>
																				 </div>
																				 </div>
															<!-- fim Modal-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>