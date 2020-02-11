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
									<a href="/shiptype" class="router-link-exact-active active" style="color: #febd69;">
									Ship Type</a>
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
										VIEW SHIP TYPE
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<form role="form" action="{{url('/shiptypeSearch')}}" method="GET">
														<div class="input-group add-on">
															<input class="form-control" type="text" name="search" placeholder="Search Records">
															<div class="input-group-btn">
																<button class="form-control" type="submit" value="cari">
																	<i class="fa fa-search"></i>
																</button>
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="col-md-12" style="padding-bottom: 20px; padding-top: 10px;">
												<div class="btn-add">
													<a href="{{url('/shiptype/create')}}">
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
					                							<th class="text-center">NO</th>
									                			<th class="text-center" style="width: 30%;">CODE SHIPTYPE</th>
									                			<th class="text-center" style="width: 30%;">Name</th>
									               				<th class="text-center">ACTIONS</th>
					                						</tr>
					                					</thead>
					                					<tbody>
					                						<?php $no = 1; ?>
					                						@foreach($shiptype as $ship)
					                						<tr>
					                							<td class="text-center">{{$no++}}</td>
					                							<td class="text-center">{{$ship->code}}</td>
					                							<td class="text-center">{{$ship->name}}</td>
					                							<td class="text-center">
					                								<div class="btn-group btn-group-sm" style="margin: 5px;">
							                							<a class="btn btn-edit" href="/shiptypeEdit{{ $ship->id }}" style="margin: 3px;">
							           										<i class="fa fa-pencil" style="margin: 3px;"></i>
							           										EDIT		
							                							</a>
							                							<a class="btn btn-delete" 
							                								href="/shiptype/delete{{ $ship->id }}" 
							                								style="margin: 3px;"
							                								onclick= "return confirm('Apakah anda yakin ingin menghapusnya?')">
							           										<i class="fa fa-trash-o" style="margin: 3px;"></i>
							           										DELETE		
							                							</a>
							               							</div>
					                							</td>
					                						</tr>
					                						@endforeach
					                					</tbody>	
					                				</table>
					                				<div class="col-md-10">
					                					<br>
					                					Jumlah Data : {{ $shiptype->total() }} <br/>
					                					<?php echo str_replace('/?', '?', $shiptype->render()); ?>
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