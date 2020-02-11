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
									<span href="" class="router-link-exact-active active" style="color: #febd69;">Create</span>
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
									@if ($message = Session::get('message'))
								        <div class="alert alert-danger martop-sm">
								            <p>{{ $message }}</p>
								        </div>
								    @endif
									<div class="panel-heading">
										NEW CUSTOMER
									</div>
									<div class="panel-body">
										<div class="row">
											<form role="form" action="{{url('customerAdd')}}" method="POST">
												{{csrf_field()}}
												<div class="col-md-6">
													<div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
														<label>NAME (COMPANY NAME)
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="name" class="form-control">
														@if($errors->has('name'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('type') ? ' has-error' : ''}}">
														<label>COMPANY TYPE<a class="simbol" style="margin-left: 5px;">*</a></label>
														<select class="form-control" id="type" name="type">
										                    <option value="CV">CV</option>
										                    <option value="PT">PT</option>  		
										                </select>
										                @if($errors->has('type'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
														<label>E-MAIL ADDRESS
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="email" class="form-control">
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
														<input type="text" name="address_1" class="form-control">
														@if($errors->has('address_1'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>ADDRESS 2 (optional)
															
														</label>
														<input type="text" name="address_2" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('postal_code') ? ' has-error' : ''}}">
														<label>POSTAL CODE
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="number" name="postal_code" class="form-control">
														@if($errors->has('postal_code'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>NPWP</label>
														<input type="number" name="npwp" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('contact_name') ? ' has-error' : ''}}">
														<label>CONTACT NAME
															<a class="simbol" style="margin-left: 5px;">*</a>
														</label>
														<input type="text" name="contact_name" class="form-control">
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
														<input type="number" name="phone" class="form-control">
														@if($errors->has('phone'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6" style="padding-top: 35px; padding-right: 300px;">
													<button class="btn btn-save" type="submit" style="float: right;">
														Save
													</button>
													<button class="btn btn-delete" type="button"  value="cancel" 
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