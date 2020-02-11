<div class="page-container">
	<div class="main-container">
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="jumbotron">
					<div class="container p-l-0 p-r-0 container-fixed-lg sm-p-l-0 sm-p-r-0">
						<div class="inner">
							<ol class="breadcrumb" style="padding-top: 10px;">
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/customer" class="router-link-exact-active active">
									Customer</a>
								</li>
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<span href="" class="router-link-exact-active active" style="color: #febd69;">EDIT</span>
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
										EDIT CUSTOMER
									</div>
									<div class="panel-body">
										<div class="row">
											<form role="form" action="{{url('customer/update')}}"
											 method="POST">
												{{csrf_field()}}
												<input type="hidden" name="id" value=
												"{{$customer->id}}">
												<div class="col-md-6">
													<div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
														<label>NAME (COMPANY NAME)
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="name" class="form-control" 
															value="{{$customer->name}}">
														@if($errors->has('name'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('type') ? ' has-error' : ''}}">
														<label>COMPANY TYPE
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="type" class="form-control" 
															value="{{$customer->type}}">
														@if($errors->has('type'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
														<label>EMAIL
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="email" class="form-control" 
															value="{{$customer->email}}">
														@if($errors->has('email'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('address_1') ? ' has-error' : ''}}">
														<label>ADDRESS 1
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="address_1" class="form-control" 
															value="{{$customer->address_1}}">
														@if($errors->has('address_1'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>ADDRESS 2 (optional)
															<a class="simbol" style="margin-left: 5px;">*</a>
														</label>
														<input type="text" name="address_2" class="form-control" 
															value="{{$customer->address_2}}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('postal_code') ? ' has-error' : ''}}">
														<label>POSTAL CODE
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="postal_code" class="form-control" 
															value="{{$customer->postal_code}}">
														@if($errors->has('postal_code'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>NPWP</label>
														<input type="text" name="npwp" class="form-control" 
															value="{{$customer->npwp}}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('contact_name') ? ' has-error' : ''}}">
														<label>CONTACT NAME
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="contact_name" class="form-control" 
															value="{{$customer->contact_name}}">
														@if($errors->has('contact_name'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('phone') ? ' has-error' : ''}}">
														<label>PHONE
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="phone" class="form-control" 
															value="{{$customer->phone}}">
														@if($errors->has('phone'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6" style="padding-top: 35px; padding-right: 300px;">
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