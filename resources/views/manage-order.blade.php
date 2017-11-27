@extends('templates.layout')


<title>Manage Order</title>

@section('mainPane')


		<!-- ORDER FORM -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
						<div class="card">
							<div class="content">
								<form><div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												{{ Form::label('jobname', 'Job Name') }}
												{{ Form::text('jobname', 'Enter', ['class' => 'form-control border-input'])}}
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												{{ Form::label('jobtype', 'Job Type') }}
												{{ Form::text('jobType', 'Enter', ['class' => 'form-control border-input'])}}
											</div>
										</div>
									</div>
								</form>
							</div>

							<div class="header">
								<h4 class="title">Specifications</h4>
							</div>
							<!-- FORM CONTENT -->
							<div class="content">
								<form autocomplete="on">
								  <div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											{{ Form::label('quantity', 'Quantity') }}
												<div class="container">
													<div class="count-input space-bottom">
													<a class="incr-btn" data-action="decrease" href="#">–</a>
													{{ Form::text('quantity', '1', ['class' => 'quantity'])}}
													<a class="incr-btn" data-action="increase" href="#">&plus;</a>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											{{ Form::label('numPages', 'Number of Pages') }}
												<div class="container">
													<div class="count-input space-bottom">
													<a class="incr-btn" data-action="decrease" href="#">–</a>
													{{ Form::text('quantity', '1', ['class' => 'quantity'])}}
													<a class="incr-btn" data-action="increase" href="#">&plus;</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<label><b>Stocks</b></label>
										<div class="row">
										<div class="col-md-4">
										  <div class="form-group">
										  {{ Form::label('cover_color', 'Cover: ') }}
										  {{ Form::select('cover_color',
										  ['Colored' => 'Colored',
										  'Grayscale' => 'Grayscale'], 'Colored', ['class' => 'form-control border-input'])}}
										<br><br>
										  </div>
									  </div>

									  <div class="col-md-4">
										  <div class="form-group">
										  {{ Form::label('inside_color', 'Inside: ') }}
										  {{ Form::select('cover_color',
										  ['Colored' => 'Colored',
										  'Grayscale' => 'Grayscale'], 'Colored', ['class' => 'form-control border-input'])}}
										<br><br>
										  </div>
									  </div>
								  	</div>

									<div class="row">
									  <div class="col-md-6">
										  <div class="form-group">
											  {{ Form::label('job_sample', 'Job Sample') }}
												{{Form::file('myFile')}}
										  </div>
									  </div>
								  </div>

								  <div class="row">
									  <div class="col-lg-6">
										  <div class="form-group">
											 {{ Form::label('size', 'Size') }}
											 {{ Form::text('size', 'Enter', ['class' => 'form-control border-input'])}}
										  </div>
									  </div>
								  </div>

								  <div class="row">
									  <div class="col-lg-6">
										  <div class="form-group">
											  {{ Form::label('papertype', 'Paper Type') }}
											 {{ Form::text('size', 'Enter', ['class' => 'form-control border-input'])}}
										  </div>
									  </div>
								  </div>

								  <div class="row">
									  <div class="col-md-6">
										  <div class="form-group">
										 	 {{ Form::label('date_due', 'Date Due') }}
											 {{ Form::date('date_due', \Carbon\Carbon::now(), ['class' => 'form-control border-input'])}}
										  </div>
									  </div>
								  </div>

								  <div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											{{ Form::label('lamination', 'Lamination') }}
											{{ Form::text('lamination', 'Enter', ['class' => 'form-control border-input'])}}
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											{{ Form::label('binding', 'Binding') }}
											{{ Form::text('binding', 'Enter', ['class' => 'form-control border-input'])}}
										</div>
									</div>
									</div>


								  <div class="row">
									  <div class="col-md-12">
										  <div class="form-group">
										  	{{ Form::label('comments', 'Comments') }}
											{{ Form::textarea('comments', 'Here can be your description', ['class' => 'form-control border-input' , 'row' => 5])}}
										  </div>
									  </div>
								  </div>

								  <div class="text-center">
                        {{Form::button('Submit for Quotation', ['class' => 'btn btn-success btn-fill btn-wd'])}}

								  </div>
									</form>
								  <div class="clearfix"></div>
								  </div>
			</div>
		</div>
@endsection
