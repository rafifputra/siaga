<div class="page-container">
	<div class="main-container">
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="jumbotron">
					<div class="container p-l-0 p-r-0 container-fixed-lg sm-p-l-0 sm-p-r-0">
						<div class="inner">
							<ol class="breadcrumb" style="padding-top: 10px;">
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/slipway" class="router-link-exact-active active">Slipway</a>
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
										EDIT SLIPWAY
									</div>
									<div class="panel-body">
										<div class="row">
											<form role="form" action="{{url('slipway/update')}}" method="POST">
												{{csrf_field()}}
												<input type="hidden" name="id" value="{{$slipway->id}}">
												<div class="col-md-6">
													<div class="form-group{{$errors->has('code') ? ' has-error' : '' }}">
														<label>CODE SLIPWAY<a class="simbol" style="margin-left: 5px;">*</a></label>
														<input type="text" name="code" class="form-control" value="{{$slipway->code}}">
														@if($errors->has('code'))
            												<span class="help-block">Please fill out this field</span>
        												@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('name') ? ' has-error' : '' }}">
														<label>NAME<a class="simbol" style="margin-left: 5px;">*</a></label>
														<input type="text" name="name" class="form-control" 
															value="{{$slipway->name}}">
														@if($errors->has('name'))
            												<span class="help-block">Please fill out this field</span>
        												@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('length') ? ' has-error' : '' }}">
														<label>LENGTH<a class="simbol" style="margin-left: 5px;">*</a></label>
														<input type="number" name="length" class="form-control" 
															value="{{$slipway->length}}">
														@if($errors->has('length'))
            												<span class="help-block">Please fill out this field</span>
        												@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('width') ? ' has-error' : '' }}">
														<label>WIDTH<a class="simbol" style="margin-left: 5px;">*</a></label>
														<input type="number" name="width" class="form-control" 
															value="{{$slipway->width}}">
														@if($errors->has('width'))
            												<span class="help-block">Please fill out this field</span>
        												@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('depth') ? ' has-error' : '' }}">
														<label>DEPTH
															<a class="simbol" style="margin-left: 5px;">*</a>
														</label>
														<input type="number" name="depth" class="form-control" 
															value="{{$slipway->depth}}">
														@if($errors->has('depth'))
            												<span class="help-block">Please fill out this field</span>
        												@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('type') ? ' has-error' : '' }}">
														<label>TYPE<a class="simbol" style="margin-left: 5px;">*</a></label>
														<select class="form-control" id="selecttypeslipway" name="type">
															<option value="{{$slipway->m_slipway_type_id}}">
																{{$slipway->namatype}}</option>	
														</select>
														@if($errors->has('type'))
            												<span class="help-block">Please fill out this field</span>
        												@endif
													</div>
													<script>
														$(function(){
													       $('#selecttypeslipway').select2({
													           minimumInputLength: 1,
													           allowClear: true,
													           placeholder: 'Select Type Slipway',
													           ajax: {
													              dataType: 'json',
													              url: '/caritipeslipway',
													              delay: 250,
													              data: function(params) {
													                return {
													                  cari: params.term
													                }
													              },
													              processResults: function (data) {
													              return {
													                results: $.map(data, function (item){
															        	return{
															        	  text: item.name,
															        	  id: item.id
															        	}
															        })
													              };
													            },
													          }
													        })
													 	});
													</script>
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