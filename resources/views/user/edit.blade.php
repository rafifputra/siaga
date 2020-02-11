<div class="page-container">
	<div class="main-container">
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="jumbotron">
					<div class="container p-l-0 p-r-0 container-fixed-lg sm-p-l-0 sm-p-r-0">
						<div class="inner">
							<ol class="breadcrumb" style="padding-top: 10px;">
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/user" class="router-link-exact-active active">Account</a>
								</li>
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<span class="router-link-exact-active active" style="color: #febd69;">EDIT</span>
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
										EDIT ACCOUNT
									</div>
									<div class="panel-body">
										<div class="row">
											<form role="form" action="{{url('user/update')}}" method="POST">
												{{csrf_field()}}
												<input type="hidden" name="id" value="{{$users->id}}">
												<div class="col-md-6">
													<div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
														<label>NAME<a class="simbol" style="margin-left: 5px;">*</a></label>
														<input type="text" name="name" class="form-control" 
															value="{{$users->name}}">
														@if($errors->has('name'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('username') ? ' has-error' : ''}}">
														<label>USERNAME<a class="simbol" style="margin-left: 5px;">*</a></label>
														<input type="text" name="username" class="form-control" 
															value="{{$users->username}}">
														@if($errors->has('username'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
														<label>EMAIL<a class="simbol" style="margin-left: 5px;">*</a></label>
														<input type="email" name="email" class="form-control" value="{{$users->email}}">
														@if($errors->has('email'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('role') ? ' has-error' : ''}}">
														<label>POSITION<a class="simbol" style="margin-left: 5px;">*</a></label>
														<select class="form-control" id="role" name="role">
															<option value="admin" 
																{{$users->role =='admin'?'selected':''}}>ADMIN
															</option>
										                    <option value="sales"
										                    	{{$users->role =='sales'?'selected':''}}>SALES
										                    </option>  
										                    <option value="operation" 
										                    	{{$users->role =='operation'?'selected':''}}>OPERATION
										                    </option>
										                    <option value="finance"
										                    	{{$users->role =='finance'?'selected':''}}>FINANCE
										                	</option>
										                @if($errors->has('role'))
															<span class="help-block">Please fill out this field</span>
														@endif	
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
														<label>PASSWORD
															<a class="simbol" style="margin-left: 5px;">*</a>
														</label>
														<input type="password" name="password" class="form-control">
														@if($errors->has('password'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('password_confirmation') ? ' has-error' : ''}}">
														<label>RE PASSWORD
															<a class="simbol" style="margin-left: 5px;">*</a>
														</label>
														<input type="password" name="password_confirmation" class="form-control" >
														@if($errors->has('password_confirmation'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-12">
													<button class="btn btn-save" type="submit" style="float: right;">
														Save
													</button>
													<button class="btn btn-delete" type="button" value="cancel" 
														style="margin-right: 10px; float: right;" onclick="history.back(-1)">
														Cancel
													</button>
												</div>
											</form>
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