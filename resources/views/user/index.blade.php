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
									<a href="/user" style="color: #febd69;">Account</a>
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
										VIEW ACCOUNT
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<form role="form" action="{{url('/userSearch')}}" method="GET">
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
													<a href="/user/create">
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
					                								style="width: 5%">
					                								NO
					                							</th>
									                			<th class="text-center" 
									                				style="width: 10%">
									                				Name
									                			</th>
									                			<th class="text-center" 
									                				style="width: 10%"> 
									                				UserName
									                			</th>
									                			<th class="text-center" 
									                				style="width: 10%">
									                				Email
									                			</th>
									                			<th class="text-center" 
									                				style="width: 10%">
									                				Position
									                			</th>
									               				<th class="text-center" 
									               					style="width: 10%">
									               					ACTIONS
									               				</th>
					                						</tr>
					                					</thead>
					                					<?php $no = $user->firstItem(); ?>
				                						@foreach($user as $users)
					                					<tbody>
					                						<tr>
					                							<td class="text-center">{{$no++}}</td>
					                							<td class="text-center">
					                								{{$users->name}}
					                							</td>
					                							<td class="text-center">
					                								{{$users->username}}
					                							</td>
					                							<td class="text-center">
					                								{{$users->email}}
					                							</td>
					                							<td class="text-center">
					                								{{$users->role}}
					                							</td>
					                							<td class="text-center">
					                								<div class="btn-group btn-group-xs">
							               								<a class="btn btn-edit" href="/user/edit{{$users->id}}">
							           									<i class="fa fa-pencil"></i>
							                							</a>
							               							</div>
							               							<div class="btn-group btn-group-xs">
							               								<a class="btn btn-delete" href="user/delete{{ $users->id }}" onclick=
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
					                					Jumlah Data : {{ $user->total() }} <br/>
					                					<?php echo str_replace('/?', '?', $user->render()); ?>
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