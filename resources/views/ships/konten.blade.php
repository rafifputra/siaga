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
									<a href="/shipyard" style="color: #febd69;">Ships</a>
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
										VIEW SHIP
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<form role="form" action="{{url('/shipyardSearch')}}" method="GET">
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
													<a href="/shipyard/create">
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
									                				CODE SHIP
									                			</th>
									                			<th class="text-center" style="width: 15%"> 
									                				Name
									                			</th>
									                			<th class="text-center" style="width: 15%">
									                				LOA
									                			</th>
									                			<th class="text-center" style="width: 15%">
									                				DEADWEIGHT
									                			</th>
									                			<th class="text-center" style="width: 15%">
									                				COEFISIEN BLOCK(CB) 
									                			</th>
									                			<th class="text-center" style="width: 20%">
									                				TYPE
									                			</th>
									               				<th class="text-center" style="width: 20%">
									               					ACTIONS
									               				</th>
					                						</tr>
					                					</thead>
					                					<?php $no = $m_ships->firstItem(); ?>
				                						@foreach($m_ships as $ship)
					                					<tbody>
					                						<tr>
					                							<td class="text-center">{{$no++}}</td>
					                							<td class="text-center">{{$ship->code}}</td>
					                							<td class="text-center">{{$ship->name}}</td>
					                							<td class="text-center">{{$ship->loa}}</td>
					                							<td class="text-center">{{$ship->deadweight}}</td>
					                							<td class="text-center">{{$ship->coefisien_block}}</td>
					                							<td class="text-center">{{$ship->MShipType["name"]}}</td>
					                							<td class="text-center">
					                								<div class="btn-group btn-group-xs">
							               								<a class="btn btn-edit" href="/shipyardAdd/edit{{ $ship->id }}">
							           									<i class="fa fa-pencil"></i>
							                							</a>
							               							</div>
							               							<div class="btn-group btn-group-xs">
							               								<a class="btn btn-delete" href="/shipyardAdd/delete{{ $ship->id }}" onclick=
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
					                					Jumlah Data : {{ $m_ships->total() }} <br/>
					                					<?php echo str_replace('/?', '?', $m_ships->render()); ?>
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