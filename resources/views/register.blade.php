@extends('templates.layout')

	<title>Create Account</title>
    @section('mainPane')
				<!-- MAIN CONTENT -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
			              <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4">

											<!-- REGISTER SECTION-->
											<div class="card card-plain">
													<div class="header">
															<h4 class="title text-center">Welcome to Cover & Pages</h4>
															<!-- <p class="category">Here is a subtitle for this table</p> -->
													</div>
													<div class="content">
														<form>
															<div class="form-group">
																	<label>First Name</label>
																	<input type="text" class="form-control border-input"  placeholder="Enter">
															</div>
                              <div class="form-group">
																	<label>Last Name</label>
																	<input type="text" class="form-control border-input"  placeholder="Enter">
															</div>
                              <div class="form-group">
																	<label>Company</label>
																	<input type="text" class="form-control border-input" placeholder="Enter">
															</div>
                              <div class="form-group">
                                <label>User Type:</label>
                                <label class="radio">
                                 <input type="radio" name="optionsRadios" data-toggle="radio" value="option1">
                                 <i></i>Customer
                               </label>
                               <label class="radio">
                                 <input type="radio" name="optionsRadios" data-toggle="radio" value="option1" checked>
                                 <i></i>Sales Agent
                               </label>
                               <label class="radio">
                                 <input type="radio" name="optionsRadios" data-toggle="radio" value="option1" checked>
                                 <i></i>Owner
                               </label>
                              </div>
															<div class="form-group">
																	<label>Email</label>
																	<input type="text" class="form-control border-input" placeholder="Enter">
															</div>
															<div class="form-group">
																	<label>Password</label>
																	<input type="text" class="form-control border-input" placeholder="Enter">
															</div>
                              <div class="form-group">
																	<label>Confirm Password</label>
																	<input type="text" class="form-control border-input" placeholder="Enter">
															</div>
														</form>
														<div class="text-center">
																<button type="submit" class="btn btn-info btn-fill btn-wd">Sign up</button>
														</div>
													</div>
											</div>
										</div>

								</div>
            </div>
        </div>
@endsection
    </div>
</div>