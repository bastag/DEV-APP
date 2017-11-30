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
								<th>Quantity</th>
								<th>Price per Unit</th>
								<th>Confirm</th>
								</tr>

								</thead>
								<tbody>
								<tr>
								<td>1</td>
								<td>La Salle Yearbook</td>
								<td><a>Nidora Zobeyala</a></td>
								<td>PhP 40000.00</td>
								<td>100</td>
								<td>PhP 100.00</td>
								<td></td>
								</tr>

								<tr>
								<td>2</td>
								<td>Ateneo Yearbook</td>
								<td><a>Divina Ursula</a></td>
								<td>PhP 300000.00</td>
								<td>10</td>
								<td>PhP 3000.00</td>
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
								<td>100</td>
								<td>PhP 50.00</td>
								<td>
										<btn class = 'btn btn-primary'><i class="ti-check"></i></btn>
										<btn class = 'btn btn-danger'><i class= "ti-close"></i></btn>
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

							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <form>
									          <div class="form-group">
									            <label for="recipient-name" class="col-form-label">Recipient:</label>
									            <input type="text" class="form-control" id="recipient-name">
									          </div>
									          <div class="form-group">
									            <label for="message-text" class="col-form-label">Message:</label>
									            <textarea class="form-control" id="message-text"></textarea>
									          </div>
									        </form>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									        <button type="button" class="btn btn-primary">Send message</button>
									      </div>
									    </div>
									  </div>
									</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>