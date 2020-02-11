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
									<a href="/slipway" class="router-link-exact-active active" style="color: #febd69;">Slipway</a>
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
										VIEW SLIPWAY
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<form role="form" action="{{url('/slipwaySearch')}}" method="GET">
														<div class="input-group add-on">
															<input class="form-control" type="text" name="caridata" placeholder="Search Records">
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
													<a href="/slipway/create">
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
					                							<th class="text-center" style="width: 3%">NO</th>
									                			<th class="text-center" style="width: 8%">
									                				CODE SLIPWAY
									                			</th>
									                			<th class="text-center" style="width: 15%"> 
									                				Name
									                			</th>
									                			<th class="text-center" style="width: 15%">
									                				LENGTH
									                			</th>
									                			<th class="text-center" style="width: 15%">
									                				WIDTH
									                			</th>
									                			<th class="text-center" style="width: 15%">
									                				DEPTH
									                			</th>
									                			<th class="text-center" style="width: 20%">
									                				TYPE
									                			</th>
									               				<th class="text-center" style="width: 20%">
									               					ACTIONS
									               				</th>
					                						</tr>
					                					</thead>
					                					<?php $no = $m_slipway->firstItem(); ?>
				                						@foreach($m_slipway as $slipways)
					                					<tbody>
					                						<tr>
					                							<td class="text-center">{{$no++}}</td>
					                							<td class="text-center">{{$slipways->code}}</td>
					                							<td class="text-center">{{$slipways->name}}</td>
					                							<td class="text-center">{{$slipways->length}}</td>
					                							<td class="text-center">{{$slipways->width}}</td>
					                							<td class="text-center">{{$slipways->depth}}</td>
					                							<td class="text-center">{{$slipways->MSlipwayType["name"]}}</td>
					                							<td class="vuetable-slot text-center v-align-middle">
					                								<div class="btn-group btn-group-xs">
							               								<a class="btn btn-edit" href="/slipway/edit{{ $slipways->id }}">
							           									<i class="fa fa-pencil"></i>
							                							</a>
							               							</div>
							               							<div class="btn-group btn-group-xs">
							               								<a class="btn btn-delete" href="/slipway/delete{{ $slipways->id }}" 
												               				onclick=
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
					                					Jumlah Data : {{ $m_slipway->total() }} <br/>
					                					<?php echo str_replace('/?', '?', $m_slipway->render()); ?>
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