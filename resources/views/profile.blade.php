@extends('templates.layout')

	<title>Profile</title>

@section('mainPane')
				<!-- MAIN CONTENT -->
			<div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="img/faces/face-2.jpg" alt="..."/>
                                  <h4 class="title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<br />
                                     <a href="#"><small>{{ Auth::user()->user_type }}</small></a>
                                  </h4>
                                </div>
	                                <p class="description text-center">
																		{{ Auth::user()->user_type }}
	                                </p>
                            	</div>
                            <hr>
                        </div>

												@if( Auth::user()->user_type == 'Sales Agent' || Auth::user()->user_type == 'Owner')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Customers</h4>
                            </div>

                            <div class="content">
                                <ul class="list-unstyled team-members">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6">
                                                        Flume
                                                        <br />
                                                        <span class="text-danger"><small>Busy</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>

																			</div>
																		</div>
																		@endif

																		@if(Auth::user()->user_type == 'Owner')

																		<div class="card">
						                            <div class="header">
						                                <h4 class="title">Agents</h4>
						                            </div>

						                            <div class="content">
						                                <ul class="list-unstyled team-members">
						                                            <li>
						                                                <div class="row">
						                                                    <div class="col-xs-3">
						                                                        <div class="avatar">
						                                                            <img src="img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
						                                                        </div>
						                                                    </div>
						                                                    <div class="col-xs-6">
						                                                        Creative Tim
						                                                        <br />
						                                                        <span class="text-success"><small>Available</small></span>
						                                                    </div>

						                                                    <div class="col-xs-3 text-right">
						                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
						                                                    </div>
						                                                </div>
						                                            </li>

						                                            <li>
						                                                <div class="row">
						                                                    <div class="col-xs-3">
						                                                        <div class="avatar">
						                                                            <img src="img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
						                                                        </div>
						                                                    </div>

						                                                    <div class="col-xs-6">
						                                                        Flume
						                                                        <br />
						                                                        <span class="text-danger"><small>Busy</small></span>
						                                                    </div>

						                                                    <div class="col-xs-3 text-right">
						                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
						                                                    </div>

						                                                </div>
						                                            </li>
						                                        </ul>

																									</div>
																								</div>
												@endif
                </div>
            </div>
        </div>
@endsection
