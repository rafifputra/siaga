<div class="page-container">
	<div id="main-container">
		<div class="page-content-wrapper ">
			<div class="page-content ">
				<div class="jumbotron">
					<div class=" container p-l-0 p-r-0 container-fixed-lg sm-p-l-0 sm-p-r-0">
						<div class="inner">
							<ol class="breadcrumb" style="padding-top: 10px;">
								<li class="breadcrumb-item" style="padding-bottom: 10px;">
									<a href="/sales-activities" class="router-link-exact-active active">Sales Activity</a>
								</li>
								<li class="breadcrumb-item">
									<span class="create">create</span> 
								</li>
							</ol>
							<!--- batas -->
						</div>
					</div>
				</div>
				<!--batas -->
				<div id="page-wrapper">
					<div id="page-inner">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										New Sales Activity
									</div>
									<div class="panel-body">
										<div class="row">											 
											<form role="form" action="{{url('/salesActivitiesModal')}}" method="POST">
												{{csrf_field()}}
												<div class="col-md-4">
													<div class="form-group">
														<label>CODE</label>
														<input type="text" name="code" placeholder="Auto Generated" required="true" 
														class="form-control" value="{{ $kodenya }}" readonly="">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>BRANCH</label>
														<input type="text" name="branch" disabled="disabled" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group{{$errors->has('sales') ? ' has-error' : ''}}">
														<label>SALES</label>
														<select class="form-control" name="sales" id="selectsales">
														</select>
														@if($errors->has('sales'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
													<script type="text/javascript">
													       $('#selectsales').select2({
													           minimumInputLength: 1,
													           allowClear: true,
													           placeholder: 'Select Sales',
													           ajax: {
													              dataType: 'json',
													              url: '/carisales',
													              delay: 800,
													              data: function(params) {
													                return {
													                	cari: params.term 
													                };
													              },
													              processResults: function (data) {
													              return {
															        results:  $.map(data, function (item){
															        	return{
															        		text: item.name,
															        		id: item.id
															        	}
															        })
															      };
													            },
													          },
													      });
													</script>
												</div>
											</div>
									<!--customer- -->
											<div class="row">		
												<div class="col-md-4">
													<div class="form-group{{$errors->has('customer') ? ' has-error' : ''}}">
														<label>CUSTOMER</label>
														 <select id="selectcustomer" class="form-control" name="customer">
														 </select>
														 @if($errors->has('customer'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
													 <script type="text/javascript">
													       $('#selectcustomer').select2({
													           minimumInputLength: 1,
													           allowClear: true,
													           placeholder: 'Select Customer',
													           ajax: {
													              dataType: 'json',
													              url: '/caricustomer',
													              delay: 800,
													              data: function(params) {
													                return {
													                	cari: params.term 
													                };
													              },
													              processResults: function (data) {
													              return {
															        results:  $.map(data, function (item){
															        	return{
															        		text: item.name,
															        		id: item.id
															        	}
															        })
															      };
													            },
													          },
													      });
													</script>
												</div>
									<!-- ship- -->
												<div class="col-md-4">
													<div class="form-group{{$errors->has('ship') ? ' has-error' : ''}}">
														<label>SHIP</label>
														<select id="selectship" class="form-control" name="ship">
														</select>
														@if($errors->has('ship'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
													<script type="text/javascript">
													    $(function(){
													       $('#selectship').select2({
													           minimumInputLength: 1,
													           allowClear: true,
													           placeholder: 'Select Ship',
													           ajax: {
													              dataType: 'json',
													              url: '/carikapal',
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
									 <!-- sipway -->
												<div class="col-md-4">
													<div class="form-group{{$errors->has('slipway') ? ' has-error' : ''}}">
														<label>SlIPWAY</label>
														<select class="form-control" name="slipway" id="selectslipway">
														</select>
														@if($errors->has('slipway'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
													<script type="text/javascript">
													    $(function(){
													       $('#selectslipway').select2({
													           minimumInputLength: 1,
													           allowClear: true,
													           placeholder: 'Select Slipway',
													           ajax: {
													              dataType: 'json',
													              url: '/carislipway',
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
											</div>
											<div class="row">	
												<div class="col-md-4">
													<div class="form-group{{$errors->has('date') ? ' has-error' : ''}}">
														<label>DATE</label>
														<input type="date" name="date" id="date" class="form-control" style="padding: 1px 12px;">
														@if($errors->has('date'))
															<span class="help-block">Please fill out this field</span>
														@endif
														<script type="text/javascript">
															var today = new Date().toISOString().split('T')[0];
    														document.getElementsByName("date")[0].setAttribute('min', today);
														</script>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group{{$errors->has('estdockingdate') ? ' has-error' : ''}}">
														<label>EST DOCKING DATE</label>
														<input type="date" name="estdockingdate" class="form-control" style="padding: 1px 12px;">
														@if($errors->has('estdockingdate'))
															<span class="help-block">Please fill out this field</span>
														@endif
														<script type="text/javascript">
															var today = new Date().toISOString().split('T')[0];
    														document.getElementsByName("estdockingdate")[0].setAttribute('min', today);
														</script>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group{{$errors->has('exprevenue') ? ' has-error' : ''}}">
														<label>REVENUE EXPECTATION</label>
														<input type="text" name="exprevenue" class="form-control" id="uang" placeholder="RP. 0" >
														@if($errors->has('exprevenue'))
															<span class="help-block">Please fill out this field</span>
														@endif
													</div>
													<script type="text/javascript">
												         $(document).ready(function(){
												            // Format mata uang.
												          $('#uang').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
														})
												    </script>
												</div>
											</div>	
												<!-- <div class="row">
													<div class="col-md-12" style="padding-bottom:45px;">
														<button type="submit" class="btn btn-sm  float-right" 
															style="background-color: #0073e6; margin-right: 15px;">
														<i class="fa fa-save"></i>
														Saved </button>
														<button type="reset" class="btn btn-sm btn-primary float-right" 
															style="background-color: #fff; color: #000; margin-right: 5px;">
														<i class="fa fa-times"></i>
														Clear </button>
													</div>
												</div> 
											</form> -->

												<div class="col-md-4">
													<div class="label-progress">
														<p class="txtprogress">PROGRESS STATUS</p>
													</div>
												</div>
												<div class="col-md-4" >
													<div class="label-progress2">
														<p class="txtprogress">PERCENTAGE</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="label-progress3">
														<p class="txtprogress">FILES</p>
													</div>
												</div>
												<div class="col-md-4" style="padding-top: 1px;">
													<div class="label-waiting">
														<p style="padding-left: 10px;">waiting</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="label-waiting-percent">
														<p style="padding-left: 15px;">0%</p>
													</div>
												</div>
												<div class="col-md-12" style="padding-top: 1px;">
													<div class="progressbar"></div>
												</div>
											<!-- </form> -->
											<div class="row">
												<div class="col-md-12" id="btnadd">
													<button class="btn btnactivity" data-toggle="modal" 
														data-target="#modalForm" style="float: right;">
														Add Activity
													</button>
												</div>
											</div>
 									
 									<!-- MODAL ADD ACTIVITY -->
									<div class="modal fade" id="modalForm" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">

												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">
										                <span aria-hidden="true">&times;</span>
										                <span class="sr-only">Tutup</span>
										            </button>
										            <h4 class="modal-title" id="labelModalKu">Sales Activity Detail</h4>
												</div>
												<div class="modal-body">
													<p class="statusMsg"></p>
													<!-- form save detail -->												
														{{csrf_field()}}													
														<div class="row">
															<div class="col-md-8">
																<div class="form-group{{$errors->has('date2') ? ' has-error' : ''}}">
										                        	<label for="date">Activity Date 
										                        		<span class="simbol">*</span>
										                        	</label>
										                        	<input type="date" class="form-control" id="date" name="date2"/>
										                        	@if($errors->has('date2'))
																		<span class="help-block">Please fill out this field</span>
																	@endif
													                    <script type="text/javascript">
																		var today = new Date().toISOString().split('T')[0];
			    														document.getElementsByName("date2")[0].setAttribute('min', today);
																	</script>
										                    	</div>
															</div>
															<div class="col-md-4">
										                		<div class="form-group" required>
										                        	<label for="method">Activity Method  
										                        		<span class="simbol">*</span>
										                        	</label>
										                        	<select class="form-control" id="method" name="method" 
										                        		required="required">
										                        		<option value="0">Select Method</option>
										                        		<option value="Visit">Visit</option>
										                        		<option value="Email">Email</option>
										                        		<option value="Telphone">Telphone</option>
										                        	</select>
										                   		</div>
										                	</div>
														</div>
														<div class="row">
															<div class="col-md-12">
										                		<div class="form-group" required>
										                       		<label for="activity">Activity Type  
										                       		 	<span class="simbol">*</span>
										                       		</label>
										                       		<select class="form-control" id="activity" name="activity"
										                       		 	required="required">
										                       			<option value="0">select activity</option>
										                       			<option value="Inquiry">Inquiry</option>
										                       			<option value="Negotation">Negotation</option>
										                       			<option value="Next Negotation">Next Negotation</option>
										                       			<option value="Making Quotation">Making Quotation</option>
										                       			<option value="Presentation">Presentation</option>
										                       			<option value="Sales Calling">Sales Calling</option>
										                       		</select>
										                    	</div>
										                	</div>
														</div>
														<div class="row">
															<div class="col-md-12">
										                		<div class="form-group" required>
												                	<label for="participants">Participants  
												                		<span class="simbol">*</span>
												                	</label><br>
												                	<select class="form-control" id="participants" 
												                	name="participants[]" 
												                	required="required" multiple="multiple" 
												                    style="width: 560px">
												                    </select>
												            	</div>
													            <script type="text/javascript">
													                $('#participants').select2({
													                	tags: true,
													                	multiple: true,
													                	tokenSeparators: [',' , ','],
													                });
													            </script>	
										                	</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="form-group" required>
												                	<label for="mom">MOM 
												                		<span class="simbol">*</span>
												                	</label><br>
												                	<textarea id="froala-editor" name="mom">
												               	    </textarea>
												            	</div>
															</div>
														</div>
														<!-- modal footer -->
														<div class="modal-footer">
															<button type="button" class="btn btn-delete" data-dismiss="modal">
											       				Close
											       			</button>
											        		<button type="submit" class="btn btn-primary submitBtn">
											        			Confirm
											        		</button>
											        		<script>
																$(function() {
																	$('textarea#froala-editor').froalaEditor()
																});
															</script>
														</div>
													</form>

												</div>
											</div>
										</div>
									</div>
									<!-- BATAS MODAL ACTIVITY -->
									<div class="col-md-12">
										<table class="table no-footer table-responsive-block table-hover">
											<thead class="">
												<tr role="row">
													<th rowspan="1" colspan="1" style="width: 8%">NO</th>
													<th rowspan="1" colspan="1" style="width: 20%">DATE</th>
													<th rowspan="1" colspan="1" style="width: 20%">Activity</th>
													<th rowspan="1" colspan="1" style="width: 20%">METHOD</th>
													<th rowspan="1" colspan="1" style="width: 20%">PARTICIPANTS</th>
													<th rowspan="1" colspan="1" style="width: 20%">VIEW</th>	
												</tr>
											</thead>
											@php $no = 1; @endphp
											@foreach($t_sales_activity_details as $s)
											<tbody class="vuetable-body">
												<tr>
													<td class="v-align-middle">{{$no++}}</td>
													<td class="v-align-middle">{{$s->date}}</td>
													<td class="v-align-middle">{{$s->activity}}</td>
													<td class="v-align-middle">{{$s->method}}</td>
													<td class="v-align-middle">{{$s->participants}}</td>
													<td class="vuetable-slot text-center v-align-middle">
													<div class="btn-group btn-group-xs">
								               			<a class="btn btn-warning2">
								               				<i class="fa fa-pencil"></i>
								               			</a>
								                	</div>
								                	<div class="btn-group btn-group-xs">
								               			<a class="btn btn-warning2" 
								               				href="/salesActivitiesModal/delete{{ $s->id }}" 
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
									</div>
									<div class="col-md-12" style="padding-top: 12px;">
										<!-- <button type="submit" class="btn btn-sm btn-primary float-right">
											Submit
										</button> -->
										<!-- <button class="btn btn-sm" style="margin-right: 10px; float: right;">
											<i class="fa fa-times"></i>
											Cancel
										</button> -->
										<input type="Button" value="Cancel" class="btn btn-delete" style="margin-right: 10px; float: right;" onclick="history.back(-1)"/>
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
<!-- batas page-wrapper -->
		</div>
	</div>
</div>
<!--- -----------MODAL ADD ACTIVITY------------------------------->