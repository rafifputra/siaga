<div class="page-container">
	<div class="main-container">
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="jumbotron">
					<div class="container p-l-0 p-r-0 container-fixed-lg sm-p-l-0 sm-p-r-0">
						<div class="inner">
							<ol class="breadcrumb" style="padding-top: 10px;">
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/slipwaytype" class="router-link-exact-active active">
									Slipway Type</a>
								</li>
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<span class="router-link-exact-active active" style="color: #febd69;">Create</span>
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
										NEW SLIPWAY
									</div>
									<div class="panel-body">
										<div class="row">
											<form role="form" action="{{url('slipwaytypeAdd')}}" method="POST">
												{{csrf_field()}}
												<div class="col-md-6">
													<div class="form-group{{$errors->has('code') ? ' has-error' : ''}}">
														<label>CODE SLIPWAYTYPE
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="code" class="form-control">
														@if($errors->has('code'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
														<label>NAME
															<span class="simbol" style="margin-left: 5px;">*</span></label>
														<input type="text" name="name" class="form-control">
														@if($errors->has('name'))
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