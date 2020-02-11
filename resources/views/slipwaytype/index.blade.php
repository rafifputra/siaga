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
									<a href="/slipwaytype" class="router-link-exact-active active" style="color: #febd69;">Slipway Type</a>
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
										VIEW SLIPWAY TYPE
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<form role="form" action="{{url('/slipwaytypeSearch')}}" method="GET">
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
													<a href="/slipwaytype/create">
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
					                							<th class="text-center" 
					                								style="width: 10%">NO</th>
									                			<th class="text-center" 
									                				style="width: 30%">
									                				CODE SLIPWAYTYPE
									                			</th>
									                			<th class="text-center" 
									                				style="width: 30%"> 
									                				Name
									                			</th>
									               				<th class="text-center" 
									               					style="width: 0%">
									               					ACTIONS
									               				</th>
					                						</tr>
					                					</thead>
					                					<?php $no = $slipwaytype->firstItem(); ?>
				                						@foreach($slipwaytype as $slipwaytypes)
					                					<tbody>
					                						<tr>
					                							<td class="text-center">{{$no++}}</td>
					                							<td class="text-center">{{$slipwaytypes->code}}</td>
					                							<td class="text-center">{{$slipwaytypes->name}}</td>
					                							<td class="vuetable-slot text-center v-align-middle">
					                								<div class="btn-group btn-group-xs">
							               								<a class="btn btn-edit" href="/slipwaytype/edit{{ $slipwaytypes->id }}">
							           									<i class="fa fa-pencil"></i>
							                							</a>
							               							</div>
							               							<div class="btn-group btn-group-xs">
							               								<a class="btn btn-delete" href="/slipwaytype/delete{{ $slipwaytypes->id }}" 
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
					                					Jumlah Data : {{ $slipwaytype->total() }} <br/>
					                					<?php echo str_replace('/?', '?', $slipwaytype->render()); ?>
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