@extends('templates.layout')

<title> Order Lists </title>
	@section('mainPane')
        <!-- ORDER FORM -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Orders</h4>
                            </div>
                            <!-- FORM CONTENT -->
															<div class="container-fluid">

																 <h1><i class="ti-receipt"></i> Pending Orders <small> (click on order for details)</small> </h1>

																 <hr>

																 <table class="table table-hover">
																	 <thead>
																		 <tr>
																			 <th>Order #</th>
                                                                             <th>Date</th>
																																						 <th>Customer</th>
                                                                             <th>Job Title</th>
                                                                             <th>Action</th>


																		 </tr>
																	 </thead>
																	 <tbody>
                                                                        <tr>
																			 <td>1</td>
                                                                             <td>{{\Carbon\Carbon::now()}}</td>
																																						 <td><a>Emman The Grate</a></td>
                                                                             <td>LCSC Flyers</td>
																																						 <td>
																														 									<btn class = 'btn btn-warning'>Take Order</btn> </li>
																														 								</td>

																		 </tr>
                                                                         <tr>
																			 <td>2</td>
                                                                             <td>{{\Carbon\Carbon::now()}}</td>
																																						 <td><a>Emman The Grate Pt.2</a></td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td>
																																							 <btn onclick="window.location='manage-order';" class = 'btn btn-success'>Manage</btn>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
