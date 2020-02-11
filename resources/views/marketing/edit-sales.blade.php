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
									<span class="create">Edit</span> 
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
										Edit Sales Activity
									</div>
									<div class="panel-body">
										<div class="row">
											<form role="form" action="{{url('/salesActivitiesModalAdd')}}" method="POST">
												{{csrf_field()}}
												<div class="col-md-4">
													<div class="form-group">
														<label>CODE</label>
														<input type="text" name="code" placeholder="Auto Generated" required="true" 
														class="form-control" value="{{ $t_sales_activity->code }}" readonly="">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>BRANCH</label>
														<input type="text" name="branch" disabled="disabled" class="form-control">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>SALES</label>
														<select class="form-control" name="sales" id="selectsales" required="true" disabled="true">
															 	 <option value="{{ $t_sales_activity->sales_name }}">
																{{$t_sales_activity->sales_name }}</option>	
															 </select>
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
													<div class="form-group">
														<label>CUSTOMER</label>
														 <select id="selectcustomer" class="form-control" name="customer" required="true" disabled="true">
														 		 <option value="{{ $t_sales_activity->customer_name }}">
																{{$t_sales_activity->customer_name }}</option>	
														 </select>
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
													<div class="form-group">
														<label>SHIP</label>
														<select id="selectship" class="form-control" name="ship" required="true" disabled="" 
																 >
																 <option value="{{ $t_sales_activity->ships_name }}">
																{{$t_sales_activity->ships_name }}</option>	
														</select>
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
													<div class="form-group">
														<label>SlIPWAY</label>
														<select class="form-control" name="slipway" id="selectslipway"  required="true" disabled="" 
																 >
																 <option value="{{ $t_sales_activity->slipways_name }}">
																{{$t_sales_activity->slipways_name }}</option>	
														</select>
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
													<div class="form-group">
														<label>DATE</label>
														<input type="date" name="date" class="form-control" value="{{ $t_sales_activity->date }}"  required="true" readonly="" 
															style="padding: 1px 12px;"  >
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>EST DOCKING DATE</label>
														<input type="date" name="estdockingdate" class="form-control" value="{{ $t_sales_activity->est_docking_date }}"  required="true" readonly="" 
															style="padding: 1px 12px;" >
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>REVENUE EXPECTATION</label>
														<input type="text" name="exprevenue" class="form-control" id="uang"  required="true" value="{{ $t_sales_activity->exp_revenue }}" readonly="" >
													</div>
													<script type="text/javascript">
												         $(document).ready(function(){
												            // Format mata uang.
												          $('#uang').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
														})
												    </script>
												</div>
											</div>	
									 

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

												<?php  $isi = "100"; ?>
												<div class="col-md-4" style="padding-top: 1px;">
													 
														<div class="progress" style="width: 110%">
														    <div class="progress-bar" style="width: {{ $hslpersen }}%;">
														        {{ $hslpersen }}%
														    </div>
														</div>														
													 
												</div>
												<div class="col-md-4">
													<div class="label-waiting-percent">
														<p style="padding-left: 15px;">{{ $hslpersen }}%</p>
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
													<i class="fa fa-plus-square"></i>
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
														<input type="hidden" name="id">
														<div class="row">
															<div class="col-md-8">
																<div class="form-group" required>
										                        	<label for="date">Activity Date 
										                        		<span class="simbol">*</span>
										                        	</label>
										                        	<input type="date" class="form-control" id="date" name="date2" required="required"/>
										                        	<script type="text/javascript">
																		var today = new Date().toISOString().split('T')[0];
			    														document.getElementsByName("date2")[0].setAttribute('min', today);
																	</script>
										                    	</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-8">
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
													<th class="text-center" style="width: 8%">NO</th>
													<th class="text-center" style="width: 20%">DATE</th>
													<th class="text-center" style="width: 20%">Activity</th>
													<th class="text-center" style="width: 20%">METHOD</th>
													<th class="text-center" style="width: 20%">PARTICIPANTS</th>
													<th class="text-center" style="width: 20%">VIEW</th>	
												</tr>
											</thead>
											@php $no = 1; @endphp
											@foreach($t_sales_activity_details as $s)
											<tbody class="vuetable-body">
												<tr>
													<td class="text-center">{{$no++}}</td>
													<td class="text-center">{{$s->date}}</td>
													<td class="text-center">{{$s->activity}}</td>
													<td class="text-center">{{$s->method}}</td>
													<td class="text-center">{{$s->participants}}</td>
													<td class="text-center">

													<div class="btn-group btn-group-xs">
								               			<button name="editbtn" class="btn btn-edit" data-date="{{$s->date}}" data-activity="{{$s->activity}}" data-method="{{$s->method}}" data-participants="{{$s->participants}}"data-mom="{{$s->mom}}" data-id={{$s->id}} data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
								                	</div> 								                	
									                	<div class="btn-group btn-group-xs">
									               			<a class="btn btn-delete" 
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
<!--- -----------MODAL EDIT DETAIL ACTIVITY------------------------------->
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sales Activity Detail Edit</h4>
      </div>
      <form action="{{ url('salesEditDetail/update')}}" method="post">      		
      		{{csrf_field()}}
	      <div class="modal-body">
	      		<input type="hidden" name="id" id="id" value="">
            
	            <div class="row">
	              <div class="col-md-8">
	                <div class="form-group" required>
                          <label for="date">Activity Date 
                            <span class="simbol">*</span>
                          </label>
                          <input type="date" class="form-control" id="date" name="date3"
                            required="required" value=""/>
                            <script type="text/javascript">
								var today = new Date().toISOString().split('T')[0];
			    				document.getElementsByName("date3")[0].setAttribute('min', today);
							</script>
                      </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-8">
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
			                	<label for="participants">Participants  
			                		<span class="simbol">*</span>
			                	</label><br>			                

			                    <select class="form-control" id="tagSelect" 
			                			name="tagSelect[]" 
			                		    required="required" style="width: 560px">
			                		    
			                    </select>			                 

			                 	<script type="text/javascript">					                
					                $('#tagSelect').select2({ 
					                	tags: true,
					                	multiple: true,
					                	tokenSeparators: [',' , ','], });
					                						                
					                 </script>     
			            	</div>		   
			            	 
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
 

	                          <script>
								$(function() {									 
									$('#froala-editor').froalaEditor()
								});							
							</script>

	                </div>
	              </div>
	            </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-delete" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	        
	      </div>
      </form>
    </div>
  </div>
</div>

