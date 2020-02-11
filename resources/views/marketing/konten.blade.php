<div class="page-container">
	<div class="main-container">
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="jumbotron">
					<div class="container p-l-0 p-r-0 container-fixed-lg sm-p-l-0 sm-p-r-0">
						<div class="inner">
							<ol class="breadcrumb" style="padding-top: 10px;">
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/home" class="breadcrumb-tittle">Home</a>
								</li>
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/sales-activities" style="color: #febd69;">Sales Activity</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div id="page-wrapper">
					<div id="page-inner">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										VIEW SALES ACTIVITY
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<form role="form" action="{{url('/salessearch')}}" method="GET">
														<div class="input-group add-on">
															<input class="form-control" type="text" name="caridata" placeholder="Search By Customer and Sales">
															<div class="input-group-btn">
																<button class="form-control" type="submit" value="caridata">
																	<i class="fa fa-search"></i>
																</button>
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="col-md-12">
												<div class="btn-add" style="padding-bottom: 50px;">
													<a href="sales-activities/create">
														<button class="btn btnadd" style="float: right;">
															<i class="fa fa-plus"></i>
																Add 
														</button>
													</a>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													@if ($message = Session::get('message'))
												        <div class="alert alert-success martop-sm">
												            <p>{{ $message }}</p>
												        </div>
												    @endif
													<table class="vuetable table table-hover table-responsive-block" 
					                				   style="background-color: white;">                					
					                					<thead>
					                						<tr>
					                							<th class="text-right" style="width: 3%">NO</th>
									                			<th rowspan="1" colspan="1" style="width: 8%">
									                				CODE 
									                			</th>
									                			<th class="text-center"> 
									                				DATE
									                			</th>
									                			<th class="text-center">
									                				CUSTOMER
									                			</th>
									                			<th class="text-center">
									                				SHIP
									                			</th>
									                			<th class="text-center">
									                				SALES
									                			</th>
									                			<th class="text-center">
									                				EXP REVENUE
									                			</th>
									                			<th class="text-center">
									                				PROGEESS
									                			</th>
									               				<th class="text-center">
									               					ACTIONS
									               				</th>
					                						</tr>
					                					</thead>
					                					@php $no = 1; @endphp
				                						@foreach($t_sales_activities as $sales)
					                					<tbody>
					                						<tr>
					                							<td class="text-center">{{ $no++ }}</td>
                												<td class="text-center">{{$sales->code}}</td>
                												<td class="text-center">{{$sales->date}}</td>
                												<td class="text-center">{{$sales->customer_name}}</td>
                												<td class="text-center">{{$sales->ships_name}}</td>
                												<td class="text-center">{{$sales->sales_name}}</td>
                												<td class="text-center">{{$sales->exp_revenue}}</td>
                												<td class="text-center">{{$sales->activity}}</td>
					                							<td class="text-center">
					                								<div class="btn-group btn-group-xs">
							               								<a class="btn btn-edit" href="/salesAdd/edit{{ $sales->id }}">
							           									<i class="fa fa-pencil"></i>
							                							</a>
							               							</div>
							               							<div class="btn-group btn-group-xs">
							               								<a class="btn btn-delete" href="/salesActivitiesModalALL/delete{{ $sales->id }}" onclick=
												               				"return confirm('Apakah anda yakin ingin menghapusnya?')">
							           									<i class="fa fa-trash-o"></i>
							                							</a>
							               							</div>
					                							</td>
					                						</tr>
					                					</tbody>	
					                					@endforeach   	
					                				</table>
					                				<div class="col-md-10">
					                					<br>
					                					Jumlah Data : {{ $t_sales_activities->total() }} <br/>
					                					<?php echo str_replace('/?', '?', $t_sales_activities->render()); ?>
					                				</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>