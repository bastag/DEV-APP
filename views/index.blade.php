@extends('templates.layout')

<title>Dashboard</title>

    @section('mainPane')
	<!-- MAIN CONTENT -->
        <div class="content">
            <div class="container-fluid">
							<div class="row">
								<div class="col-lg-12">
							<!-- CAROUSEL -->
							<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
							  <ol class="carousel-indicators">
							      <li data-target="#carousel" data-slide-to="0" class="active"></li>
							      <li data-target="#carousel" data-slide-to="1"></li>
							      <li data-target="#carousel" data-slide-to="2"></li>
							      <li data-target="#carousel" data-slide-to="3"></li>
							  </ol>

							  <!-- Carousel items -->
							  <div class="carousel-inner">
							    <div class="item active">
							      <div class="slide-content">
							        <video poster="http://192.241.175.50/videos/london.jpg" webkit-playsinline id="bgvid" loop>
							        </video>
							        <div class="slide-overlay door">
							          <div class='title'>Slide 1</div>
							          <div class="description"> The First Description </div>
							        </div>
							      </div>
							    </div>
							    <div class="item">
							      <div class="slide-content">
							        <video poster="http://192.241.175.50/videos/boston.jpg" webkit-playsinline id="bgvid" loop>
							        </video>
							        <div class="slide-overlay door">
							          <div class='title'> Slide 2 </div>
							          <div class="description"> The Second Description </div>
							        </div>
							      </div>
							    </div>
							    <div class="item">
							      <div class="slide-content">
							        <video poster="http://192.241.175.50/videos/split.jpg" webkit-playsinline id="bgvid" loop>
							        </video>
							        <div class="slide-overlay door">
							          <div class='title'>Slide 3</div>
							          <div class="description"> #AnotherOne #AndAnotherOne</div>
							        </div>
							      </div>
							    </div>
							    <div class="item">
							      <div class="slide-content">
							        <video poster="http://192.241.175.50/videos/samo.jpg" webkit-playsinline id="bgvid" loop>
							        </video>
							        <div class="slide-overlay door">
							          <div class='title'>Slide 4</div>
							          <div class="description"> #PapaBlessUp </div>
							        </div>
							      </div>
							    </div>
							  </div>

							  <a class="carousel-control left" href="#carousel" data-slide="prev">
							   <span class="ti-angle-left"></span>
							  </a>

							  <a class="carousel-control right" href="#carousel" data-slide="next">
							   <span class="ti-angle-right"></span>
							  </a>

							</div>
							<br>
							<br>
						</div>
					</div>


								<!--  MAIN CONTENT -->

								<!-- ABOUT SECTION -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <center><h1 class="title">ABOUT</h1></center>
																<hr>
                                <p class="text-center">Information and Communication Technology (ICT) can be stated as a global necessity nowadays with its power to increase and improve data processing and result to very reliable information. Currently, an abundance of usage in ICT of different industries are now empowering a global market to adapt to the rapid development of these different industries. Cover and Pages objective is to stay gain new clients in the printing industry while staying at the forefront of the industry through the quality of their product. The company strives to establish long lasting business and intellectual relationship with their clients. Cover and Pages currently encounters some delays by way of miscommunication or due to forms being misplaced effectively delaying the process. What the project aims to do is to streamline those processes through the use of ICT, and integrating forms used in the process in a digitized system. With the incorporation of ICT, the company would now be in line of rapid success and all employees involved in the sales department,company owner and up to the customer will gain benefit from it. Digitizing the flow of data such as quotation forms, job orders, sales invoice, and delivery receipts, the company will now have a system that can process these data with ease and have production with little or no delays.
																</p>
                            </div>
														<hr>
                            <div class="content">
                                <div class="footer">
                                  <footer class="text-muted">
                                    Cover & Pages
																	</footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


				<!-- SOMETHING SECTION -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-timer"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2015 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection