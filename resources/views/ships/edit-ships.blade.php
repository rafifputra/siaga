<div class="page-container">
	<div class="main-container">
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="jumbotron">
					<div class="container p-l-0 p-r-0 container-fixed-lg sm-p-l-0 sm-p-r-0">
						<div class="inner">
							<ol class="breadcrumb" style="padding-top: 10px;">
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/shipyard" class="router-link-exact-active active">Ships</a>
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
										EDIT SHIP
									</div>
									<div class="panel-body">
										<div class="row">
											<form role="form" action="{{url('shipyardAdd/update')}}" method="POST">
												{{csrf_field()}}
												<input type="hidden" name="id" value="{{$ship->id}}">
												<div class="col-md-6">
													<div class="form-group{{$errors->has('code') ? ' has-error' : ''}}">
														<label>CODE SHIP
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="code" class="form-control" 
															value="{{$ship->code}}">
														@if($errors->has('code'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('name') ? ' has-error' : ''}}">
														<label>NAME
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="text" name="name" class="form-control" 
															value="{{$ship->name}}">
														@if($errors->has('name'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('loa') ? ' has-error' : ''}}">
														<label>LOA
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="number" name="loa" class="form-control" 
															value="{{$ship->loa}}">
														@if($errors->has('loa'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('deadweight') ? ' has-error' : ''}}">
														<label>DEADWEIGHT
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="number" name="deadweight" class="form-control" 
															value="{{$ship->deadweight}}">
														@if($errors->has('deadweight'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('cb') ? ' has-error' : ''}}">
														<label>COEFISIEN BLOCK
															<span class="simbol" style="margin-left: 5px;">*</span>
														</label>
														<input type="number" name="cb" class="form-control" 
															value="{{$ship->coefisien_block}}">
														@if($errors->has('cb'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group{{$errors->has('type') ? ' has-error' : ''}}">
														<label>TYPE<a class="simbol" style="margin-left: 5px;">*</a></label>
														<select class="form-control" id="selecttypeship" name="type">
															<option value="{{$ship->m_ship_type_id}}">
																{{$ship->namatype}}</option>
															@if($errors->has('type'))
																<span class="help-block">Please fill out this field</span>
															@endif	
														</select>
													</div>
													<script>
														$(function(){
													       $('#selecttypeship').select2({
													           minimumInputLength: 1,
													           allowClear: true,
													           placeholder: 'Select Type Ship',
													           ajax: {
													              dataType: 'json',
													              url: '/caritipekapal',
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
													<button class="btn btn-delete" type="button"
														value="cancel" style="margin-right: 10px; float: right;" 
														onclick="history.back(-1)">
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