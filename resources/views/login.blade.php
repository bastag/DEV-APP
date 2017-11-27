@extends('templates.layout')

<title>Log in</title>

				<!-- MAIN CONTENT -->
		@section('mainPane')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
			              <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
											<!-- LOGIN SECTION -->
											<div class="card card-plain">
													<div class="header">
															<h4 class="title text-center">WELCOME TO COVER & PAGES</h4>
															<!-- <p class="category">Here is a subtitle for this table</p> -->
													</div>
													<div class="content">
														<form>
															<div class="form-group">
																	<label>Login</label>
																	<input type="text" class="form-control border-input"  placeholder="Enter">
															</div>
															<div class="form-group">
																	<label>Password</label>
																	<input type="text" class="form-control border-input" placeholder="Enter">
																	<br>
															</div>

														</form>

														<div class="text-center">
																<button type="submit" class="btn btn-info btn-fill btn-wd">Log in</button>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>

										</div>

								</div>
            </div>
        </div>

@endsection