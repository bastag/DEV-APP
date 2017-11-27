@extends('templates.layout')
	<title>Manage Quotation</title>

@section('mainPane')
	<!-- ORDER FORM -->
        <div class="content">
            <div class="container-fluid">
                <!-- PRICE COMPUTATIONS -->
				<div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
                        <div class="card">
						<div>
								<table  class="table table-hover" style="width:100%">
								<col width="130">
								<col width="80">
									<thead>
										<th width="25%">Order #</th>
										<th width="25%">Title of Job</th>
										<th width="25%">Customer</th>
										<th width="25%">Salesman</th>
									</thead>

									<tbody>
										<tr>
										<td>3</td>
										<td>LCSC Flyer</td>
										<td><a>Crisostomo Ibarra</a></td>
										<td><a>Nidora Zobeyala</a></td>
										</tr>
									</tbody>
								</table>

								<hr>
							</div>
                            <div class="header">
								<center><h2 class="title">Price Computations</h2>
                                </center>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover" style="width:100%">
								<col width="130">
								<col width="80">

								{!! Form::open(['action' => 'QuotationsController@store']) !!}

								<thead>
								<th width="25%"></th>
								<th width="25%">Specification</th>
                                <th width="25%">Price</th>
								</thead>
								
								<tbody>
								
								<tr>
								<td><b>{{ Form::label('quantity', 'Quantity') }}<b></td>
								<td>50</td>
								<td></td>
								</tr>
								
								<tr>
								<td>Stocks:</td>
								<td></td>
								<td></td>
								</tr>
								
								<tr>
								<td style="text-indent:30pt">{{ Form::label('cover_stock_price', 'Cover') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('cover_stock_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
                                </tr>
								
								<tr>
								<td style="text-indent:30pt">{{ Form::label('inside_stock_price', 'Inside') }}</td>
								<td>--</td>
								<td width="25%">{{ Form::text('inside_stock_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>Typesetting</td>
                                <td></td>
								<td></td>
								</tr>
								
								<tr>
								<td>{{ Form::label('layout_price', 'Layout/Design') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('layout_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>{{ Form::label('colsep_price', 'Color Separation') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('colsep_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>{{ Form::label('digineg_price', 'Digital Negative Output') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('digineg_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>Offset Running</td>
                                <td></td>
								<td></td>
								</tr>
								
								<tr>
								<td style="text-indent:30pt">{{ Form::label('cover_offset_price', 'Cover') }}</td>
                                <td> -- </td>
								<td width="25%">{{ Form::text('cover_offset_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td style="text-indent:30pt">{{ Form::label('inside_offset_price', 'Inside') }}</td>
                                <td> -- </td>
								<td width="25%">{{ Form::text('inside_offset_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td style="text-indent:30pt">{{ Form::label('other_offset_price', 'Others') }}</td>
                                <td> -- </td>
								<td width="25%">{{ Form::text('other_offset_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>{{ Form::label('lamination_price', 'Lamination') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('lamination_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>

								<tr>
								<td>{{ Form::label('letterpress_price', 'Letterpress Running') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('letterpress_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>{{ Form::label('binding_price', 'Binding') }}</td>
                                <td> -- </td>
								<td width="25%">{{ Form::text('binding_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>{{ Form::label('diecut_price', 'Die Cutting/Blades/Cliche') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('diecut_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>{{ Form::label('diecut_run_price', 'Diecutting Running') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('diecut_run_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr>
								<td>{{ Form::label('other_price', 'Others') }}</td>
								<td> -- </td>
								<td width="25%">{{ Form::text('other_price', '', ['class' => 'form-control border-input', 'placeholder' => 'How much?'])}}
								</td>
								</tr>
								
								<tr></tr>
								<tr></tr>
								
								<tr>
								<td>Total:</td>
								<td></td>
								<td>PhP </td>
								</tr>

								<tr>
								<td>Unit Cost:</td>
								<td></td>
								<td>PhP -.--</td>
								</tr>
								</tbody>	
                            </table>
							<div>
								{{Form::submit('Compute', ['class' => 'btn btn-warning btn-fill btn-wd'])}}</td>
								</div>
							{!! Form::close() !!}	
								<div>
									{{Form::submit('Post', ['class' => 'btn btn-success btn-fill btn-wd'])}}
								</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
