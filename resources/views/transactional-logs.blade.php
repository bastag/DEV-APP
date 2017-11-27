@extends('templates.layout')

<title> Transactional Logs </title>
	@section('mainPane')
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
																			 <th>Order #</th>
                                                                             <th>Date</th>
                                                                             <th>Job Title</th>
                                                                             <th>Agent</th>
                                                                             <th>Job Price</th>
                                                                             <th>Price per Unit</th>
                                                                             <th>Status</th>
																		 </tr>
																	 </thead>
																	 <tbody>
                                                                        <tr>
																			 <td>1</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td><a> -- </a></td>
                                                                             <td>PhP -- </td>
                                                                             <td>PhP -- </td>
                                                                             <td><a>Waitlist</a></td>
																		 </tr>
                                                                         <tr>
																			 <td>2</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td><a>Chacha Lucero</a></td>
                                                                             <td>PhP -- </td>
                                                                             <td>PhP -- </td>
                                                                             <td><a>Processing</a></td>
																		 </tr>
                                                                         <tr>
																			 <td>3</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td><a>Chacha Lucero</a></td>
                                                                             <td>PhP -- </td>
                                                                             <td>PhP -- </td>
                                                                             <td><a>Check Quotation</a></td>
																		 </tr>
                                                                         <tr>
																			 <td>4</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td><a>Chacha Lucero</a></td>
                                                                             <td>PhP 10000.00</td>
                                                                             <td>PhP 50.00</td>
                                                                             <td><a>Check Invoice</a></td>
																		 </tr>
                                                                         <tr>
																			 <td>5</td>
                                                                             <td></td>
                                                                             <td>LCSC Flyers</td>
                                                                             <td><a>Chacha Lucero</a></td>
                                                                             <td>PhP 10000.00</td>
                                                                             <td>PhP 50.00</td>
                                                                             <td><a>Delivered</a></td>
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
